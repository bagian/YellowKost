<?php

namespace App\Services;

use App\Services\Interface\ReportExportServiceInterface;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ReportExportService implements ReportExportServiceInterface
{
    /**
     * Export journal report to PDF or Excel (CSV fallback).
     * Requires `barryvdh/laravel-dompdf` for PDF. Excel is exported as CSV to avoid extra deps.
     */
    public function exportJournal($journalReport, array $period = [], string $type = 'pdf')
    {
        $month = $period['month'] ?? now()->format('m');
        $year = $period['year'] ?? now()->format('Y');
        $filenameBase = "journal-report-{$year}-{$month}";

        // Normalize table data
        $table = collect(data_get($journalReport, 'table', $journalReport ?? []));

        if ($type === 'excel' || $type === 'csv') {
            // Build CSV content
            $rows = [];
            $rows[] = ["Tanggal", "Detail", "Tipe", "Jumlah"];
            foreach ($table as $r) {
                $rows[] = [
                    data_get($r, 'date') ? date('Y-m-d', strtotime(data_get($r, 'date'))) : '',
                    strip_tags(data_get($r, 'detail') ?? ''),
                    data_get($r, 'type') ?? '',
                    data_get($r, 'amount') ?? 0,
                ];
            }

            // Convert to CSV string
            $handle = fopen('php://temp', 'r+');
            foreach ($rows as $row) {
                fputcsv($handle, $row);
            }
            rewind($handle);
            $csv = stream_get_contents($handle);
            fclose($handle);

            $filename = $filenameBase . '.csv';
            return response($csv, 200, [
                'Content-Type' => 'text/csv; charset=UTF-8',
                'Content-Disposition' => "attachment; filename=\"{$filename}\"",
            ]);
        }

        // PDF export - prefer barryvdh/laravel-dompdf
        if (class_exists('\\Barryvdh\\DomPDF\\Facade\\Pdf') || class_exists('Barryvdh\\DomPDF\\Facade\\Pdf')) {
            $view = View::make('pages.pos._monthlyReport_pdf', [
                'journalReport' => $journalReport,
                'period' => $period,
            ]);

            // Use the facade if available
            if (class_exists('\\Barryvdh\\DomPDF\\Facade\\Pdf')) {
                $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadHTML($view->render());
                $filename = $filenameBase . '.pdf';
                return $pdf->download($filename);
            }
        }

        // Fallback: return printable HTML view with attachment headers so user can save as PDF manually
        $filename = $filenameBase . '.html';
        return response(View::make('pages.pos._monthlyReport_pdf', [
            'journalReport' => $journalReport,
            'period' => $period,
        ])->render(), 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
            'Content-Disposition' => "inline; filename=\"{$filename}\"",
        ]);
    }
}
