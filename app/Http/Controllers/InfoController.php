<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
  public function __invoke()
  {
    return response()->json([
      'Api ver. ' => 'v1',
      'Laravel ver. ' => app()->version()
    ]);
  }
}
