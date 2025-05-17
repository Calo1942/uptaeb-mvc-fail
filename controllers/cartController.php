<?php

    if (file_exists("models/cartModel.php")) {
        require_once("models/cartModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/cart.php")) {
        require_once("views/cart.php");
    } else {
        die("<script>window.location='?url=cart';</script>");
    }
