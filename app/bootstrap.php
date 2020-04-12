<?php


//load config file
require_once 'config/config.php';
//loading helpers 
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';


// load libaries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php'; instead of loadint the libraries one by on u do this
//auto load libraries
spl_autoload_register(function($className){
    require_once 'libraries/' . $className. '.php';

    
}); 

?>