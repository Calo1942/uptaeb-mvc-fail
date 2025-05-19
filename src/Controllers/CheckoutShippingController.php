<?php

namespace BruzDeporte\UptaebMvc\Controllers;

class Checkout_shippingController {
    private $basePath;

    public function __construct() {
        $this->basePath = __DIR__ . '/../';
    }

    public function index() {
        $modelPath = $this->basePath . 'models/checkout_shippingModel.php';
        $viewPath = $this->basePath . 'views/checkout_shipping.php';

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
