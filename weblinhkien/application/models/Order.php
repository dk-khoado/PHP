<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Order extends CI_Model
{
    //thêm dữ liệu vào bảng order
    function Insert($OnSellDate, $ID_User)
    {
        $data = array(           
            "OnSellDate" => $OnSellDate,
            "status" => 0,
            "ID_User" => $ID_User
        );
        $this->db->insert("order", $data);
    }
    function FinishOrderByID($id){
        $query = "UPDATE order set status = 1 where ID_order = $id";
        $this->db->query($query);
    }
    //lấy dữ liệu của bảng order
    function getAll()
    {
        $query = $this->db->get('order');
        return $query->result();
    }
    function getByID($id)
    {
        $a = "order where ID_order = '$id'";
        $query = $this->db->get($a);
        return $query->row();
    }
    // function getByIDProduct($id)
    // {
    //     $a = "order where ID_product = '$id'";
    //     $query = $this->db->get($a);
    //     return $query->result();
    // }
    function getAllByIDUser($id)
    {
        $a = "order where ID_User = '$id'";
        $query = $this->db->get($a);
        return $query->result();
    }
    function getByDate($date)
    {
        $a = "order where OnSellDate = '$date'";
        $query = $this->db->get($a);
        return $query->result();
    }
    //end getdata
}
