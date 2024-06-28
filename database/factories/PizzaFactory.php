<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;  // Asegúrate de importar Arr
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingChoices = [
            'Extra Cheese',
            'Black Olives',
            'Pepperoni',
            'Sausage',
            'Anchovies',
            'Jalapenos',
            'Onion',
            'Chicken',
            'Ground Beef',
            'Green Peppers',
        ];

        // Generate a random number of unique toppings
        $toppings = Arr::random($toppingChoices, rand(1, 4));

        return [
           // 'id' => $this->faker->unique()->numberBetween(11111, 99999),
            'user_id' => User::factory(),
            'size' => Arr::random(['Small', 'Medium', 'Large', 'Extra-Large']),
            'crust' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => $toppings,
            'status' => Arr::random(['Ordered', 'Prepping', 'Baking', 'Checking', 'Ready']),
        ];
    }
}
