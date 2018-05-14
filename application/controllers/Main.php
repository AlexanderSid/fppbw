<?php 
 
class Main extends CI_Controller{
 


	function index(){

		$this->load->view('Home');
	}
 
	function about(){

		$this->load->view('v_about');
	}

	function unggul(){

		$this->load->view('v_unggul');
	}

	function contact(){

		$this->load->view('v_contact');
	}

}