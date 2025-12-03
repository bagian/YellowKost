<?php

namespace Database\Factories;

use App\Models\RoomPicture;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomPictureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoomPicture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Using a placeholder image URL for seeding, as requested.
        // In a real application, you would upload to storage and save the path.
        $imageUrl = 'https://placehold.co/600x400/000000/FFFFFF/png?text=Room+Photo';

        return [
            // id_room will be set when the factory is called on a specific room
            'name' => $this->faker->word() . ' picture',
            'url' => 'public/placeholder.jpg', // Placeholder for Storage::url()
        ];
    }
}