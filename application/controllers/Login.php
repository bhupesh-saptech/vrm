<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index() {
        $this->load->view("admin/login");
    }
    public function login() {
        $this->form_validation->set_rules('mail_id','Email ID','required|trim|valid_email|is_unique');
        $this->form_validation->set_rules('pass_wd','Password','required|trim');
        if($this->form_validation->run()) {
            
        } else {
            $this->index();
        }
    }

}
?>
