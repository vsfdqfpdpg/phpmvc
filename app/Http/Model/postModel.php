<?php    
    class postModel extends baseModel{
        public function getEntries()
        {
            $arr = [];
            $arr[0] = ['title' =>'Hello world'];
            $arr[1] = ['title' =>'Hello Universe'];
            return $arr;
        }
    }
?>