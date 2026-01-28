<section
    class="p-4 bg-white border border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700 sm:p-6 w-full flex flex-col h-full">
    <div class="flex flex-col items-start gap-2 text-gray-900 dark:text-white">
        <span class="inline-flex items-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path
                    d="M512.4 240l-176 0c-17.7 0-32-14.3-32-32l0-176c0-17.7 14.4-32.2 31.9-29.9 107 14.2 191.8 99 206 206 2.3 17.5-12.2 31.9-29.9 31.9zM222.6 37.2c18.1-3.8 33.8 11 33.8 29.5l0 197.3c0 5.6 2 11 5.5 15.3L394 438.7c11.7 14.1 9.2 35.4-6.9 44.1-34.1 18.6-73.2 29.2-114.7 29.2-132.5 0-240-107.5-240-240 0-115.5 81.5-211.9 190.2-234.8zM477.8 288l64 0c18.5 0 33.3 15.7 29.5 33.8-10.2 48.4-35 91.4-69.6 124.2-12.3 11.7-31.6 9.2-42.4-3.9L374.9 340.4c-17.3-20.9-2.4-52.4 24.6-52.4l78.2 0z" />
            </svg>
            <span class="font-semibold text-gray-900 dark:text-white text-sm">
                Tingkat Hunian
            </span>
        </span>
        <p class="text-sm text-gray-500 dark:text-gray-400">Status ketersediaan kamar saat ini</p>
    </div>
    <div class="flex-grow flex items-center justify-center min-h-[300px]">
        <div id="occupancy-chart" class="w-full flex justify-center"></div>
    </div>
    <div class="mt-4 grid grid-cols-2 gap-4 text-center border-t border-gray-100 dark:border-gray-700 pt-4">
        <div>
            <span class="text-gray-500 text-xs uppercase">Total Kamar</span>
            <span class="flex items-center justify-center gap-2 text-lg font-bold text-gray-900 dark:text-white">
                <span>
                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M288 64l64 0 0 416c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-384c0-35.3-28.7-64-64-64l-96 0 0 0-160 0C60.7 0 32 28.7 32 64l0 384c-17.7 0-32 14.3-32 32s14.3 32 32 32l224 0c17.7 0 32-14.3 32-32l0-416zM160 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                </span>
                {{ $roomAll }}
            </span>
        </div>
        <div>
            <span class="text-gray-500 text-xs uppercase">Okupansi</span>
            <span class="text-lg font-bold text-green-600 flex items-center justify-center gap-2">
                <span>
                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M256 0a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm96 312c0 25-12.7 47-32 59.9l0 92.1c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-92.1C172.7 359 160 337 160 312l0-40c0-53 43-96 96-96s96 43 96 96l0 40zM96 32a56 56 0 1 1 0 112 56 56 0 1 1 0-112zm16 240l0 32c0 32.5 12.1 62.1 32 84.7l0 75.3c0 1.2 0 2.5 .1 3.7-8.5 7.6-19.7 12.3-32.1 12.3l-32 0c-26.5 0-48-21.5-48-48l0-56.6C12.9 364.4 0 343.7 0 320l0-32c0-53 43-96 96-96 12.7 0 24.8 2.5 35.9 6.9-12.6 21.4-19.9 46.4-19.9 73.1zM368 464l0-75.3c19.9-22.5 32-52.2 32-84.7l0-32c0-26.7-7.3-51.6-19.9-73.1 11.1-4.5 23.2-6.9 35.9-6.9 53 0 96 43 96 96l0 32c0 23.7-12.9 44.4-32 55.4l0 56.6c0 26.5-21.5 48-48 48l-32 0c-12.3 0-23.6-4.6-32.1-12.3 0-1.2 .1-2.5 .1-3.7zM416 32a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                    </svg>
                </span>
                {{ floor(($roomAll - $roomAvailable) / $roomAll * 100) }}%
            </span>
        </div>
    </div>
</section>
@push('scripts')
<script>
    $(document).ready(function() {
        if ($("#occupancy-chart").length && typeof ApexCharts !== 'undefined') {

            const occupancyOptions = {
                series: [{{ $roomAll - $roomAvailable }}, {{ $roomAvailable }}],
                labels: ['Kamar Terisi', 'Kamar Kosong'],
                chart: {
                    type: 'donut',
                    height: 320,
                    fontFamily: 'Inter, sans-serif',
                    toolbar: { show: false }
                },
                colors: [
                    '#10B981', // Warna hijau untuk kamar terisi
                    '#DA4458' // Warna merah untuk kamar kosong
                ],
                legend: {
                    position: 'bottom',
                    fontFamily: 'Inter, sans-serif',
                    fontWeight: 500,
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
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return val.toFixed(0) + "%";
                    },
                    style: {
                        fontSize: '12px',
                        fontFamily: 'Inter, sans-serif',
                        fontWeight: 'bold',
                        colors: [
                            '#0F1A18', // Warna angka untuk bagian hijau
                            '#EDEDF4' // Warna angka untuk bagian merah
                        ]
                    },
                    dropShadow: { enabled: false }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '65%',
                            labels: {
                                show: true,
                                name: {
                                    show: true,
                                    fontSize: '14px',
                                    fontFamily: 'Inter, sans-serif',
                                    color: '#6B7280',
                                    offsetY: -10
                                },
                                value: {
                                    show: true,
                                    fontSize: '30px',
                                    fontFamily: 'Inter, sans-serif',
                                    fontWeight: 700,
                                    color: '#fff',
                                    offsetY: 10,
                                    formatter: function(val) {
                                        return val + " Unit";
                                    }
                                },
                                total: {
                                    show: true,
                                    showAlways: true,
                                    label: 'Total Terisi',
                                    fontSize: '12px',
                                    fontFamily: 'Inter, sans-serif',
                                    fontWeight: 600,
                                    color: '#10B981',
                                    formatter: function(w) {
                                        return w.globals.seriesTotals[0] + " Unit";
                                    }
                                }
                            }
                        }
                    }
                },
                stroke: { show: false },
                // RESPONSIVE
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: { height: 280 },
                        legend: { position: 'bottom' },

                        plotOptions: {
                            pie: {
                                donut: {
                                    labels: {
                                        value: {
                                            // Desktop: 30px -> Mobile: 20px
                                            fontSize: '20px',
                                            offsetY: 5 // Sesuaikan sedikit posisi
                                        },
                                        total: {
                                            // Desktop: 14px -> Mobile: 12px
                                            fontSize: '12px',
                                            label: 'Terisi', // Opsional: Persingkat label jika perlu
                                        },
                                        name: {
                                            fontSize: '12px', // nama label
                                            offsetY: -5
                                        }
                                    }
                                }
                            }
                        }
                    }
                }]
            };
            var chartElement = $("#occupancy-chart")[0];
            var chart2 = new ApexCharts(chartElement, occupancyOptions);
            chart2.render();
        }
    });
</script>
@endpush
