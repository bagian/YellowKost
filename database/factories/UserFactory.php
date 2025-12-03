<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'full_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // default password
            'remember_token' => Str::random(10),
            'id_role' => 2, // Assuming role ID 2 is 'User'
            'phone' => $this->faker->unique()->phoneNumber(),
            'parent_phone' => $this->faker->unique()->phoneNumber(),
            'ktp' => 'images/ktp/ktp_default.jpg',
            'nik' => $this->faker->unique()->numerify('################'),
            'address' => $this->faker->address(),
        ];
    }
}