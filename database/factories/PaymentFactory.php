<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Get available payment method IDs
        $paymentMethods = DB::table('payment_methods')->pluck('id')->toArray();
        $date = $this->faker->dateTimeBetween('-1 year', 'now');

        return [
            // id_booking will be set when the factory is called
            'amount' => $this->faker->numberBetween(1000000, 5000000), // Default high amount
            'date' => $date,
            'status' => 'confirmed',
            'is_dp' => false,
            'payment_method' => $this->faker->randomElement($paymentMethods),
        ];
    }

    /**
     * State for a Down Payment (usually 10-20% of total price).
     */
    public function downPayment(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'amount' => $this->faker->numberBetween(500000, 1000000),
                'is_dp' => true,
            ];
        });
    }

    /**
     * State for a Full Payment.
     */
    public function fullPayment(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'amount' => $this->faker->numberBetween(1500000, 3000000),
                'is_dp' => false,
            ];
        });
    }
}