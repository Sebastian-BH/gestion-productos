<?php

namespace Database\Factories;

use App\Models\SaleDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SaleDetailFactory extends Factory
{
    protected $model = SaleDetail::class;

    public function definition()
    {
        return [
			'sale_id' => $this->faker->name,
			'sorteo_id' => $this->faker->name,
			'number' => $this->faker->name,
			'amount' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
