<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Main extends MY_Controller {
    
    protected $javascript = array("scripts.js");
    
    public function __construct()
    {                                  
        parent::__construct();
        $this->data_model->get_language();                          
    }            

    public function index(){    
        $this->_render('pages/home', 'FULLPAGE', '');
    } 
    
    public function page(){            
        $this->_render('pages/home', 'FULLPAGE', '');
    }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */