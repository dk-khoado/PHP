<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cart extends CI_Model{
   public function getAll(){
       return $this->db->get("cart")->result();
   }

   public function deleteByID($id){
       $query = "DELETE from cart where id_cart = $id";
       $this->db->query($query);
   }
   public function deleteByIDUser($id){
    $query = "DELETE from cart where ID_User = $id";
    $this->db->query($query);
   }
   public function Insert($id_product, $id_user, $amount){
        $data = array("ID_PRODUCT"=>$id_product, "ID_User"=>$id_user, "amount"=>$amount);
        $this->db->Insert($data);
   }
   public function Update($id_cart, $amount){
        $query = "UPDATE cart set amount = $amount where id_cart = $id_cart";
        $this->db->query($query);
   }
}