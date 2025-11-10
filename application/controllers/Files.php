<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $config = [
            'upload_path'   => 'assets/uploads/',
            'allowed_types' =>'png',
            'overwrite'     => true,
        ];        
        $this->load->library('upload',$config);
        
    }
 
    public function index() {
        $this->load->view("incld/header");
        $this->load->view("files/form");
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
        
    }
    public function do_upload() {
        if($this->upload->do_upload('img_file')) {
            $data =  $this->upload->data();
            echo '<pre>';
            print_r($data);
        } else {
            $upload_error = $this->upload->display_errors();
            print_r($upload_error);
            $this->index();

        }
    }
}