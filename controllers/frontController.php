<?php
    
    define('_URL_', 'http://localhost/uni/Nueva/'); // Ajusta según tu entorno

    require_once("config/components/initComponent.php");

    // Si se recibe una URL, se carga el controlador correspondiente
    if (isset($_REQUEST['url'])) {
        if (file_exists("controllers/" . $_REQUEST['url'] . "Controller.php")) {
            require_once("controllers/" . $_REQUEST['url'] . "Controller.php");
        } else {
            die("<script>window.location='?url=index';</script>");
        }
    } else {
        //echo "No se ha recibido una URL válida.";
        die("<script>window.location='?url=index';</script>");
    }