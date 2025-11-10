<?php
    function format_date($date) {
        return date('d-m-Y', strtotime($date));
    }

    function time_elapsed_string($datetime) {
        $time = time() - strtotime($datetime);
        if ($time < 60) return $time . ' seconds ago';
        elseif ($time < 3600) return floor($time/60) . ' minutes ago';
        elseif ($time < 86400) return floor($time/3600) . ' hours ago';
        else return floor($time/86400) . ' days ago';
    }
    function limit_text($string, $limit = 100) {
        return strlen($string) > $limit ? substr($string, 0, $limit) . '...' : $string;
    }

    function slugify($text) {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        return strtolower(trim($text, '-'));
    }
    function is_logged_in() {
        $CI =& get_instance();
        return $CI->session->userdata('user_id') ? TRUE : FALSE;
    }

    function current_user() {
        $CI =& get_instance();
        return $CI->session->userdata('user');
    }
    function upload_file($field, $path) {
        $CI =& get_instance();
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png|pdf|docx';
        $config['max_size'] = 2048;
        $CI->load->library('upload', $config);
        
        if ($CI->upload->do_upload($field)) {
            return $CI->upload->data();
        } else {
            return ['error' => $CI->upload->display_errors()];
        }
    }
    function format_currency($amount) {
        return '₹' . number_format($amount, 2);
    }

    function percentage($value, $total) {
        return ($total > 0) ? round(($value / $total) * 100, 2) . '%' : '0%';
    }
    function active_menu($controller) {
        $CI =& get_instance();
        return ($CI->router->fetch_class() == $controller) ? 'active' : '';
    }
    function print_arr($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    function json_response($data, $status = 200) {
        $CI =& get_instance();
        return $CI->output
            ->set_content_type('application/json')
            ->set_status_header($status)
            ->set_output(json_encode($data));
    }
?>