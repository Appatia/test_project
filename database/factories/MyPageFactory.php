<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class MyPageFactory extends Factory
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
            'link' => $this->faker->title(),
            'e-mail' => $this->faker->title(),
            'port' => $this->faker->title(),
            'IP' => $this->faker->title(),
            'host' => $this->faker->title(),
        ];
    }
}
