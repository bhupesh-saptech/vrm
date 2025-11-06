<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    use GuzzleHttp\Client;
    class User_model extends CI_Model {
        public function get_user($user_id='') {
            if ($user_id == '') {
                return $this->db->get('users')->result();
            } else {
                $this->db->where('user_id',$user_id );
                return $this->db->get('users')->row();
            }

        }
        public function read_user($mail_id) {
            $this->db->where('mail_id',$mail_id );
            return $this->db->get('users')->row();
        }
        public function add_user($data) {
            $this->db->insert('users',$data);
        }
        public function edit_user($user_id,$data) {
            $this->db->where('user_id',$user_id );
            $this->db->update('users',$data);
        }
        public function delete_user($user_id) {
            return $this->db->delete('users', ['user_id' => $user_id]);
        }
    }
?>