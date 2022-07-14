<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class NewsFactory extends Factory
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
            'date' => $this->faker->title(),
            'author' => $this->faker->title(),
            'theme' => $this->faker->title(),
            'category' => $this->faker->title(),
            'article' => $this->faker->title(),
        ];
    }
}
