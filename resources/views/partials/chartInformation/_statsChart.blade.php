<section
    class="p-4 bg-white border border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700 sm:p-6 w-full">
    <div class="flex flex-col sm:flex-row justify-between items-start  mb-4 gap-4">
        <div class="flex flex-col items-start gap-2 text-gray-900 dark:text-white">
            <span class="inline-flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64L0 400c0 44.2 35.8 80 80 80l400 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 416c-8.8 0-16-7.2-16-16L64 64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7 262.6 153.4c-12.5-12.5-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l73.4-73.4 57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                </svg>
                <span class="font-semibold text-gray-900 dark:text-white text-sm">
                    Data Keuangan
                </span>
            </span>
            <p class="text-sm text-gray-500 dark:text-gray-400">Ringkasan pemasukan dan pengeluaran</p>
        </div>

        </span>
        <div class="w-full sm:w-auto">
            <div class="relative w-full">
                <select
                    class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-rose-500 focus:border-rose-500 focus-visible:outline-none focus:outline-none block w-full p-2.5 px-4 pr-10 dark:bg-rose-900/70 dark:border-rose-600/30 dark:text-white cursor-pointer">
                    <option selected>2026</option>
                    <option value="2025">2025</option>
                </select>
                <div
                    class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-gray-900 dark:text-white">
                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M140.3 376.8c12.6 10.2 31.1 9.5 42.8-2.2l128-128c9.2-9.2 11.9-22.9 6.9-34.9S301.4 192 288.5 192l-256 0c-12.9 0-24.6 7.8-29.6 19.8S.7 237.5 9.9 246.6l128 128 2.4 2.2z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="p-4 bg-green-50 rounded-xl dark:bg-green-900/20 border border-green-100 dark:border-green-800">
            <span class="text-xs font-semibold text-green-600 dark:text-green-400 uppercase">Pemasukan</span>
            <h4 class="text-md font-bold text-green-700 dark:text-green-300">Rp {{ number_format($payments->sum('earnings'), 2, ',', '.') }}</h4>
        </div>
        <div class="p-4 bg-red-50 rounded-xl dark:bg-red-900/20 border border-red-100 dark:border-red-800">
            <span class="text-xs font-semibold text-red-600 dark:text-red-400 uppercase">Pengeluaran</span>
            <h4 class="text-md font-bold text-red-700 dark:text-red-300">Rp {{ number_format($payments->sum('expends'), 2, ',', '.') }}</h4>
        </div>
        <div class="p-4 bg-blue-50 rounded-xl dark:bg-blue-900/20 border border-blue-100 dark:border-blue-800">
            <span class="text-xs font-semibold text-blue-600 dark:text-blue-400 uppercase">Laba Bersih</span>
            <h4 class="text-md font-bold text-blue-700 dark:text-blue-300">Rp {{ number_format($payments->sum('profit'), 2, ',', '.') }}</h4>
        </div>
    </div>

    <div class="relative w-full overflow-hidden">
        <div id="revenue-chart"></div>
    </div>
</section>

@push('scripts')
<script>
    $(document).ready(function() {
        if ($("#revenue-chart").length && typeof ApexCharts !== 'undefined') {
            const options = {
                chart: {
                    height: 350,
                    type: 'bar',
                    fontFamily: 'Inter, sans-serif',
                    toolbar: { show: false },
                    width: '100%'
                },
                colors: [
                    '#10B981', // Hijau
                    '#DA4458' // Merah
                ],

                series: [{
                    name: 'Pemasukan',
                    data: [
                        @foreach($payments as $payment)
                            {{ $payment->earnings }}
                            @if(!$loop->last), @endif
                        @endforeach
                    ]
                }, {
                    name: 'Pengeluaran',
                    data: [
                        @foreach($payments as $payment)
                            {{ $payment->expends }}
                            @if(!$loop->last), @endif
                        @endforeach
                    ]
                }],
                // Pengaturan Legend
                legend: {
                    show: true,
                    position: 'bottom',
                    horizontalAlign: 'center',
                    fontSize: '12px',
                    fontWeight: 400,
                    labels: {
                        colors: '#6B7280',
                        useSeriesColors: false
                    },
                    markers: {
                        radius: 12,
                        strokeWidth: 0,
                        shape: 'circle',
                        offsetX: -6,
                        offsetY: 0
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 10
                    },
                },
                // Responsive (HP)
                responsive: [{
                    breakpoint: 640,
                    options: {
                        chart: { height: 300 },
                        plotOptions: {
                            bar: {
                                columnWidth: '70%',
                                dataLabels:{
                                    position: 'top'
                                }
                            }
                        },
                        xaxis: {
                            labels: { rotate: -45, rotateAlways: true, style: { fontSize: '10px' } }
                        },
                        yaxis: {
                            labels: {
                                formatter: function(value) {
                                    return (value / 1000000).toFixed(0) + "Jt";
                                },
                                style: { fontSize: '10px' },
                            }
                        },
                        legend: { position: 'bottom', offsetY: 0 }
                    }
                }],

                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    labels: {
                        style: { colors: '#6B7280', fontSize: '12px' }
                    },
                    axisBorder: { show: false },
                    axisTicks: { show: false }
                },

                yaxis: {
                    labels: {
                        style: { colors: '#6B7280', fontSize: '12px' },
                        formatter: function(value) {
                            return "Rp " + (value / 1000000).toFixed(1) + " Jt";
                        }
                    }
                },

                grid: {
                    show: true,
                    borderColor: '#F3F4F6',
                    padding: { top: 0, right: 0, bottom: 0, left: 10 }
                },
                plotOptions: {
                    bar: { horizontal: false, columnWidth: '50%', borderRadius: 4 },
                },
                dataLabels: { enabled: false },
                stroke: { show: true, width: 2, colors: ['transparent'] },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "Rp " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                        }
                    }
                }
            };
            var chartElement = $("#revenue-chart")[0];
            var chart = new ApexCharts(chartElement, options);
            chart.render();
        }
    });
</script>
@endpush
