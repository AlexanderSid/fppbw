<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$loginstatus   = $this->session->userdata('status');
          if($loginstatus!="login"){
          redirect(base_url("login"));
     		}

	}
 
	function index(){
		$this->load->view('v_admin');
	}

 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('main'));
	}

		

}