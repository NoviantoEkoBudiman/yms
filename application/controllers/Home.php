<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('datalogin');
    }
	public function index()
	{
		if ($this->session->userdata('level') !== '10') { redirect('login');}
        else {redirect('petugas/daftar');}
	}

	public function coba()
	{
		$data['title']="Daftar Petugas";
		$this->load->view('input',$data);
	}
}
