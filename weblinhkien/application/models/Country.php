<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Country extends CI_Model
{
	//thành công
	public function Province()
	{
		$query ="city";
		$data = $this->db->get($query);
		return $data->result();	
	}
	//thành công
	public function Distrist($ID_city)
	{
		$query = "quan_huyen where ID_city = '$ID_city'";
		$data = $this->db->get($query);
		return $data->result();
	}
	// thành công
	public function Insert($city_name)
	{
		$array = array(
            "city_name"=>$city_name
        );
		$this->db->Insert("city", $array);
	}
	//thành công
	public function DeleteByID($id)
	{
		$query1 = "DELETE from quan_huyen where ID_city = $id";
		$query2 = "DELETE from city where ID_city = $id";
		$this->db->query($query1);
		$this->db->query($query2);
		
       
	}
	//thất bại
	public function InsertDis($ID_city, $Distrist)
	{
		$array = array(
			"ID_city" => $ID_city,
			"quan_huyen_name" => $Distrist
		);
		
		$this->db->Insert("quan_huyen", $array);
		
		
	}
	//thành công
	public function UpdateCity($city_name, $ID_city)
	{
		$query = "UPDATE city set city_name = '$city_name' where ID_city = '$ID_city'";
        $this->db->query($query);
	}
//	//thàng công
//	public function LoadCityToModal($ID_city)
//	{
//		$query = "city where ID_city = '$ID_city'";
//		$data = $this->db->get($query);
//		return $data->result();
//	}
//	
	
}
?>