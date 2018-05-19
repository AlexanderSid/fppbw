<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$loginstatus   = $this->session->userdata('status');
          if($loginstatus=="login"){
          redirect(base_url("admin"));
     		}

    $this->load->model('m_login');   
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			$this->session->set_flashdata('kode', '1');
			$this->load->view('v_admin');
 
		}else{
			$this->session->set_flashdata('kode', '0');
			redirect('login');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('main'));
	}



}
