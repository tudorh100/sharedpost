<?php

/*
app core clas
creattes url and loads contolle class
url format /comtroller/method/params

*/
class core{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];
    
    public function __construct(){
     // print_r($this->getUrl());
     $url = $this->getUrl();
     
     
     //look in contolles fo fist value. 
     if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php' )){
         // if it exists set as a contoller
         $this->currentController = ucwords($url[0]);
         //unset 0 index
         unset($url[0]);
     }
     
     //requie the conntroller
     require_once '../app/controllers/' . $this->currentController . '.php';
     
     //init the controller class
     $this->currentController = new $this->currentController();
    
    //check for second part of the url
    if(isset($url[1])){
        // check tp see if method exist in controller
        if(method_exists($this->currentController, $url[1])){
            $this->currentMethod = $url[1];
       //unset 1 index
       unset($url[1]);

        }
    }
//get parameters
$this->params=$url ? array_values($url) : [];
//calla callback witht hr array of params
call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
    
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
