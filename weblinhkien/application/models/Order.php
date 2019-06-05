<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Order extends CI_Model
{
    //thêm dữ liệu vào bảng order
    function Insert($ID_User, $name,$address,$city, $quanHuyen,$cart)
    {
        $time = time();
        $data = array(   
            "ID_order"=>$time,     
            "OnSellDate" => date("Y-m-d",$time),
            "status" => 0,
            "ID_User" => $ID_User,
            "name"=> $name,
            "address"=>$address,
            "city"=>$city,
            "quanHuyen"=>$quanHuyen             
        );  
        $this->db->insert("order", $data);
        foreach ($cart as $key => $value) {
            $data_cart =array(
                "ID_order"=>$time,
                "ID_PRODUCT"=>$value->ID_PRODUCT,
                "Price"=>$value->PriceProduct,
                "amount"=>$value->amount
            );
            $this->db->insert("detail_order",$data_cart);
        }        
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
    function getByIDProduct($id)
    {
        $a = "order where ID_product = '$id'";
        $query = $this->db->get($a);
        return $query->result();
    }
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
    //detail order
    function getDetail($id_order){
        $query = "detail_order where ID_order = '$id_order'";
        $result = $this->db->get($query);
        return $result->result();
    }
}
