<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryCollection;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryController extends Controller
{
  public function __construct(
    private readonly CategoryService $categoryService
  )
  {
  }

  public function index()
  {
    $categories = Category::get()->toFlatTree();


    return response(new CategoryCollection($categories));
  }
}
