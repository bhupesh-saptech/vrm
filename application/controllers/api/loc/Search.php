<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Search extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Search_model');
        }
        public function states($country='IN') {
            $data['states'] = $this->Search_model->get_states($country);
                echo "<pre>";
                print_r($data['states']);
        }
        public function cities($state='MH') {
            $data['cities'] = $this->Search_model->get_cities($state);
            echo "<pre>";
            print_r($data['cities']);
        }
    }