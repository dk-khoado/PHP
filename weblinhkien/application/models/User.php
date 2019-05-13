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
}