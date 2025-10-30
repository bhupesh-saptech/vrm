<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Orders extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Orders_model');
        }
        public function view($im_ebeln="1110000006") {
            $data['purord'] = $this->Orders_model->get_order($im_ebeln);
            echo "<pre>";
            print_r($data['purord']);
        }
    }