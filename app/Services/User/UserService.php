<?php

declare(strict_types=1);

namespace App\Services\User;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserService
{
  public function getAll(): AnonymousResourceCollection
  {
    return UserResource::collection(User::all());
  }

  public function getOne(int $id): array
  {
    if (!$user = User::find($id)) {
      return ['message' => ['type' => 'danger', 'text' => 'Користувача не знайдено']];
    } else {
      return ['message' => ['type' => 'success', 'text' => 'Користувача завантажено'], 'user' => new UserResource($user)];
    }
  }
}

