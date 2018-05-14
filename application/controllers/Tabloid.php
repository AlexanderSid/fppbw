<?php 
 
class Tabloid extends CI_Controller{
 
 function __construct(){
		parent::__construct();		
		$this->load->model('m_tablo');
 
	}


	function index(){

		$this->load->view('v_langgan');
	}
 
 
 function register_user(){
 	$nama=$this->input->post('nama');
 	$alamat=$this->input->post('alamat');
 	$nope=$this->input->post('nope');

 	$data= array(
 		'nama' => $nama,
 		'alamat' => $alamat,
 		'nope'=>$nope
 		);
		
		$this->m_tablo->register_user($data,'tabloid');
		$this->load->view('v_langgan');
}		

}