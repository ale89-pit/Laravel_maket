<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Item;
use App\Models\Customer;
use App\Models\Book;
use App\Models\Jewelry;
use App\Models\Other;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;


    public function definition(): array
    {
       
        $classes = ['Book', 'Jewelry', 'Other'];
        $randomClass = $classes[array_rand($classes)];
        
        $itemable = null;
        
        if ($randomClass == 'Book') {
            $itemable = Book::factory()->create();
        } elseif ($randomClass == 'Jewelry') {
            $itemable = Jewelry::factory()->create();
        } else {
            $itemable = Other::factory()->create();
        }

        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(5, 100),
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'itemable_id' => $itemable->id,
            'itemable_type' => $itemable->getMorphClass(),
        ];
    }
}
