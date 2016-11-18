<?php    
    class Router{
        public static function route(Request $request)
        {
            $controller = $request->getController().'Controller';
            $method     = $request->getMethod();
            $args       = $request->getArgs();

            $controllerFile = APP_PATH.'app/Http/Controller/'.$controller.'.php';
            if(is_readable($controllerFile)){
                require_once $controllerFile;
                $method = (is_callable(array($controller,$method))) ? $method : 'index';
                $controller = new $controller;
                if(!empty($args)){
                    call_user_func_array(array($controller,$method),$args);
                }else{
                    call_user_func(array($controller,$method));
                }
                return;                
            }
            throw new Exception("404 NOT FOUND ".$controller);
            
        }
    }
?>