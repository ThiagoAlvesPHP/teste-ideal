<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", "On");
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');

spl_autoload_register(function($class) {
	if (file_exists(__DIR__.'/class/'.$class.'.php')) {
		include(__DIR__ . "/class/" . $class . ".php");
	} else {
        echo 'Nenhuma classe encontrada!';
    }
});