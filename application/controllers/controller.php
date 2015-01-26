<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->Model("Model");
    }

    public function index() {
        $data["view"] = "bootstrap/content";
        $this->load->view("bootstrap/template",$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */