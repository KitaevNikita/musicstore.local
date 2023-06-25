<?php

namespace Database\Factories;

use App\Models\Com;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'topic' => $this->faker->sentence(),
            'text' => $this->faker->sentence(),
        ];
    }
}
