<?php    
    class Registry{
        private static $_instance;
        private $_storage;
        private function __construct(){}
        private function __clone(){}
        public static function getInstance()
        {
            if(!self::$_instance instanceof self){
                self::$_instance = new Registry;
            }
            return self::$_instance;
        }

        public function __set($key,$value)
        {
            $this->_storage[$key] = $value;
        }

        public function __get($key)
        {
            if(isset($this->_storage[$key])){
                return $this->_storage[$key];
            }
            return false;
        }

    }
?>