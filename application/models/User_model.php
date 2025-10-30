<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    use GuzzleHttp\Client;
    class User_model extends CI_Model {
        public function get_data() {
            return $this->db->get('users')->result();
        }
    }
?>