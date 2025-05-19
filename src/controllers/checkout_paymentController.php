<?php

    if (file_exists("models/checkout_paymentModel.php")) {
        require_once("models/checkout_paymentModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/checkout_payment.php")) {
        require_once("views/checkout_payment.php");
    } else {
        die("<script>window.location='?url=checkout_payment';</script>");
    }
