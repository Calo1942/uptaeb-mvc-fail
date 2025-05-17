<?php

    if (file_exists("models/checkoutModel.php")) {
        require_once("models/checkoutModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/checkout.php")) {
        require_once("views/checkout.php");
    } else {
        die("<script>window.location='?url=checkout';</script>");
    }
