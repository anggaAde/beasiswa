<?php
/**
* 
*/
class C_login extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
	}

	function index()
	{
		//$this->load->helper('form');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//echo $username;
		//echo $password;
		$this->load->library('c_apisim');
		$apisim = new c_apisim;
		$apisim->setdata($this->input->post('username'), $this->input->post('password'));
		$res = $apisim->checkLoginStudent();

		if ($res['error']==NULL)
		{
			$this->session->set_userdata('nrp',$username);
			$query = $this->db->get_where('daftarbea',array('nrp' => $username));
			if($query->num_rows()>0)
			{
				$rowselect = $query->row_array();
				$this->session->set_userdata('datasiswa',$rowselect);
				$this->load->view('v_formedit');
			}
			else
			{
				$this->load->view('v_formdaftar');
			}	
		}
		if ($res['error']<>NULL)
		{
			$this->load->view('v_login');
		}
	}
}
?>