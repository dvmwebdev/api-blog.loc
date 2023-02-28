<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PostService
{
  public function getAll(): AnonymousResourceCollection
  {
    $posts = Post::with('category')->get();
    return PostResource::collection($posts);
  }
}
