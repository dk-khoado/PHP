<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Model{
    function Register($username, $password){
        $password_d = md5($password);
        $data = array(           
            "USER"=>$username,
            "PASSWORD"=>md5($password_d)
        );
        $this->db->insert("custumers", $data);
    }
    function Login($username, $password){
        $password_d = md5($password);
        $query = "SELECT * from custumers where USER = '$username' and PASSWORD = '$password_d'";
        $result = $this->db->get($query);
        return $result->result();
    }
}
