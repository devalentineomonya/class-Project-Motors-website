<?php
$routes = [
    "" => "views/home.php",
    "/" => "views/home.php",
    "/buy" => "views/buy.php",
    "/home" => "views/home.php",
    "/hire" => "views/hire.php",
    "/index" => "views/home.php",
    "/login" => "views/login.php",
    "/about" => "views/about.php",
    "/search" => "views/search.php",
    "/index.php" => "views/home.php",
    "/contact" => "views/contact.php",
    "/logout" => "php/config/logout.php"

];

$request_url = $_SERVER["REQUEST_URI"];
$request_url = strtok($request_url, "?");
$request_url = rtrim($request_url, "/");


if (array_key_exists($request_url, $routes)) {
    include_once $routes[$request_url];
} else {
    include_once "views/404.php";
}
