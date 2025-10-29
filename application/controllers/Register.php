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
    public function register() {
        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name' ,'Last Name','required');
        $this->form_validation->set_rules('city' ,'City','required');
        $this->form_validation->set_rules('mail_id'   ,'Email ID' ,'required|valid_email');
        $this->form_validation->set_rules('password'  ,'Password' ,'required');
        if($this->form_validation->run()) {
            $data = array('first_name'  => $this->input->post('first_name'),
                          'last_name'   => $this->input->post('last_name'),
                          'mail_id'     => $this->input->post('mail_id') ,
                          'password'    => $this->input->post('password') ) ;
            echo "<pre>";
            print_r($data);
        } else {
            $this->index();
        } 
    }

}
?>
