<?php
define('APP_ROOT', dirname(__DIR__)); // Define la raíz de la aplicación
define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/')); // Para URLs de assets y enlaces

// Cargar el controlador base PRIMERO
require_once APP_ROOT . '/app/core/Controller.php';

// Cargar los controladores principales que podrían ser llamados por defecto o directamente
require_once APP_ROOT . '/app/controllers/HomeController.php';
require_once APP_ROOT . '/app/controllers/PageController.php';

// Cargar el enrutador
require_once APP_ROOT . '/app/core/App.php';

// Instanciar la clase App para manejar la URL
$app = new App();
?>