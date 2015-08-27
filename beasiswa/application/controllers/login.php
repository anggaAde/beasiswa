<?php
/**
* 
*/
class Login extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('v_login');
		$this->session->sess_destroy();
		//$this->load->view('berhasil');
	}
}
?>