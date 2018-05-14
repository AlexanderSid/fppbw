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
 	$imail = $this->input->post('email');

	if (filter_var($imail, FILTER_VALIDATE_EMAIL)) {
  	$this->session->set_flashdata('code', '1');
  	$email=array(
      'email'=>$this->input->post('email')
        );
		
		$this->m_subs->register_user($email);

	} else {
  	$this->session->set_flashdata('code', '0');

	}

		redirect('subscribe');
}		

}
