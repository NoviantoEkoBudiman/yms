<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lipat1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('kdklp') !== 'KLP01') { $this->dataload->tolak_user(); }

		$this->load->model('datalipat1');
		$this->load->helper('url');
	}

	public function listbrg()
	{	
		$data['listbarang'] = $this->datalipat1->listbrgjadi();
		
		$data['title'] = "List Barang Jadi";
		$data['isi'] = "listbrgjadi1";
		
		$this->load->view('lipat1',$data);
	}
}
