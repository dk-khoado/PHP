<?php
class Products extends CI_Model{
    public function getAll(){
        $query = $this->db->get('product');
        
        return $query->result();
    }
    public function getNumRow(){
        $query = $this->db->get('product');
        return $query->num_rows();
    }
    public function getByID($id)
    {
        $a ="product where ID_PRODUCT = '$id'";
        $query = $this->db->get($a);
        return $query->row();
    }
    public function checkByID($id){
        $a ="product where ID_PRODUCT = '$id'";
        $query = $this->db->get($a);
        if($query->num_rows() > 0){
            return true;
        }
        return false;
    }
    public function getByIDType($id){
        $a ="product where type = '$id'";
        $query = $this->db->get($a);
        return array ('num_rows'=> $query->num_rows(),'data'=>$query->result());
    }
    public function InsertProduct($CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, $Image, $manufacturer, $type)
    {
        $data = array(
            "CodeProduct"=>$CodeProduct,
            "NameProduct"=>$NameProduct,
            "AmountProduct"=>$AmountProduct,
            "Descrip"=>$Descrip,
            "PriceProduct"=>$PriceProduct,
            "Image"=>$Image,
            "manufacturer"=>$manufacturer,
            "type"=>$type);
        $this->db->insert("product",$data);
    }
    public function Delete($id)
    {
        $query = "UPDATE  product set hide = '1' where ID_PRODUCT = $id ";
        $this->db->query($query);        
    }
    public function Update($id,$CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, $Image, $manufacturer, $type)
    {
        $query = "UPDATE product set 
        CodeProduct = '$CodeProduct', NameProduct ='$NameProduct' , AmountProduct=$AmountProduct , Descrip = '$Descrip', PriceProduct = '$PriceProduct', Image = '$Image', manufacturer = '$manufacturer', type = '$type' where ID_PRODUCT = $id";
        
        $this->db->query($query);    
    }
    public function Search($name){
        $query = 'SELECT * from product where NameProduct like "%'.$name.'%"';
        $result = $this->db->query($query);
        return $result->result();
    }
}