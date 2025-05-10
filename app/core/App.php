<?php

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Controlador
        if (!empty($url[0])) {
            $controllerCandidate = ucwords($url[0]) . 'Controller';
            if (file_exists(APP_ROOT . '/app/controllers/' . $controllerCandidate . '.php')) {
                $this->controller = $controllerCandidate;
                unset($url[0]);
            } else {
                // Si el controlador no existe, podrías redirigir al HomeController
                // o mostrar un error 404 simple.
                // Por ahora, si no es HomeController, intentará PageController
                if ($url[0] !== 'home') { // Evita error si se accede a /home y HomeController es el default
                    $this->controller = 'PageController';
                    // El primer elemento de la url ahora es el método para PageController
                    if (!empty($url[0])) {
                        $this->method = $url[0]; // El método es la página solicitada
                        unset($url[0]); // El resto son parámetros
                    } else {
                        $this->method = 'index'; // Default para PageController si no se especifica página
                    }
                }
            }
        }

        require_once APP_ROOT . '/app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Método (si no es PageController, ya que se maneja diferente arriba)
        if ($this->controller instanceof PageController) {
            // El método ya fue asignado para PageController
        } elseif (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        } elseif (!method_exists($this->controller, $this->method) && $this->controller instanceof PageController) {
             // Si el método para PageController no existe, default a un método 'pageNotFound' o 'index'
            $this->method = 'pageNotFound'; // O podrías tener un método index en PageController
        } elseif (!method_exists($this->controller, $this->method)) {
            // Método no encontrado en otros controladores
            echo "Error: Método '" . htmlspecialchars($this->method) . "' no encontrado en el controlador.";
            exit;
        }


        // Parámetros
        $this->params = $url ? array_values($url) : [];

        // Llamar al método
        if (method_exists($this->controller, $this->method)) {
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            // Si después de todo el método aún no existe (ej. en PageController si pageNotFound no existe)
            $homeController = new HomeController();
            $homeController->pageNotFound();
        }
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
?>