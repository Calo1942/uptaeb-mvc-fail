<?php

    if (file_exists("models/categoryModel.php")) {
        require_once("models/categoryModel.php");
    } else {
        die("<script>window.location='?url=index';</script>");
    }

    if (file_exists("views/category.php")) {
        require_once("views/category.php");
    } else {
        die("<script>window.location='?url=category';</script>");
    }
