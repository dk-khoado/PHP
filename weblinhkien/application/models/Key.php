<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Key extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function Create($id_user,$keyadmin){
        $random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));
        $data= array(
            "key"=>$random_string,
            "ID_user"=>$id_user,
            "key_admin"=>$keyadmin,
            "key_user"=>md5($keyadmin)
        );
        $this->db->Insert("keyapi", $data);
        return $random_string;
    }
    public function Delete($key){
        $query = "UPDATE keyapi set huy_yeu_cau = 1 where key = '$key'";
        $this->db->query($query);
    }
    public function getData($key){
        $query = "keyapi where public_key = '$key'";
        return $this->db->get($query)->row();
    }
    public function getDataByKeyUser($key_user){
        $query = "keyapi where public_key = '$key_user'";
        return $this->db->get($query)->row();
    }
}