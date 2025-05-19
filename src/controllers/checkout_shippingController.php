<?php

    if (file_exists("models/checkout_shippingModel.php")) {
        require_once("models/checkout_shippingModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/checkout_shipping.php")) {
        require_once("views/checkout_shipping.php");
    } else {
        die("<script>window.location='?url=checkout_shipping';</script>");
    }
