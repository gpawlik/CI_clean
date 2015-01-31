<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Errors extends MY_Controller {
    
    public function __construct()
    {                                  
        parent::__construct();                                 
    }            

    public function page_not_found(){ 
        $this->output->enable_profiler(TRUE);
        $this->_render('pages/404', 'FULLPAGE', '');
    } 
    
}    

/* End of file errors.php */
/* Location: ./application/controllers/errors.php */