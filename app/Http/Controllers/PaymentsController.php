<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use App\Services\MidtransService;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    protected $midtransService, $paymentRepository, $bookingRepository;

    public function __construct(MidtransService $midtransService, PaymentRepositoryInterface $paymentRepository, BookingRepositoryInterface $bookingRepository)
    {
        $this->midtransService = $midtransService;
        $this->paymentRepository = $paymentRepository;
        $this->bookingRepository = $bookingRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.uploadBukti.checkoutMidtrans");
    }

    public function checkout(Request $request)
    {
        $booking = $this->bookingRepository->getUserBooking(auth()->user()->id, ['confirmed'], ['room', 'user'])->first();
        $period = $this->paymentRepository->getNextPeriod($booking->id);

        $is_dp = false;
        if ($booking->status == 'pending') {
            $is_dp = true;
        } else if ($booking->status == 'confirmed') {
            $is_dp = false;
        }

        $data = [
            'id_booking' => $booking->id,
            'amount' => $booking->room->price,
            'date' => now()->format('Y-m-d'),
            'period' => $period,
            'is_dp' => $is_dp,
            'full_name' => $booking->user->full_name,
            'phone' => $booking->user->phone,
            'email' => $booking->user->email,
        ];

        $result = $this->midtransService->processCheckout($data);

        return response()->json([
            'snap_token' => $result['snap_token'],
            'transaction' => $result['transaction']
        ]);
    }

    public function handleWebhook(Request $request)
    {
        \Log::info("Data dari Midtrans: ", $request->all());

        $serverKey = config('midtrans.server_key');

        // Validasi signature key dari Midtrans
        $signatureKey = hash(
            "sha512",
            $request->order_id .
            $request->status_code .
            $request->gross_amount .
            $serverKey
        );

        if ($signatureKey !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature key'], 403);
        }

        $payment = $this->paymentRepository->find($request->order_id);

        if (!$payment) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $data = [];
        if ($request->transaction_status == 'settlement' || $request->transaction_status == 'capture') {
            $data['status'] = 'paid'; // Status pembayaran berhasil
        } elseif ($request->transaction_status == 'cancel' || $request->transaction_status == 'expire') {
            $data['status'] = 'failed'; // Status pembayaran gagal atau kadaluarsa
        } elseif ($request->transaction_status == 'pending') {
            $data['status'] = 'pending'; // Status menunggu pembayaran
        }

        $payment = $this->paymentRepository->update($payment, $data);

        return response()->json(['message' => 'Webhook processed successfully']);
    }

    public function finish()
    {
        return view('pages.uploadBukti.finish');
    }

    public function unfinish()
    {
        return view('pages.uploadBukti.unfinish');
    }

    public function error()
    {
        return view('pages.uploadBukti.error');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
