<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
  public function definition(): array
  {
    return [
      'first_name' => fake()->firstName(),
      'last_name' => fake()->lastName(),
      'email' => fake()->email(),
      'password' => Hash::make('user123'),
      'created_at' => Carbon::now()->subMonths(random_int(1, 3)),
      'updated_at' => Carbon::now()->addMonths(random_int(1, 3))
    ];
  }

}
