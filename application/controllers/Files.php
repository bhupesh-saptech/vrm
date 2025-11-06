<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $config = [
            'upload_path' => './upload/',
        ];        
        $this->load->library('upload',$config);
    }
 
    public function index() {
        $this->load->view("incld/header");
        $this->load->view("files/form");
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
        
    }
}