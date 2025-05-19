<?php

    if (file_exists("models/forgotten_passwordModel.php")) {
        require_once("models/forgotten_passwordModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/forgotten_password.php")) {
        require_once("views/forgotten_password.php");
    } else {
        die("<script>window.location='?url=forgotten_password';</script>");
    }
