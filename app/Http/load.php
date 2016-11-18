<?php    
    class Load{
        public function view($name,array $vars=null){
            $file = APP_PATH.'app/Http/View/'.$name.'View.php';
            if(is_readable($file)){
                if(isset( $vars)) extract($vars);
                require_once $file;
                return true;
            }
            throw new Exception("Loading view issues");
            
        }
        public function model($name){
            $model = $name.'Model';
            $modelPath =  APP_PATH.'app/Http/Model/'.$model.'.php';            
            if(is_readable($modelPath )){
                require_once $modelPath;
                if(class_exists($model)){                     
                    $registry = Registry::getInstance();
                    $registry->$name = new $model;
                    return true;
                }
            }
            throw new Exception("Loading model issues");          
        }
    }
?>