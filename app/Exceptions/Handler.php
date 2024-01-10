<?php

namespace App\Exceptions;

use Pecee\SimpleRouter\Handlers\IExceptionHandler;

class Handler implements IExceptionHandler
{
  public function handleError($request, $error): void
  {
    header("Content-Type:application/json; charset=utf-8;");
    $data = ['url' => $request->getUrl(), 'code' => $error->getCode(), 'message' => $error->getMessage()];
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit(0);
  }
}
