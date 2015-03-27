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
	}

	public function index()
	{
		$this->load->view('v_login');
		//$this->load->view('berhasil');
	}
}
?>