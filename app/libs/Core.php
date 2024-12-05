<?php

class Core 
{
    protected $currentController = "home";
    protected $currentMethod = "index";
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->getURL();

        // Check if $url is not empty and the controller file exists
        if (!empty($url) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        // Check if $url[1] is set and the method exists in the controller
        if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        // Assign the parameters
        $this->parameters = $url ? array_values($url) : [];
        call_user_func_array([$this->currentController, $this->currentMethod], $this->parameters);
    }

    public function getURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [];  // Return an empty array if 'url' is not set
    }
}
