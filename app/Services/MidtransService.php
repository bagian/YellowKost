<?php

namespace App\Services;

use App\Models\PaymentMethod;
use App\Repositories\Interface\PaymentRepositoryInterface;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransService
{
    protected $paymentRepository;

    public function __construct(PaymentRepositoryInterface $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function processCheckout($data)
    {
        // Simpan transaksi ke database menggunakan repository
        $payment = $this->paymentRepository->create([
            'id_booking' => $data['id_booking'],
            'amount' => $data['amount'],
            'date' => $data['date'],
            'period' => $data['period'],
            'is_dp' => $data['is_dp'],
            'payment_method' => PaymentMethod::where('slug', 'online')->first()->id,
            'status' => 'pending'
        ]);

        // Membuat Snap Token Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $payment->id,
                'gross_amount' => $payment->amount
            ],
            'customer_details' => [
                'first_name' => $data['full_name'],
                'email' => $data['email'],
                'phone' => $data['phone']
            ],
            'callbacks' => [
                'finish' => route('payment.finish'),
                'unfinish' => route('payment.unfinish'),
                'error' => route('payment.error'),
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return [
            'transaction' => $payment,
            'snap_token' => $snapToken
        ];
    }
}
