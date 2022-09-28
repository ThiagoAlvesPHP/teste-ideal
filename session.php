<?php
require_once 'vendor/autoload.php';
include(__DIR__.'/autoload.php');

if (empty($_SESSION['lg'])) {
    header('Location: login.php');
}