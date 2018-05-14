<?php 
 
class M_tablo extends CI_Model{	
	

public function register_user($data,$table){


$this->db->insert($table, $data);

}
}	
