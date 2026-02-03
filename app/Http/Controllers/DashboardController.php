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
        /* -------------------------------------------------------------------------- */
        /*                                    ADMIN                                   */
        /* -------------------------------------------------------------------------- */
        $tenantCount = $this->bookingRepository->get(filters: [
            'where' => [
                ['status', 'confirmed']
            ]
        ])->count();
        $roomAvailable = $this->roomRepository->available()->count();
        $roomAll = $this->roomRepository->all()->count();
        $testimonials = $this->testimonialRepository->setPaginationOptions(orderBy: 'desc', perPage: 5)->get();
        $dueBookings = $this->paymentRepository->getBookingsByDueStatus();
        // dd($dueBookings);
        $adminPayments = $this->paymentRepository->getReport()->stats;
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

        /* -------------------------------------------------------------------------- */
        /*                                    USER                                    */
        /* -------------------------------------------------------------------------- */
        $paymentStatus = $request->query('paymentStatus');
        $bookings = $this->bookingRepository->setPaginationOptions(orderBy: 'desc')->getUserBooking(auth()->user()->id, with: ['user', 'room.pictures'])->first();
        $dueDate = $this->paymentRepository->getNextPeriod($bookings?->id, true);
        $userPayments = $this->paymentRepository
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
            'user' => [
                'payments' => $userPayments ?? null,
                'paymentStatus' => $paymentStatus ?? null,
                'bookings' => $bookings ?? null,
                'dueDate' => $dueDate ?? null,
            ],
            'admin' => [
                'dueBookings' => $dueBookings ?? null,
                'payments' => $adminPayments ?? null,
                'tenantCount' => $tenantCount ?? null,
                'roomAvailable' => $roomAvailable ?? null,
                'roomAll' => $roomAll ?? null,
                'testimonials' => $testimonials ?? null,
            ]
        ];

        return view('dashboard', $data);
    }
}
