<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'sorteo_id' => $this->faker->name,
			'phone' => $this->faker->name,
			'total' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
