<?php
require_once 'vendor/autoload.php';
include(__DIR__.'/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);
$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

echo $twig->render("login.html", [
    "error" => (isset($get['error']) ? true : false)
]);