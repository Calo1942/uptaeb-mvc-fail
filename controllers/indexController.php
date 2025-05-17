<?php

    // FrontController.php
    if (file_exists("views/index.php")) {
        require_once("views/index.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }
