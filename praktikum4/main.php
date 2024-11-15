<?php

header("Content-Type: application/json; charset=UTF-8");

include "app/Routes/ProductRoutes.php";

use app\Routes\ProductRoutes;

// Capture request method
$method = $_SERVER['REQUEST_METHOD'];

// Capture request path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Call routes
$productRoutes = new ProductRoutes();
$productRoutes->handle($method, $path);
