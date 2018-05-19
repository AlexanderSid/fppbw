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
 	$able= true;

 	if (empty($nama)) {
    $this->session->set_flashdata('b', '0');
    $able= false;
	}

	if (empty($nope)) {
    $this->session->set_flashdata('c', '0');
    $able= false;
	}
	else{
		if (!is_numeric($nope)) {
    	$this->session->set_flashdata('c', '2');
    	$able= false;
		}
	}

	if (empty($alamat)) {
    $this->session->set_flashdata('d', '0');
    $able= false;
	}

	if ($able==true) {
		$data= array(
 		'nama' => $nama,
 		'alamat' => $alamat,
 		'nope'=>$nope
 		);
		
		$this->m_tablo->register_user($data,'tabloid');
		$this->load->view('v_langgan');

	}

 	else{
 		$this->session->set_flashdata('a', '0');
 	}

 	redirect('tabloid');
}		

}
