<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Periods based on your migration: ['day', 'month', 'year']
        $periods = ['month', 'year'];

        return [
            'room_name' => $this->faker->unique()->numerify('Kamar #: ###'),
            'price' => $this->faker->numberBetween(500000, 3000000) * 100 / 100, // Price between 500k and 3 million
            'period' => $this->faker->randomElement($periods),
            'is_available' => true, // Default to available, will be updated by Booking creation
        ];
    }

    /**
     * Indicate that the room is booked (for testing purposes).
     * This will be used to ensure some rooms are marked as unavailable.
     */
    public function booked(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'is_available' => false,
            ];
        });
    }
}