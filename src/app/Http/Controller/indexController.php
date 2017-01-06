<?php
    class indexController extends baseController
    {
        public $test;
        public function __construct(){
            parent::__construct();
        }
        public function index()
        {            
            //$this->_registry->hello = "Regristry from " .__METHOD__ .'<br>';
            //echo $this->_registry->test.'<br>';
            print_r(__METHOD__ .'<br>');

            $this->load->model('post');

            $title = 'Pass to view';
            $posts  = $this->_registry->post->getEntries();

            $this->load->view('index',compact('title','posts'));
            
            
        }

        
    }
?>