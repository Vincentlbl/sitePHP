<?php

class MainController
{

    public function header()
    {
        $this->render('header');
    }
   
    public function footer()
    {
        $this->render('footer');
    }

    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    
    public function cart()
    {
        $this->render('cart');
    }


    public function catalog()
    {
        $this->render('catalog');
    }


    public function login()
    {
        $this->render('login');
    }


    public function product()
    {
        $this->render('product');
    }


    public function register()
    {
        $this->render('register');
    }










       public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}
