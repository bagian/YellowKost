<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\Interface\TestimonialRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    protected $bookingRepository, $paymentRepository, $roomRepository, $testimonialRepository;
    function __construct(BookingRepositoryInterface $bookingRepository, PaymentRepositoryInterface $paymentRepository, RoomRepositoryInterface $roomRepository, TestimonialRepositoryInterface $testimonialRepository)
    {
        $this->bookingRepository = $bookingRepository;
        $this->paymentRepository = $paymentRepository;
        $this->roomRepository = $roomRepository;
        $this->testimonialRepository = $testimonialRepository;
    }

    function index(Request $request)
    {
        $paymentStatus = $request->query('paymentStatus');
        $bookings = $this->bookingRepository->setPaginationOptions(orderBy: 'desc')->getUserBooking(auth()->user()->id, with: ['user', 'room.pictures'])->first();
        $dueDate = $this->paymentRepository->getNextPeriod($bookings?->id, true);
        $tenantCount = $this->bookingRepository->get(filters: [
            'where' => [
                ['status', 'confirmed']
            ]
        ])->count();
        $roomAvailable = $this->roomRepository->available()->count();
        $roomAll = $this->roomRepository->all()->count();
        $payments = $this->paymentRepository->getReport()->stats;
        $testimonials = $this->testimonialRepository->setPaginationOptions(orderBy: 'desc', perPage: 5)->get();
        // dd($payments);

        /* -------------------------------------------------------------------------- */
        /*                                   CONTOH                                   */
        /* -------------------------------------------------------------------------- */
        // Instead of $report->table->whereMonth(...), do this:
        // $report = $this->paymentRepository->getReport();
        // $currentMonthTable = $report->table->filter(function ($item) {
        //     return \Carbon\Carbon::parse($item->date)->isCurrentMonth();
        // });
        // // Now you can use the accessor!
        // foreach ($currentMonthTable as $item) {
        //     echo $item->amount_formatted;
        // }

        $paymentHistory = $this->paymentRepository
            ->setPaginationOptions(orderBy: 'desc', perPage: 5)
            ->get(
                filters: [
                    'where' => [
                        ['id_booking' => $bookings?->id]
                    ],
                    'whereHas' => [
                        'booking' => function ($q) {
                            $q->where('id_user', auth()->user()->id);
                        }
                    ]
                ],
                with: ['payMethod']
            );

        $data = [
            'payments' => $payments ?? null,
            'paymentStatus' => $paymentStatus ?? null,
            'bookings' => $bookings ?? null,
            'paymentHistory' => $paymentHistory ?? null,
            'dueDate' => $dueDate ?? null,
            'tenantCount' => $tenantCount ?? null,
            'roomAvailable' => $roomAvailable ?? null,
            'roomAll' => $roomAll ?? null,
            'testimonials' => $testimonials ?? null,
        ];

        return view('dashboard', $data);
    }
}
