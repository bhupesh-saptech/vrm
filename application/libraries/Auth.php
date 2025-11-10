<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->model('User_model');
    }

    public function login($email, $password) {
        $user = $this->CI->User_model->get_by_email($email);
        if ($user && password_verify($password, $user->password)) {
            $this->CI->session->set_userdata('user_id', $user->id);
            return TRUE;
        }
        return FALSE;
    }

    public function logout() {
        $this->CI->session->unset_userdata('user_id');
    }

    public function is_logged_in() {
        return $this->CI->session->userdata('user_id') ? TRUE : FALSE;
    }
}