<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Country extends CI_Model
{
	public function Province()
	{
		$query ="city";
		$data = $this->db->get($query);
		return $data->result();	
	}
	
	public function Distrist($ID_city)
	{
		$query = "quan_huyen where ID_city = '$ID_city'";
		$data = $this->db->get($query);
		return $data->result();
	}
	
	
	
}
?>