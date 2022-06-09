<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class BlogFactory extends Factory
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
            'blog' => $this->faker->blog(),
            'followers' => $this->faker ->followers(),
            'likes' => $this->faker ->likes(),
            'reply' => $this->faker ->reply(),
            'comments' => $this->faker ->comments(),
        ];
    }
}
