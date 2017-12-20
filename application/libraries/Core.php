<?php
/**
 * Created by PhpStorm.
 * User: Lisanne
 * Date: 19-12-2017
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
 */

Class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        //print_r($this->getUrl());

        $url = $this->getUrl();

        // Kijkt in controllers voor eerste gegeven vanaf index.php
        // ucwords maakt de 1e letter een Hoofdletter
        if(file_exists('../application/controllers/' . ucwords($url[0]) . '.php')){
            // Als het bestaat, set het als controller.
            $this->currentController = ucwords($url[0]);
            // Unset 0 index
            unset($url[0]);
        }

        // Require de controller
        require_once '../application/controllers/'. $this->currentController . '.php';

        // Bevestigt controller class
        $this->currentController = new $this->currentController;

        // Controleer voor 2e gegeven in url.
        if(isset($url[1])){
            // Controleer of de methode bestaat in de controller
            if(method_exists($this->currentController,$url[1])) {
                $this->currentMethod = $url[1];
                // unset 1 index
                unset($url[1]);
            }
        }

        // Ophalen Parameters
        $this->params = $url ? array_values($url) : [];

        // Oproepen van array vol parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

