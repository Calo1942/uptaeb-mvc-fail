<?php

    if (file_exists("models/registerModel.php")) {
        require_once("models/registerModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/register.php")) {
        require_once("views/register.php");
    } else {
        die("<script>window.location='?url=register';</script>");
    }
