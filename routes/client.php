<?php

// Define routes
$router->get('/', function () {
    echo "Home";
});

$router->get('/about', function () {
    echo "Giới thiệu";
});