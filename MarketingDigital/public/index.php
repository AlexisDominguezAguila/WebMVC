<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';
require_once '../config/routes.php';

// Iniciar la aplicación
$router->dispatch($_SERVER['REQUEST_URI']);