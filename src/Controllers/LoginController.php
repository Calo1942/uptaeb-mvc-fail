<?php

namespace BruzDeporte\UptaebMvc\Controllers;

class LoginController {
    private $basePath;

    public function __construct() {
        $this->basePath = __DIR__ . '/../';
    }

    public function index() {
        $modelPath = $this->basePath . 'models/loginModel.php';
        $viewPath = $this->basePath . 'views/login.php';

        if (file_exists($modelPath)) {
            require_once($modelPath);
        }

        if (file_exists($viewPath)) {
            require_once($viewPath);
        } else {
            //die("ERROR: Error en " . get_class($this) . " ");
            die("<script>window.location='?url=index';</script>");
        }
    }

    public function logear() {
        die("MTF MVC");
    }
}
