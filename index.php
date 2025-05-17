<?php

    if(file_exists("controllers/FrontController.php")) {
        require_once("controllers/FrontController.php");
    } else {
        die("Archivo no encontrado: controllers/FrontController.php");
    }
