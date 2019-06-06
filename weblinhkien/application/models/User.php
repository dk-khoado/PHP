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
        $password_md5 = md5($password);
        $query = "admin where username = '$username' and password = '$password_md5'";
        $result = $this->db->get($query);
        if($result->num_rows() > 0 ){
            $array = array("response"=>'true', "data"=>$result->row());
            return $array;
        }else{
            $array = array("response"=>'false', "data"=>$result->row());
            return $array;
        }
    }
    function Insert($username, $password, $code_verify, $email){
        $array = array(
            "username"=>$username,
            "password"=>$password,
            "code_verify"=>$code_verify,
            "email"=>$email
        );
        $this->db->Insert("admin", $array);
    }
}