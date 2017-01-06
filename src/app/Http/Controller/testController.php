<?php
    class testController extends baseController
    {
        public $test;
        
        public function index()
        {            
            //$this->_registry->hello = "Regristry from " .__METHOD__ .'<br>';
            //echo $this->_registry->test.'<br>';
            print_r(__METHOD__ .'<br>');           
            
        }

        public function say(){
            print_r(__METHOD__ .'<br>'); 
            print_r(func_get_args()); 
        }

        
    }
?>