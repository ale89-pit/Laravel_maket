<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jewelry;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jewelry>
 */
class jewelryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Jewelry::class;
    public function definition(): array
    {
        return [
            'material' => $this->faker->word(),
            'carat' => $this->faker->word(),
            'weight' => $this->faker->randomFloat(2, 1, 100),
            'color' => $this->faker->word(),
            'type' => $this->faker->word(),
        ];
    }
}
