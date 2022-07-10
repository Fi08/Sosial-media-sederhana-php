<?php
class App
{
    private $controller = 'Home';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $url = $this->dapatUrl();
        session_start();

        if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . ucfirst($this->controller) . '.php';

        $this->controller = new $this->controller; // ditimpa kah?

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }


        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function dapatUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
