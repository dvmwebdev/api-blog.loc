<?php

namespace Database\Factories;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
  public function definition(): array
  {
    return [
      'category_id' => Category::inRandomOrder()->get()[0]->id,
      'title' => fake()->text(random_int(5, 10)),
      'description' => fake()->text(20),
      'content' => fake()->text(random_int(250, 500)),
      'published' => fake()->boolean(),
      'date_publication' => Carbon::now()->addDays(random_int(1, 15)),
      'likes' => random_int(100, 1000),
      'dislikes' => random_int(100, 1000),
    ];
  }

}
