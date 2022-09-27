<?php
include(__DIR__.'/autoload.php');

if (!empty($_SESSION['lg'])) {
    
} else {
    header('Location: login.php');
}