<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\PostService;

class PostController extends Controller
{
  public function __construct(
    private readonly PostService $postService
  )
  {
  }

  public function index()
  {
    return $this->postService->getAll();
  }

  public function latest()
  {
    return $this->postService->getLatest();
  }

  public function show(int $id)
  {
    return $this->postService->getOne($id);
  }
}
