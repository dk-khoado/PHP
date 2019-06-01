<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_order extends CI_Model{
    public function __construct()
    {
        parent::__construct();    
    }
    public function getByIDOrder($id){
        $query = "SELECT * from detail_order where ID_order = $id";
        $result = $this->db->query($query);
        return  $result->result();     
    }
}