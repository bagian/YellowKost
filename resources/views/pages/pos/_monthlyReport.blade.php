@extends('default')

@section('content')
@include ('components._breadcrumbLink')
<div class="justify-center max-w-7xl p-4 pt-20 mx-auto">
    <div c  lass="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Laporan <span class="text-yellow-500">Bulanan</span></h1>
        <p class="mt-1 text-gray-500 dark:text-gray-400">Laporan pendapatan dan pengeluaran bulanan.</p>
    </div>
    <div class="w-full mx-auto">
        <div class="bg-white border border-gray-200 drop-shadow-lg rounded-2xl dark:border-gray-800 dark:bg-gray-800">
            <div class="w-full p-6 border-b border-gray-600">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Laporan Bulanan</h2>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Rekap jurnal untuk periode yang dipilih.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        {{-- month/year filter form (GET) --}}
                        <form method="GET" action="{{ route('journal.report') }}" class="flex items-center gap-2">
                            <label for="month" class="sr-only">Bulan</label>
                            <select id="month" name="month" class="block w-28 px-3 py-2 text-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                                @php
                                    $selectedMonth = request()->query('month') ?? ($period['month'] ?? now()->format('m'));
                                    $selectedYear = request()->query('year') ?? ($period['year'] ?? now()->format('Y'));
                                    $months = [
                                        '01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni',
                                        '07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'
                                    ];
                                @endphp
                                @foreach($months as $mVal => $mLabel)
                                    <option value="{{ $mVal }}" @if($mVal == $selectedMonth) selected @endif>{{ $mLabel }}</option>
                                @endforeach
                            </select>

                            <label for="year" class="sr-only">Tahun</label>
                            <select id="year" name="year" class="block w-24 px-3 py-2 text-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                                @php
                                    $currentYear = now()->format('Y');
                                @endphp
                                @for($y = $currentYear; $y >= $currentYear - 5; $y--)
                                    <option value="{{ $y }}" @if($y == $selectedYear) selected @endif>{{ $y }}</option>
                                @endfor
                            </select>

                            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-green-600 rounded-lg hover:bg-green-700">Tampilkan</button>
                        </form>

                        {{-- quick info: show period if available --}}
                        @if(isset($period) || data_get($journalReport, 'period'))
                            <div class="text-sm text-gray-600 dark:text-gray-300">Periode: <span class="font-semibold">{{ $period['month'] ?? '' }} / {{ $period['year'] ?? '' }}</span></div>
                        @endif

                        <a href="{{ route('journal.report', array_merge(request()->query(), ['type' => request()->query('type') ?? 'pdf'])) }}" target="_blank" class="text-sm text-gray-500 underline">Cetak</a>
                    </div>
                </div>
            </div>
            <div class="p-6 space-y-6">
                @php
                    // journalReport may be an object with ->table or a Collection/array directly.
                    $tableData = data_get($journalReport, 'table', $journalReport);
                    $table = collect($tableData ?? []);
                    $earnings = $table->where('type', 'earnings')->sum('amount');
                    $expends = $table->where('type', 'expends')->sum('amount');
                    $profit = $earnings - $expends;
                    if (! function_exists('formatRp')) {
                        function formatRp($v){ return 'Rp ' . number_format((float)$v, 2, ',', '.'); }
                    }
                @endphp

                {{-- Summary cards --}}
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="p-4 bg-green-50 border border-green-100 rounded-xl">
                        <div class="text-sm font-medium text-green-700">Pemasukan</div>
                        <div class="mt-2 text-xl font-bold text-green-800">{{ formatRp($earnings) }}</div>
                    </div>
                    <div class="p-4 bg-red-50 border border-red-100 rounded-xl">
                        <div class="text-sm font-medium text-red-700">Pengeluaran</div>
                        <div class="mt-2 text-xl font-bold text-red-800">{{ formatRp($expends) }}</div>
                    </div>
                    <div class="p-4 bg-yellow-50 border border-yellow-100 rounded-xl">
                        <div class="text-sm font-medium text-yellow-700">Laba / Rugi</div>
                        <div class="mt-2 text-xl font-bold text-yellow-800">{{ formatRp($profit) }}</div>
                    </div>
                </div>

                {{-- Responsive table: desktop table, mobile cards --}}
                <div>
                    {{-- Desktop table --}}
                    <div class="hidden md:block">
                        <div class="overflow-x-auto rounded-lg">
                            <table class="min-w-full text-left divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-900">
                                    <tr>
                                        <th class="px-4 py-3 text-sm font-medium text-gray-700">Tanggal</th>
                                        <th class="px-4 py-3 text-sm font-medium text-gray-700">Detail</th>
                                        <th class="px-4 py-3 text-sm font-medium text-gray-700">Tipe</th>
                                        <th class="px-4 py-3 text-sm font-medium text-gray-700 text-right">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 bg-white dark:bg-gray-800">
                                        @forelse($table as $row)
                                            @php $type = data_get($row, 'type'); @endphp
                                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-900">
                                                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ data_get($row, 'date') ? date('d M Y', strtotime(data_get($row, 'date'))) : '-' }}</td>
                                                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ data_get($row, 'detail') ?? '-' }}</td>
                                                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">
                                                    @if($type === 'earnings')
                                                        <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium rounded bg-green-100 text-green-800">Pemasukan</span>
                                                    @elseif($type === 'expends')
                                                        <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium rounded bg-red-100 text-red-800">Pengeluaran</span>
                                                    @else
                                                        <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium rounded bg-gray-100 text-gray-800">{{ ucfirst($type ?? '-') }}</span>
                                                    @endif
                                                </td>
                                                <td class="px-4 py-3 text-sm font-semibold text-right {{ $type === 'earnings' ? 'text-green-700 dark:text-green-300' : ($type === 'expends' ? 'text-red-700 dark:text-red-300' : 'text-gray-800 dark:text-gray-100') }}">{{ formatRp(data_get($row, 'amount') ?? 0) }}</td>
                                            </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-500">Tidak ada data untuk periode ini.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Mobile cards --}}
                    <div class="md:hidden">
                        <div class="space-y-3">
                            @forelse($table as $row)
                                @php $mType = data_get($row, 'type'); @endphp
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <div class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ data_get($row, 'detail') ?? '-' }}</div>
                                            <div class="mt-1 text-xs text-gray-500 dark:text-gray-400 flex items-center gap-2">
                                                @if($mType === 'earnings')
                                                    <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium rounded bg-green-100 text-green-800">Pemasukan</span>
                                                @elseif($mType === 'expends')
                                                    <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium rounded bg-red-100 text-red-800">Pengeluaran</span>
                                                @else
                                                    <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium rounded bg-gray-100 text-gray-800">{{ ucfirst($mType ?? '-') }}</span>
                                                @endif
                                                <span class="text-xs text-gray-500 dark:text-gray-400">•</span>
                                                <span class="text-xs text-gray-500 dark:text-gray-400">{{ data_get($row, 'date') ? date('d M Y', strtotime(data_get($row, 'date'))) : '-' }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 text-right">
                                            <div class="text-sm font-bold {{ $mType === 'earnings' ? 'text-green-700 dark:text-green-300' : ($mType === 'expends' ? 'text-red-700 dark:text-red-300' : 'text-gray-900 dark:text-white') }}">{{ formatRp(data_get($row, 'amount') ?? 0) }}</div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="p-4 text-center text-sm text-gray-500">Tidak ada data untuk periode ini.</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
</script>
@endpush
@endsection
