<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'id_room' => Room::factory(),
            'id_user' => User::factory(),
            'category' => $this->faker->randomElement(['supply', 'service', 'maintenance']),
            'amount' => $this->faker->numberBetween(10000, 100000),
            'priority' => $this->faker->randomElement(['high', 'medium', 'low']),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'status' => $this->faker->randomElement(['completed', 'incomplete', 'progress']),
        ];
    }
}
