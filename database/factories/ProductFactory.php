<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'reference' => $this->faker->name,
			'price' => $this->faker->name,
			'weight' => $this->faker->name,
			'category' => $this->faker->name,
			'stock' => $this->faker->name,
        ];
    }
}
