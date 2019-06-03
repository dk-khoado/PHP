<?php 

class User extends CI_Model
{
    function getAll()
    {
        $query = $this->db->get('admin');
        return $query->result();
    }
    function getID($ID){
        $a ="admin where ID = '$ID'";
        $query = $this->db->get($a);
        return $query->result();
    }
    function Login($username, $password){
        $query = "admin where username = $username and password = $password";
        $result = $this->db->get($query);
        if($result->num_rows() > 0 ){
            return true;
        }else{
            return false;
        }
    }
}