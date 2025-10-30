<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    use GuzzleHttp\Client;
    class Search_model extends CI_Model { 
        public function get_states($country='IN') {
            $client = new Client();
            $url_add = "https://api.countrystatecity.in/v1/countries/{$country}/states/";
            $api_key = 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA==';
            $resp    = $client->request('GET', $url_add,['headers' => ['X-CSCAPI-KEY' => $api_key]]);
            $data    = json_decode($resp->getBody(),true);
            return $data;
        }
        public function get_cities($state='MH') {
            $client = new Client();
            $url_add = "https://api.countrystatecity.in/v1/countries/IN/states/{$state}/cities/";
            $api_key = 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA==';
            $resp    = $client->request('GET', $url_add,['headers' => ['X-CSCAPI-KEY' => $api_key]]);
            $data    = json_decode($resp->getBody(),true);
            return $data;
        }
    }
?>