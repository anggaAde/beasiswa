<?php

/*  ApiSim Library for CodeIgniter v1
 *  Created by Munir @ Sep 14 14:40:32 WIB 2014
 *  For new application please request appid and appkey to munir[at]ppns.ac.id
 * 
 *  Usage Example :
 *  - Check Login
 *    Form data input text -> "username" and "password"
 * 
 *    $this->load->library('ApiSim');
 *    $apisim = new ApiSim;
 *    $apisim->setData($this->input->post('username'), $this->input->post('password'));
 *    $res = $apisim->checkLoginStudent();
 * 
 *    print_r($res);
 *
 *    Output :
 *    Array ( 
 *      [error] => false
 *      [data] => Array ( 
 *           [login] => success
 *           [id] => 67030 
 *           [username] => 0814040063
 *           [name] => Daniel Cheriyawan Tua Ompusunggu 
 *           [sex] => M
 *           [active] => 1
 *           [hp] => 081331071287
 *           [email] => cheriyawandaniel3@yahoo.com
 *           [mother] => Wasa Suryana Hutauruk
 *      )
 *    )
 */
  

class C_apiSim {
        private $server_url = "https://apisim.ppns.ac.id/v1";
	
	/* === CHANGE THIS!!! === */
        private $appid = "JuRNaLv1";
        private $appkey = "jN140715";
	/* ====================== */

        public $error = TRUE;
        public $data = array();

        public function generateHeader() {
                return array(
                        "ppns-appid: ".$this->appid,
                        "ppns-apphash: ".md5(SHA1($this->appid.$this->appkey.date("Y-m-d")))
        );
        }

        public function setData($username = NULL, $password = NULL) {
                if(is_null($username) || is_null($password)) die();

                $this->data['username'] = $username;
                $this->data['password'] = $password;
        }

        public function checkLoginStudent() {
                $url = $this->server_url."/checkLoginStudent";
                $header = $this->generateHeader();
                return $this->__execute($url, $header, $this->data);
        }

        private function __execute($url, $header, $data) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                $result = curl_exec($ch);

                return json_decode($result, 1);
        }
}