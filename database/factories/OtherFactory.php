<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Other;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Other>
 */
class OtherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Other::class;
    public function definition(): array
    {
        return [
            'category' => $this->faker->word(),
            'model' => $this->faker->word(),
            'serial_number' => Str::random(10),
            'brand' => $this->faker->word()
        ];
    }
}
