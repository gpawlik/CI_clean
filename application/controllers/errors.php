<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Errors extends MY_Controller {
    
    public function __construct()
    {                                  
        parent::__construct();                                 
    }            

    public function page_not_found(){    
        $this->_render('pages/404','FULLPAGE', '');
    } 
    
}    