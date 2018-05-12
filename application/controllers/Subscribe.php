<?php 
 
class Subscribe extends CI_Controller{
 
 function __construct(){
		parent::__construct();		
		$this->load->model('m_subs');
 
	}
 
	function index(){
		$this->load->view('Home');
	}
 
 
 function register_user(){
 
      $email=array(
      'email'=>$this->input->post('email')
        );
		
		$this->m_subs->register_user($email);
		$this->load->view('Home');
}		

}
