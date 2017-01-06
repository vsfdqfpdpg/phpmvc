<?php
    class errorController extends baseController
    {        
        public function index(){}

        public static function error($message = 'No information about the error!'){
            echo '<pre>'.$message.'</pre>';
        }

        
    }
?>