<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Default state is 'pending' (A simple future booking request)
        return [
            // id_room will be set when the factory is called
            'id_user' => User::factory(), // Use factory helper for association
            'check_in' => now()->addDays(rand(7, 30)), // Future check-in for pending status
            'check_out' => null,
            'status' => 'pending', // Base state is pending
        ];
    }

    /**
     * Indicate that the booking is confirmed (the room is currently rented).
     * This sets is_available = false on the related Room.
     */
    public function confirmed(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'confirmed',
                'check_in' => now()->subMonths(3), // Rented for 3 months already
                'check_out' => null, // Tenant is currently renting (no check_out set)
            ];
        });
    }

    /**
     * Indicate that the booking is completed (tenant is no longer renting).
     * The room is available again.
     */
    public function completed(): Factory
    {
        return $this->state(function (array $attributes) {
            $checkIn = $this->faker->dateTimeBetween('-2 years', '-1 year');
            $checkOut = (clone $checkIn)->modify('+6 months'); // Completed 6 months after check-in
            return [
                'status' => 'completed',
                'check_in' => $checkIn,
                'check_out' => $checkOut,
            ];
        });
    }

    /**
     * Indicate that the booking was cancelled.
     * The room is available.
     */
    public function cancelled(): Factory
    {
        return $this->state(function (array $attributes) {
            $checkIn = $this->faker->dateTimeBetween('-1 year', 'now');
            return [
                'status' => 'cancelled',
                'notes' => $this->faker->sentence(),
                'check_in' => $checkIn,
                'check_out' => $checkIn, // Cancellation date
            ];
        });
    }
}