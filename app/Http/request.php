<?php    
    class Request{
        private $_controller;
        private $_method;
        private $_args;
        public function __construct(){            
            if (isset( $_SERVER['PATH_INFO'])){
                $parts = array_filter(explode('/', $_SERVER['PATH_INFO']));
            }else{
                //$parts = array_filter(explode('/', $_SERVER['REQUEST_URI']));
                $parts = [];
            }
                   
            $this->_controller = ($c = array_shift($parts)) ? $c : 'index';
            $this->_method     = ($m = array_shift($parts)) ? $m : 'index';
            $this->_args       = isset($parts[0]) ? $parts : [];
        }

        public function getController(){
            return $this->_controller;
        }
        public function getMethod(){
            return $this->_method;
        }
        public function getArgs(){
            return $this->_args;
        }
    }
?>