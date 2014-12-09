<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
    
    public function __construct()
    {                                  
        parent::__construct();
        $this->results_model->get_language();                          
    }            

    public function index(){    
        $this->_render('pages/home','FULLPAGE', '');
    }    

}