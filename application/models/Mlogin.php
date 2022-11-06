<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model{

    function query_validasi_email($email){
    	$result = $this->db->query("SELECT * FROM user WHERE email='$email' LIMIT 1");
        return $result;
    }

    function query_validasi_password($email,$password){
    	//$result = $this->db->query("SELECT * FROM user WHERE email='$email' AND password=SHA2('$password', 224) LIMIT 1");
        $result = $this->db->query("SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1");
        return $result;
    }

} 