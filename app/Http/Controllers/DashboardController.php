<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $bookingRepository, $paymentRepository;
    function __construct(BookingRepositoryInterface $bookingRepository, PaymentRepositoryInterface $paymentRepository)
    {
        $this->bookingRepository = $bookingRepository;
        $this->paymentRepository = $paymentRepository;
    }

    function index(Request $request)
    {
        $paymentStatus = $request->query('paymentStatus');
        $bookings = $this->bookingRepository->setPaginationOptions(orderBy: 'desc')->getUserBooking(auth()->user()->id, with: ['user', 'room.pictures'])->first();
        $dueDate = $this->paymentRepository->getNextPeriod($bookings?->id, true);
        $payments = $this->paymentRepository
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
        return view('dashboard', compact('bookings', 'payments', 'dueDate', 'paymentStatus'));
    }
}
