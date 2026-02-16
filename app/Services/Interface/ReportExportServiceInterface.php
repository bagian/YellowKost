<?php

namespace App\Services\Interface;

use Symfony\Component\HttpFoundation\Response;

interface ReportExportServiceInterface
{
    /**
     * Export journal report to given type (pdf|excel)
     *
     * @param mixed $journalReport
     * @param array $period
     * @param string $type
     * @return Response
     */
    public function exportJournal($journalReport, array $period = [], string $type = 'pdf');
}
