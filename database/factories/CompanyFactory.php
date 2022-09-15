<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition()
    {
        return [
			'country_id' => $this->faker->name,
			'name' => $this->faker->name,
			'nit' => $this->faker->name,
			'phone' => $this->faker->name,
			'email' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
