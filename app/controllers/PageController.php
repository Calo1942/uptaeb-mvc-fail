<?php

class PageController extends Controller {

    // Método genérico para manejar páginas simples
    // Se llamará con el nombre de la página como método, ej: /page/product
    public function __call($name, $arguments) {
        // $name sería 'product', 'login', etc.
        // Convertimos nombres de vista con guiones bajos si es necesario
        $viewName = str_replace('-', '_', $name);

        if (file_exists(APP_ROOT . '/app/views/' . $viewName . '.php')) {
            $data = [
                'pageTitle' => 'Bruz Deportes - ' . ucwords(str_replace('_', ' ', $viewName))
            ];
            $this->view($viewName, $data);
        } else {
            // Si la vista específica no existe, llama a pageNotFound del HomeController
            $homeController = new HomeController();
            $homeController->pageNotFound();
        }
    }

    // Si quieres tener métodos explícitos, también puedes hacerlo:
    // public function product() {
    //     $data = ['pageTitle' => 'Producto'];
    //     $this->view('product', $data); // Carga app/views/product.php
    // }

    // public function login() {
    //     $data = ['pageTitle' => 'Iniciar Sesión'];
    //     $this->view('login', $data); // Carga app/views/login.php
    // }

    // etc. para cada página. El __call es más genérico para este caso simple.

    public function pageNotFound() { // Método de fallback para PageController
        $homeController = new HomeController();
        $homeController->pageNotFound();
    }
}
?>