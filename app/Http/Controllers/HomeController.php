<?php

namespace App\Http\Controllers;

use Exception;
use Pecee\SimpleRouter\SimpleRouter;

class HomeController
{
  public function index()
  {
    // throw new Exception("home exception", 400);
    SimpleRouter::response()->json([
      'controller' => __CLASS__ . '::' . __FUNCTION__,
      'inputs' => SimpleRouter::request()->getInputHandler()->all()
    ], JSON_UNESCAPED_UNICODE);
  }
}
