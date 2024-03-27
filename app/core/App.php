<?php
class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params;

    public function __construct()
    {
        $url = $_GET ('url');
        echo 'Berhasil masuk ke class utama App!';

        //Controller
        if (file_exists('../app/controllers/' .$url[0].'.php')){
            $this->controller = $url[0];
            unset ($url[0]);
        }
        
    }

    public function parseURL()
    {
        if (isset(&_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim ($url,'/');
            $url = filter_var($url, FILTER_SANTIZE_URL);
            $url = explode ('/', $url);
        }
    }

    public function __run()
    {
        echo 'Echo Berjalan';
    }
}