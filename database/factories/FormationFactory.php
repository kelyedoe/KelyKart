<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => 'Introduction aux bases de laravel',
            'description' => fake()->text($maxNbChars = 200),
            'presentation' => fake()->text($maxNbChars = 200),
            'image_icon'=> fake()->imageUrl($width = 640, $height = 480),
            'video_link_presentation' => 'https://youtu.be/reUZRyXxUs4',
            'total_chapitres' => fake()->randomDigit(),
            'total_duree' => fake()->randomDigit(),
        ];
    }
}
