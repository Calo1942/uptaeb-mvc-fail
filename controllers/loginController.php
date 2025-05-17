<?php

    if (file_exists("models/loginModel.php")) {
        require_once("models/loginModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/login.php")) {
        require_once("views/login.php");
    } else {
        die("<script>window.location='?url=login';</script>");
    }
