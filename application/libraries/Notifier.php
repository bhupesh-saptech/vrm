<?php
class Notifier {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('email');
    }

    public function send_email($to, $subject, $message) {
        $this->CI->email->from('noreply@yourapp.com', 'Your App');
        $this->CI->email->to($to);
        $this->CI->email->subject($subject);
        $this->CI->email->message($message);
        return $this->CI->email->send();
    }
}
