<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }

class MY_Controller extends CI_Controller{

    //Page info
    protected $data     = array();
    protected $pageName = FALSE;
    protected $template = "main";
    protected $hasNav   = TRUE;
    //Page contents
    protected $javascript = array();
    protected $css        = array();
    protected $fonts      = array();
    //Page Meta
    protected $title       = FALSE;
    protected $description = FALSE;
    protected $keywords    = FALSE;
    protected $author      = FALSE;

    function __construct()
    {	
        parent::__construct();
        $this->data["uri_segment_1"] = $this->uri->segment(1);
        $this->data["uri_segment_2"] = $this->uri->segment(2);
        $this->title       = $this->config->item('site_title');
        $this->description = $this->config->item('site_description');
        $this->keywords    = $this->config->item('site_keywords');
        $this->author      = $this->config->item('site_author');
        $this->pageName    = strToLower(get_class($this));
    }
	 
	
    protected function _render($view, $renderData="FULLPAGE", $data="") 
    {
        switch ($renderData) {
            case "AJAX"     :             
                $this->load->view($view,array_merge($this->data,(array) $data));
                break;
            case "JSON"     :
                echo json_encode($this->data);
                break;
            case "FULLPAGE" :
            default         : 
                //static
                $toTpl["javascript"] = $this->javascript;
                $toTpl["css"]        = $this->css;
                $toTpl["fonts"]      = $this->fonts;

                //meta
                $toTpl["title"]       = $this->title;
                $toTpl["description"] = $this->description;
                $toTpl["keywords"]    = $this->keywords;
                $toTpl["author"]      = $this->author;        

                //session       
                $toTpl["session"] = $this->session->all_userdata();       

                //data
                $toBody["content_body"] = $this->load->view($view, array_merge($this->data, $toTpl, (array)$data), TRUE);

                //nav menu
                if($this->hasNav){                    
                    $toMenu["pageName"] = $this->pageName;
                    $toHeader["nav"]    = $this->load->view("template/nav", $toMenu, TRUE);
                }
                $toHeader["basejs"] = $this->load->view("template/basejs", $this->data, TRUE);

                $toBody["header"] = $this->load->view("template/header", $toHeader, TRUE);
                $toBody["footer"] = $this->load->view("template/footer", '', TRUE);
                $toTpl["body"]    = $this->load->view("template/" . $this->template, $toBody, TRUE);

                //render view
                $this->load->view("template/skeleton", $toTpl);
                break;
        }
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */