<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Model
{
    function Register($username, $password, $email)
    {
        $password_d = md5($password);
        $data = array(
            "USER" => $username,
            "PASSWORD" => $password_d,
            "EMAIL"=>$email
        );
        $this->db->insert("custumers", $data);
    }
    function Login($username, $password)
    {
        $password_d = md5($password);
        // $query = "custumers where 'USER' = '$username' and PASSWORD = $password";
        $query = "SELECT * from custumers where  USER = '$username' and PASSWORD = '$password_d'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
        //return $result->result();
    }
    public function LoginAndGetData($username, $password){
        $password_d = md5($password);
        // $query = "custumers where 'USER' = '$username' and PASSWORD = $password";
        $query = "SELECT * from custumers where  USER = '$username' and PASSWORD = '$password_d'";
        $result = $this->db->query($query);      
        if ($result->num_rows() > 0) {
            return  array("response"=>"true", "data"=>$result->row(),"pass"=>$password_d);
        } else {
            return  array("response"=>"false", "data"=>$result->row(),"pass"=>$password_d);
        }
    }
    function getID($username, $password)
    {
        $password_d = md5($password);
        // $query = "custumers where 'USER' = '$username' and PASSWORD = $password";
        $query = "custumers where  USER = '$username' and PASSWORD = '$password_d'";
        $result = $this->db->get($query);
        return $result->row();
    }
    function checkEmail($email){
        $query="custumers WHERE EMAIL = '$email'";
        $result = $this->db->get($query);
        if($result->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    function checkName($username){
        $query="custumers WHERE USER = '$username'";
        $result = $this->db->get($query);
        if($result->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    function getNameByID($ID){
        $query="custumers WHERE ID_User = '$ID'";
        $result = $this->db->get($query);
        return $result->row()->USER;
    }
    function getDataByID($ID){
        $query="custumers WHERE ID_User = '$ID'";
        $result = $this->db->get($query);
        return $result->row();
    }
    function setActive($ID){
        $query = "UPDATE custumers set active = 1 where ID_User = $ID";
        $this->db->query($query);
    }
    function setMenber($ID){
        $query = "UPDATE custumers set is_member = 1 where ID_User = $ID";
        $this->db->query($query);
    }
}
