<?php 
 
class M_subs extends CI_Model{	
	

public function register_user($email){


$this->db->insert('email', $email);

}
}	
