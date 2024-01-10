<?php

// error 500 출력
error_reporting(E_ALL);
ini_set('display_errors', '1');

$rootPath = __DIR__ . '/../';
require_once $rootPath . 'vendor/autoload.php';

require_once $rootPath . 'routes/router.php';
