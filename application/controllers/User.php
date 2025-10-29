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
}
?>