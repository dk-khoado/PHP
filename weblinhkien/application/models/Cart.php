<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cart extends CI_Model
{
    public function getAllByIDUser($id)
    {
        $query = "cart where ID_User = '$id'";
        $data = $this->db->get($query);
        return $data->result();
    }
    public function deleteByID($id)
    {
        $query = "DELETE from cart where id_cart = $id";
        $this->db->query($query);
    }
    public function deleteByIDUser($id)
    {
        $query = "DELETE from cart where ID_User = $id";
        $this->db->query($query);
    }
    public function Insert($id_product, $id_user, $amount, $NameProduct, $Image, $PriceProduct)
    {
        $data = array(
            "ID_PRODUCT" => $id_product,
            "ID_User" => $id_user, 
            "amount" => $amount,
            "NameProduct"=>$NameProduct,
            "PriceProduct"=>$PriceProduct,
            "Image"=>$Image
        );
        $this->db->Insert("cart",$data);
    }
    public function Update($id_cart, $amount)
    {
        $query = "UPDATE cart set amount = $amount where id_cart = $id_cart";
        $this->db->query($query);
    }
    public function getAmountByID($id){
        $query = "SELECT amount from cart where id_cart = $id";
        return $this->db->query($query)->row();
    }
}
