<?php
class Type extends CI_Model{
    public function getAll(){
            $query = $this->db->get('type');
            return $query->result();
    }
}
