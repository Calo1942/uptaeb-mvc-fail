<?php

class Controller {
    public function view($viewName, $data = []) {
        extract($data); // Hace que $data['title'] esté disponible como $title en la vista

        $viewFile = APP_ROOT . '/app/views/' . $viewName . '.php';

        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            // Vista no encontrada, muestra un error simple o carga una vista de error 404
            // Para simplificar, salimos con un mensaje.
            die('Error: Vista "' . htmlspecialchars($viewName) . '.php" no encontrada.');
        }
    }
}
?>