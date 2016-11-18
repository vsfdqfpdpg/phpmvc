<?php
    // https://www.youtube.com/playlist?list=PL7194BCBC4FED5FA4
    // https://github.com/Jontyy/PHP-Basic-MVC-Framework
    define('APP_PATH', realpath(dirname(__FILE__)).'/');
    require_once APP_PATH.'app/Http/request.php';
    require_once APP_PATH.'app/Http/router.php';
    require_once APP_PATH.'app/Http/baseController.php';
    require_once APP_PATH.'app/Http/baseModel.php';
    require_once APP_PATH.'app/Http/load.php';
    require_once APP_PATH.'app/Http/registry.php';
    require_once APP_PATH.'app/Http/Controller/errorController.php';

    $registry = Registry::getInstance();
    //$registry->test = 'Hello world';    
    //$Controller = new indexController;
    //call_user_func(array($Controller,'index'));
    //echo $registry->hello;
    try {
         Router::route(new Request);
    } catch (Exception $e) {
        errorController::error($e->getMessage());
    }   
    //print_r(get_included_files());    
?>