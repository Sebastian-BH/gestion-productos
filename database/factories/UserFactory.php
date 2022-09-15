<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
			'company_id' => $this->faker->name,
			'document' => $this->faker->name,
			'name' => $this->faker->name,
			'lastname' => $this->faker->name,
			'phone' => $this->faker->name,
			'addres' => $this->faker->name,
			'email' => $this->faker->name,
			'username' => $this->faker->name,
			'token' => $this->faker->name,
			'role_id' => $this->faker->name,
			'login' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
