<?php
include(__DIR__.'/autoload.php');

$sql = new Login();

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($post)) {
    if ($sql->Logar($post)) {
        header('Location: index.php');
    } else {
        header('Location: login.php?error=true');
    }
} else {
    header('Location: login.php');
}