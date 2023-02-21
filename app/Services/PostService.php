<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
  public function getAll(): array|Collection
  {
    return Post::with('category')->get();
  }
}
