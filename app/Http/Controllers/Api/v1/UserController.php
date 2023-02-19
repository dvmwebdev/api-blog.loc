<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use Exception;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
  public function __construct(
    private readonly UserService $userService
  )
  {
  }

  public function index(): JsonResponse
  {
    try {
      $users = $this->userService->getAll();
      return response()->json(['users' => $users]);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()]);
    }

  }

  public function show(int $id): JsonResponse
  {
    return response()->json($this->userService->getOne($id));
  }
}
