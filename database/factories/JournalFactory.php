<?php

namespace Database\Factories;

use App\Models\Journal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class JournalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Journal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Get available payment method IDs
        $paymentMethods = DB::table('payment_methods')->pluck('id')->toArray();

        return [
            'type' => 'earnings',
            'detail' => $this->faker->sentence(3),
            'amount' => $this->faker->numberBetween(100000, 5000000),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'notes' => $this->faker->optional()->sentence(5),
            'payment_method' => $this->faker->randomElement($paymentMethods),
        ];
    }

    /**
     * State for an expenditure journal entry.
     */
    public function expenditure(): Factory
    {
        $expenditureDetails = [
            'Pembayaran tagihan listrik',
            'Biaya perbaikan kamar mandi',
            'Pembelian peralatan kebersihan',
            'Gaji karyawan bulanan',
            'Pajak bumi dan bangunan',
        ];

        return $this->state(function (array $attributes) use ($expenditureDetails) {
            return [
                'type' => 'expends',
                'detail' => $this->faker->randomElement($expenditureDetails),
                'amount' => $this->faker->numberBetween(500000, 2000000),
            ];
        });
    }
}