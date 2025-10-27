<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->load->view("incld/header");
        $this->load->view("admin/register");
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
    }
    public function validation() {
        $this->form_validation->set_rules('first_name','First Name','required|trim|alpha');
        $this->form_validation->set_rules('last_name' ,'Last Name','required|trim|alpha');
        $this->form_validation->set_rules('mail_id'   ,'Email ID' ,'required|trim|valid_email');
        $this->form_validation->set_rules('pass_wd'   ,'Password' ,'required|trim|');
        if($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            echo "Form Validation Passed";
        } 
    }

}
?>
