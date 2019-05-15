<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Model{
    function Register($username, $password){
        $password_d = md5($password);
        $data = array(           
            "USER"=>$username,
            "PASSWORD"=>$password_d
        );
        $this->db->insert("custumers", $data);
    }
    function Login($username, $password){        
        $password_d = md5($password);
        // $query = "custumers where 'USER' = '$username' and PASSWORD = $password";
        $query = "custumers where  USER = '$username' and PASSWORD = '$password_d'";
        $result = $this->db->get($query);    
        if($result->num_rows() > 0){
            return true;
        }else{
            return false;
        }
       //return $result->result();
    }    
}
