<?php
header("Access-Control-Allow-Origin: *");
//get bootstrap code
require __DIR__ . '/../bootstrap/app.php';

// Define app routes
require __DIR__ . '/../app/routes.php';

// Run app
$app->run();