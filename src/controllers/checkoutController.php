<?php

namespace BruzDeporte\UptaebMvc\Controllers;

class CheckoutController {
    private $basePath;

    public function __construct() {
        $this->basePath = __DIR__ . '/../';
    }

    public function index() {
        $modelPath = $this->basePath . 'models/checkoutModel.php';
        $viewPath = $this->basePath . 'views/checkout.php';

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
