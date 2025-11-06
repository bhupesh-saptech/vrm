<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index() {
        $data['users'] = $this->User_model->get_user();
        $this->load->view("incld/header");
        $this->load->view("user/list",$data);
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
    }
    public function dash() {
        $data['users'] = $this->User_model->get_user();
        $this->load->view("incld/header");
        $this->load->view("user/list",$data);
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
    }
    public function add() {
        
        $data = new stdClass();
        $data->action = 'add';
        $data->user = new stdClass();
        $data->user->user_id = '';
        $data->user->mail_id = '';
        $data->user->user_nm = '';
        $data->user->user_ph = '';
        $data->user->pass_wd = '';
        $data->user->user_ty = 1;
        $data->user->role_id = "";
        $data->user->user_st = "";
        $data->user->user_ad = "";
        $this->load->view("incld/header");
        $this->load->view("user/form",$data);
        $this->load->view("incld/jslib");
        $this->load->view("incld/script");
        $this->load->view("incld/footer");
    } 
    public function edit($user_id) {
        $data = new stdClass();
        $data->action = 'edit';
        $data->user   = $this->User_model->get_user($user_id);
        $this->load->view("incld/header");
        $this->load->view("user/form",$data);
        $this->load->view("incld/jslib");
        $this->load->view("incld/script");
        $this->load->view("incld/footer");
    } 
    public function view($user_id) {
        $data['action'] = 'view';
        $data['user'] = $this->User_model->get_user($user_id);
        $this->load->view("incld/header");
        $this->load->view("user/form",$data);
        $this->load->view("incld/jslib");
        $this->load->view("incld/script");
        $this->load->view("incld/footer");
    } 
    public function delete($user_id) {
        $data['action'] = 'delete';
        $data['user'] = $this->User_model->get_user($user_id);
        $this->load->view("incld/header");
        $this->load->view("user/form",$data);
        $this->load->view("incld/jslib");
        $this->load->view("incld/script");
        $this->load->view("incld/footer");
        
    }
    public function validate() {
        $action  = $this->input->post('action');
        $user_id = $this->input->post('user_id');
        if ($action == 'add') { 
            $this->form_validation->set_rules('mail_id','Email ID' ,'required|valid_email|is_unique[users.mail_id]');
        } else {
            $this->form_validation->set_rules('mail_id','Email ID' ,'required|valid_email');
        }
        $this->form_validation->set_rules('user_nm','User Name','required|trim');
        $this->form_validation->set_rules('user_ph','Phone No','required|trim');
        $this->form_validation->set_rules('role_id','User Role','required|trim');
        $this->form_validation->set_rules('user_st','User St','required|trim');
        $this->form_validation->set_rules('pass_wd','Password' ,'required|trim');
        $this->form_validation->set_rules('cpas_wd','Password' ,'required|trim|matches[pass_wd]');
        if($this->form_validation->run()) {
            $data = array(  'mail_id'  => $this->input->post('mail_id') ,
                            'user_nm'  => $this->input->post('user_nm'),
                            'user_ph'  => $this->input->post('user_ph'),
                            'pass_wd'  => $this->input->post('pass_wd'),
                            'role_id'  => $this->input->post('role_id') ,
                            'user_st'  => $this->input->post('user_st') ,
                            'user_ty'  => $this->input->post('user_ty') ,
                            'user_ad'  => $this->input->post('user_ad') ) ;
            $data['pass_wd'] = password_hash($data['pass_wd'],PASSWORD_DEFAULT);
            return $data;
        } else {
            // echo validation_errors();
            if ($action == 'add') {
                $this->add();
            } else {
                $this->edit($user_id);
            }  
        }
    }
    public function save() {
        $action  = $this->input->post('action');
        $user_id = $this->input->post('user_id');
        switch ($action) {
            case 'add' :
                $data = $this->validate();
                if($data) {
                    $status = $this->User_model->add_user($data);
                    redirect(base_url('user'));
                }
                break;
            case 'edit' :
                $data = $this->validate();
                if($data) {
                    $status = $this->User_model->edit_user($user_id,$data);
                    redirect(base_url('user'));
                }
                break;
            case 'delete':
                $status = $this->User_model->delete_user($user_id);
                redirect(base_url('user'));
                break;
        }
    }
}

?>