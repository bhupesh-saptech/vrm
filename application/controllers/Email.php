<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $config =   [
                        'protocol' => 'smtp',
                        'smtp_host' => 'smtp.gmail.com',
                        'smtp_port' => 587,
                        'smtp_user' => 'bhupesh.kumbhar@gmail.com',
                        'smtp_pass' => 'rxrexyheyysmdrnf',  // Use Gmail App Password
                        'smtp_crypto' => 'tls',                   // ← Required for STARTTLS
                        'mailtype'  => 'html',
                        'charset'   => 'utf-8',
                        'newline'   => "\r\n",
                        'wordwrap'  => TRUE
                    ];
              
        $this->load->library('email',$config);

        //https://myaccount.google.com/apppasswords
        
    }
    public function index() {
        $this->load->view("incld/header");
        $this->load->view("email/form");
        $this->load->view("incld/jslib");
        $this->load->view("incld/footer");
    }
    public function send() {
        $this->form_validation->set_rules('to_addr','To Address','required|trim|valid_email');
        $this->form_validation->set_rules('subject','Subject'   ,'required|trim');
        $this->form_validation->set_rules('message','Message'   ,'required|trim');
        if($this->form_validation->run()) {
            $post = $this->input->post();
            $this->email->set_newline("\r\n");
            $this->email->from('bhupesh.kumbhar@gmail.com', 'BHUPESH KUMBHAR');
            $this->email->to($post['to_addr']);
            $this->email->subject($post['subject']);
            $this->email->message($post['message']);
            if ($this->email->send()) {
                echo "✅ Email sent successfully!";
            } else {
                echo $this->email->print_debugger(['headers']);
            }
        } else {
            $this->index();
        }
    }   
    public function print_arr() {
        $this->load->helper('custom');
        $data = array(  'name'=>'Bhupesh Kumbhar',
                        'mail'=>'bhupesh.k@aiopcpl.in');
        print_arr($data);
        
    }
}