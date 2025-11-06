<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index() {
        $this->load->view("incld/header");
        $this->load->view("admin/login");
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
        
    }
    public function login() {
        $this->form_validation->set_rules('mail_id','Email ID','required|trim|valid_email');
        $this->form_validation->set_rules('pass_wd','Password','required|trim');
        if($this->form_validation->run()) {
            $mail_id = $this->input->post('mail_id');
            $pass_wd = $this->input->post('pass_wd');
            $user    = $this->User_model->read_user($mail_id);
            if($user) {
                $ok = password_verify($pass_wd,$user->pass_wd);
                if($ok) {
                    redirect(base_url('user/dash'));
                } else {
                        $this->session->set_flashdata('status', 'Mail ID/Password Invalid');
                        $this->index();
                } 
            } else {
                $this->session->set_flashdata('status', 'Mail ID/Password Invalid');
                $this->index();
            }
        } else {
                $this->session->set_flashdata('status', 'Mail ID/Password Invalid');
                $this->index();
        }
    }

}
?>
