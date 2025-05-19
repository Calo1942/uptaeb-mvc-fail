<?php

namespace BruzDeporte\UptaebMvc\Controllers;

class IndexController {
    public function index() {
        // Aquí puedes cargar tu vista
        require_once __DIR__ . "/../views/index.php";
    }
}
