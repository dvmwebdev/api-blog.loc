<?php

declare(strict_types=1);

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\InfoController;

Route::get('/', InfoController::class);

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
  Route::post('login', [AuthController::class, 'login']);
  Route::post('logout', [AuthController::class, 'logout']);
  Route::post('refresh', [AuthController::class, 'refresh']);
  Route::post('user', [AuthController::class, 'me']);
});

Route::group(['prefix' => 'user'], function () {
  Route::get('all-user', [UserController::class, 'index']);
  Route::post('show/{id}', [UserController::class, 'show']);
});

Route::group(['prefix' => 'category'], function () {
  Route::get('', [CategoryController::class, 'index']);
});
