<?php
class Data_model extends CI_Model {
    
    public function get_language()
    {     
        // 1. check language from URL parameter
        if($this->input->get('lang')) {
          $language = $this->input->get('lang');
        }
        // 2. check language from the session data
        else if($this->session->userdata('language')) {
          $language = $this->session->userdata('language');
        }
        // 3. check language from the browser setting
        else {
          $language = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);          
        }        

        switch($language) {
          case 'pl': 
              $lang_file = 'polish';
              $lang_code = 'pl';
              break;
          default: 
              $lang_file = 'english';
              $lang_code = 'en';
        }           

        $this->session->set_userdata('language',$lang_code);
        $this->lang->load('main',$lang_file); 
        return $language;
    }  
    
}