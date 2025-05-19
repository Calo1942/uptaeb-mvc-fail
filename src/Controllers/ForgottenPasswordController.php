<?php

    namespace BruzDeporte\UptaebMvc\Controllers;
    
    class Forgotten_passwordController {
        private $basePath;
    
        public function __construct() {
            $this->basePath = __DIR__ . '/../';
        }
    
        public function index() {
            $modelPath = $this->basePath . 'models/forgotten_passwordModel.php';
            $viewPath = $this->basePath . 'views/forgotten_password.php';
    
            if (file_exists($modelPath)) {
                require_once($modelPath);
            }
    
            if (file_exists($viewPath)) {
                require_once($viewPath);
            } else {
                //die("<script>window.location='?url=index';</script>");
            }
        }
    }
    