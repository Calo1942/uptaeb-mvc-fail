<?php

class HomeController extends Controller {
    public function index() {
        $data = [
            'pageTitle' => 'Bruz Deportes - Inicio'
        ];
        $this->view('index', $data); // Carga app/views/index.php
    }

    public function pageNotFound() {
        header("HTTP/1.0 404 Not Found");
        $data = [
            'pageTitle' => 'Página no encontrada'
        ];
        // Podrías crear una vista específica para 404: $this->view('404', $data);
        // O simplemente mostrar un mensaje:
        echo "<h1>404 - Página no encontrada</h1><p>La página que buscas no existe.</p><a href='/'>Volver al inicio</a>";
        // Si tienes una vista 404.php, úsala:
        // $this->view('404', $data);
    }
}

?>