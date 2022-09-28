<?php
include(__DIR__.'/autoload.php');

if (empty($_SESSION['lg'])) {
    header('Location: login.php');
}