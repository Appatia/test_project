<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'format' => $this->faker->title(),
            'width' => $this->faker->title(),
            'height' => $this->faker->title(),
            'quality' => $this->faker->title(),
            'snap' => $this->faker->title(),
        ];
    }
}
