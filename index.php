<?php
include(__DIR__.'/session.php');

$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);
$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

$user = new User();

echo $twig->render("index.html", [
    "name" => $user->get()['name']
]);