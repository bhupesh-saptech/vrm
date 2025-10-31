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
        $this->form_validation->set_rules('user_nm','User Name','required|trim');
        $this->form_validation->set_rules('user_ph','Phone No','required|trim');
        $this->form_validation->set_rules('role_id','User Role','required|trim');
        $this->form_validation->set_rules('mail_id','Email ID' ,'required|valid_email|is_unique[users.mail_id]');
        $this->form_validation->set_rules('pass_wd','Password' ,'required|trim');
        $this->form_validation->set_rules('cpas_wd','Password' ,'required|trim|matches[pass_wd]');
        if($this->form_validation->run()) {
            $data = array('mail_id'  => $this->input->post('mail_id') ,
                          'user_nm'  => $this->input->post('user_nm'),
                          'user_ph'  => $this->input->post('user_ph'),
                          'pass_wd'  => $this->input->post('pass_wd'),
                          'role_id'  => $this->input->post('role_id') ,
                          'user_st'  => $this->input->post('user_st') ,
                          'user_ty'  => $this->input->post('user_ty') ,
                          'user_ad'  => $this->input->post('user_ad') ) ;
            echo "<pre>";
            print_r($data);
        } else {
            $this->add();
        } 
    }
}
?>