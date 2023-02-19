<?php

declare(strict_types=1);

use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\InfoController;

Route::get('/', InfoController::class);

Route::group(['prefix' => 'user'], function () {
  Route::get('all-user', [UserController::class, 'index']);
  Route::post('show/{id}', [UserController::class, 'show']);
});
