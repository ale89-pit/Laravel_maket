<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Book; // extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'genre' => $this->faker->paragraph(),
            'pages'=> $this->faker->numberBetween(10, 500),
            'year' => $this->faker->year(),
        ];
    }
}
