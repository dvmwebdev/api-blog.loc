<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:api', ['except' => ['login', 'refresh']]);
  }

  public function login()
  {
    $credentials = request(['email', 'password']);

    if (!$token = auth()->attempt($credentials)) {
      return response()->json(['message' => ['type' => 'danger', 'text' => 'Невірний логін чи пароль']], 401);
    }

    return $this->respondWithToken($token);
  }

  protected function respondWithToken($token)
  {
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth()->factory()->getTTL() * 60
    ]);
  }

  public function me()
  {
    return response()->json(auth()->user());
  }

  public function logout()
  {
    auth()->logout();

    return response()->json(['message' => 'Successfully logged out']);
  }

  public function refresh()
  {
    return $this->respondWithToken(auth()->refresh());
  }
}
