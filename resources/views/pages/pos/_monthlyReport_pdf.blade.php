<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Bulanan</title>
    <style>
        body { font-family: DejaVu Sans, Arial, Helvetica, sans-serif; font-size: 12px; color: #222; }
        .header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #f4f4f4; }
        .right { text-align: right; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Laporan Bulanan</h1>
        @if(isset($period))
            <div>Periode: {{ $period['month'] ?? '' }} / {{ $period['year'] ?? '' }}</div>
        @endif
    </div>

    @php
        $table = collect(data_get($journalReport, 'table', $journalReport ?? []));
        function formatRp($v){ return 'Rp ' . number_format((float)$v, 2, ',', '.'); }
    @endphp

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Detail</th>
                <th>Tipe</th>
                <th class="right">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @forelse($table as $row)
                <tr>
                    <td>{{ data_get($row, 'date') ? date('d M Y', strtotime(data_get($row, 'date'))) : '-' }}</td>
                    <td>{{ data_get($row, 'detail') ?? '-' }}</td>
                    <td>{{ data_get($row, 'type') ?? '-' }}</td>
                    <td class="right">{{ formatRp(data_get($row, 'amount') ?? 0) }}</td>
                </tr>
            @empty
                <tr><td colspan="4" style="text-align:center">Tidak ada data untuk periode ini.</td></tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
