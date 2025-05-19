<?php

    if (file_exists(__DIR__ . '/../config/connect/DBConnect.php')) {
        require_once(__DIR__ . '/../config/connect/DBConnect.php') ;
    } else {
        die("No se encuentra la base de datos");
    }

    class User extends DBConnect {
        private $user;
        private $password;

        public function __construct()
        {
            parent::__construct();
        }

        public function getLoginSistema($username, $password) {
            // Validación de nombre de usuario
            if (!preg_match("/^[A-Za-z0-9\#\-\!\\\/=?@~]{1,30}$/", $username)) {
                return "Error!";
            }

            // Validación de contraseña
            if (!preg_match("/^[A-Za-z0-9\#\-\!\\\/=?@~]{1,30}$/", $password)) {
                return "Error!";
            }

            $this->user = $username;
            $this->password = $password;

            return $this->loginSistema();
        }

        private function loginSistema() {
            return "Hola";
        }
    }