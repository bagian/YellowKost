<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak History Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* CSS Khusus Print */
        @media print {
            .no-print {
                display: none;
            }
        }

        body {
            background-color: white;
            /* Pastikan background putih saat print */
        }
    </style>
</head>

<body class="p-8 bg-white text-gray-800" onload="window.print()">

    <div class="mb-8 text-center border-b pb-4">
        <h1 class="text-2xl font-bold uppercase">Laporan History Pembayaran</h1>
        <p class="text-sm text-gray-500">Dicetak pada: {{ date('d-m-Y H:i') }}</p>
    </div>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b-2 border-gray-300">
                <th class="py-2">No</th>
                <th class="py-2">Tanggal</th>
                <th class="py-2">Keterangan</th>
                <th class="py-2 text-right">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $index => $item)
            <tr class="border-b border-gray-100">
                <td class="py-2">{{ $index + 1 }}</td>
                <td class="py-2">{{ $item->created_at->format('d/m/Y') }}</td>
                <td class="py-2">{{ $item->description ?? '-' }}</td>
                <td class="py-2 text-right">Rp {{ number_format($item->amount, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-12 flex justify-end">
        <div class="text-center">
            <p class="mb-16">Mengetahui,</p>
            <p class="font-bold underline">Admin Keuangan</p>
        </div>
    </div>

</body>

</html>