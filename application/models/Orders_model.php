<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    use GuzzleHttp\Client;
    class Orders_model extends CI_Model { 
        public function get_order($im_ebeln) {
            $client = new Client([
                "base_uri" => "https://prd.pmipl.in:44300",
                "auth" => ['kpab', 'Phoenix!2024']
            ]);
        
            $url_id = "/sap/bc/bsp/sap/zpur_appr/zget_pord.html?im_ebeln={$im_ebeln}";
        
            $resp = $client->request('GET', $url_id);

            $data = json_decode($resp->getBody(),true);
            return $data;
        }
    }
?>