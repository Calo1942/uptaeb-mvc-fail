<?php

    if (file_exists("models/productModel.php")) {
        require_once("models/productModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/product.php")) {
        require_once("views/product.php");
    } else {
        die("<script>window.location='?url=product';</script>");
    }
