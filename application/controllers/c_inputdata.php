<?php
class C_inputdata extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$this->form_validation->set_rules('nama','nama lengkap','required|alpa');
		$this->form_validation->set_rules('nrp','NRP','required|numerik');
		$this->form_validation->set_rules('jenkel','jenis kelamin','required');
		$this->form_validation->set_rules('alamat','alamat lengkap','required|alphanumerik');
		$this->form_validation->set_rules('telp','no telp/HP','required|numerik');
		$this->form_validation->set_rules('ayah','nama ayah','required|alpa');
		$this->form_validation->set_rules('ibu','nama ibu','required|alpa');
		$this->form_validation->set_rules('kerjaayah','pekerjaan ayah','required|alpa');
		$this->form_validation->set_rules('kerjaibu','pekerjaan ibu','required|alpa');
		$this->form_validation->set_rules('hasilayah','penghasilan ayah','required|numerik');
		$this->form_validation->set_rules('hasilibu','penghasilan ibu','required|numerik');
		$this->form_validation->set_rules('skhun','nilai SKHUN SMU/SMK','required|alphanumerik');
		$this->form_validation->set_rules('ips1','nilai ips semester 1','alphanumerik');
		$this->form_validation->set_rules('ips2','nilai ips semester 2','alphanumerik');
		$this->form_validation->set_rules('ips3','nilai ips semester 3','alphanumerik');
		$this->form_validation->set_rules('ips4','nilai ips semester 4','alphanumerik');
		$this->form_validation->set_rules('ips5','nilai ips semester 5','alphanumerik');
		$this->form_validation->set_rules('ips6','nilai ips semester 6','alphanumerik');
		$this->form_validation->set_rules('ips7','nilai ips semester 7','alphanumerik');
		$this->form_validation->set_rules('sks1','jumlah SKS semester 1','alphanumerik');
		$this->form_validation->set_rules('sks2','jumlah SKS semester 2','alphanumerik');
		$this->form_validation->set_rules('sks3','jumlah SKS semester 3','alphanumerik');
		$this->form_validation->set_rules('sks4','jumlah SKS semester 4','alphanumerik');
		$this->form_validation->set_rules('sks5','jumlah SKS semester 5','alphanumerik');
		$this->form_validation->set_rules('sks6','jumlah SKS semester 6','alphanumerik');
		$this->form_validation->set_rules('sks7','jumlah SKS semester 7','alphanumerik');
		$this->form_validation->set_rules('listrik1','jumlah tagihan listrik bulan ini','required|numerik');
		$this->form_validation->set_rules('listrik2','jumlah tagihan listrik bulan kemarin','required|numerik');
		$this->form_validation->set_rules('keluarga','jumlah tanggungan keluarga','required|numerik');
		$this->form_validation->set_rules('ket','keterangan lain');
		$this->form_validation->set_rules('beasiswa1','pilihan beasiswa 1','required');
		$this->form_validation->set_rules('beasiswa2','pilihan beasiswa 2');
		$this->form_validation->set_rules('beasiswa3','pilihan beasiswa 3');
		$this->form_validation->set_rules('rekbni','no rekening bni','required');

		$this->form_validation->set_error_delimiters('<form id="error_message">','</form>');
		$this->form_validation->set_message('required','harap mengisi kolom %s');
		$this->form_validation->set_message('callback_alpha','harap mengisi kolom %s hanya dengan huruf');
		$this->form_validation->set_message('callback_numerik','harap mengisi kolom %s hanya dengan angka');
		$this->form_validation->set_message('callback_alphanumerik','harap mengisi kolom %s hanya dengan huruf dan angka');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('v_formdaftar',$form_data);
		}
		else
		{
			//$nrp = $this->session->userdata('nrp');
			$hasilayah = set_value('hasilayah');
			$hasilibu = set_value('hasilibu');
			$totalhasil = $hasilayah+$hasilibu;
			$ips1=$this->input->post('ips1');
			$ips2=$this->input->post('ips2');
			$ips3=$this->input->post('ips3');
			$ips4=$this->input->post('ips4');
			$ips5=$this->input->post('ips5');
			$ips6=$this->input->post('ips6');
			$ips7=$this->input->post('ips7');
			$sks1=$this->input->post('sks1');
			$sks2=$this->input->post('sks2');
			$sks3=$this->input->post('sks3');
			$sks4=$this->input->post('sks4');
			$sks5=$this->input->post('sks5');
			$sks6=$this->input->post('sks6');
			$sks7=$this->input->post('sks7');
			$ipk = (($ips1*$sks1)+($ips2*$sks2)+($ips3*$sks3)+($ips4*$sks4)+($ips5*$sks5)+($ips6*$sks6)+($ips7*$sks7))/($sks1+$sks2+$sks3+$sks4+$sks5+$sks6+$sks7);

			$form_data = array
			(
				'nama' => set_value('nama'),
				'nrp' => set_value('nrp'),
				'jenkel' => set_value('jenkel'),
				'alamat' => set_value('alamat'),
				'telepon' => set_value('telp'),
				'ayah' => set_value('ayah'),
				'ibu' => set_value('ibu'),
				'kerjaayah' => set_value('kerjaayah'),
				'kerjaibu' => set_value('kerjaibu'),
				'hasilayah' => set_value('hasilayah'),
				'hasilibu' => set_value('hasilibu'),
				'totalhasil' => $totalhasil,
				'ips1' => set_value('ips1'),
				'ips2' => set_value('ips2'),
				'ips3' => set_value('ips3'),
				'ips4' => set_value('ips4'),
				'ips5' => set_value('ips5'),
				'ips6' => set_value('ips6'),
				'ips7' => set_value('ips7'),
				'sks1' => set_value('sks1'),
				'sks2' => set_value('sks2'),
				'sks3' => set_value('sks3'),
				'sks4' => set_value('sks4'),
				'sks5' => set_value('sks5'),
				'sks6' => set_value('sks6'),
				'sks7' => set_value('sks7'),
				'ipk' => $ipk,
				'bln1' => set_value('listrik1'),
				'bln2' => set_value('listrik2'),
				'tanggungan' => set_value('keluarga'),
				'ket' => set_value('ket'),
				'beasiswa1' => set_value('beasiswa1'),
				'beasiswa2' => set_value('beasiswa2'),
				'beasiswa3' => set_value('beasiswa3'),
				'rekbni' => set_value('rekbni'),
				'skhun' => set_value('skhun')
			);
			$this->db->insert('daftarbea',$form_data);
			$this->load->view('berhasil');
		}
	}
	public function alpa($str)
	{
	    return ( ! preg_match("/^([-a-z '.,])+$/i", $str)) ? FALSE : TRUE;
	}
	public function numerik($str)
	{
	    return ( ! preg_match("/^([-0-9])+$/i", $str)) ? FALSE : TRUE;
	}
	public function alphanumerik($str)
	{
	    return ( ! preg_match("/^([-a-z-0-9_ '.,])+$/i", $str)) ? FALSE : TRUE;
	}
}
?>