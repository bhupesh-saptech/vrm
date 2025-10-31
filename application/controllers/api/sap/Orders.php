<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Orders extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Orders_model');
        }
        public function view($im_ebeln="1110000006") {
            $data['order'] = $this->Orders_model->get_order($im_ebeln);
            $this->load->view('incld/header');
            $this->load->view('sap/view',$data);
            $this->load->view('incld/jslib');
            $this->load->view('incld/footer');
            // echo "<pre>";
            // print_r($data['orders']);
        }
    }