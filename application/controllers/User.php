<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index() {
        $data['users'] = $this->User_model->get_data();
        $this->load->view("incld/header");
        $this->load->view("user/list",$data);
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
    }
    public function add() {
       
        $this->load->view("incld/header");
        $this->load->view("user/add");
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
    } 
    public function register() {
        $this->form_validation->set_rules('user_nm','User Name','required');
        $this->form_validation->set_rules('user_ph','Phone No','required');
        $this->form_validation->set_rules('role_id','User Role','required');
        $this->form_validation->set_rules('mail_id','Email ID' ,'required|valid_email');
        $this->form_validation->set_rules('pass_wd','Password' ,'required');
        if($this->form_validation->run()) {
            $data = array('user_nm'  => $this->input->post('user_nm'),
                          'user_ph'   => $this->input->post('user_ph'),
                          'mail_id'     => $this->input->post('mail_id') ,
                          'pass_wd'    => $this->input->post('pass_wd') ) ;
            echo "<pre>";
            print_r($data);
        } else {
            $this->add();
        } 
    }
}
?>