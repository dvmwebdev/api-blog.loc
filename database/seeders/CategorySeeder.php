<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  public function run(): void
  {
    Category::factory(10)->create()->each(function (Category $category) {
      $counts = [0, random_int(2, 6)];
      $category->children()->saveMany(Category::factory($counts[array_rand($counts)])->create());
    });
  }
}

