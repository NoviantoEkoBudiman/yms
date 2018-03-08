<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterlipat1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('level') !== '10') { $this->dataload->tolak_user(); }

		$this->load->model('datamasterlipat2');
		$this->load->helper('url');
	}

	public function daftar()
	{	
		$data['data'] = $this->datamasterlipat1->daftar()->result();
		
		$data['title'] = "Kelompok Lipat 2";
		$data['isi'] = "mlipat1";
		
		$this->load->view('masterlipat1',$data);
	}

	public function input() //halaman Anggota
	{
		$data['title']="Input Petugas";
		$data['isi'] = "input";

		$this->load->view('masterlipat1',$data);
	}
	
	public function create() //action input anggota
	{
		$data = array(
			'kd_anggota' => $this->input->post('kd_anggota'),
			'nm_anggota' => $this->input->post('nm_anggota'),
			'username'	 => $this->input->post('username'),
			'password'	 => md5($this->input->post('password')),
			'kontak'	 => $this->input->post('kontak'),
			'no_rek' 	 => $this->input->post('no_rek'),
			'kdklp'	 	 => $this->input->post('kdklp')
		);
		$data = $this->datamasterlipat1->save($data);
		redirect('Masterlipat1/daftar');
	}

	public function edit($kd_anggota)
	{
		$data['title']="Edit Anggota";
		$where = array(
			'kd_anggota' => $kd_anggota
		);
		$data['isi'] = 'mlipatedit';
		$data['anggota']=$this->datamasterlipat1->edit($where,'anggota_klp')->result();
		$this->load->view('masterlipat1',$data);
	}

	public function update()
	{
		$kd_anggota = $this->input->post('kd_anggota');

		$data = array(
			'nm_anggota' => $this->input->post('nm_anggota'),
			'username'	 => $this->input->post('username'),
			'password'	 => md5($this->input->post('password')),
			'kontak'	 => $this->input->post('kontak'),
			'no_rek' 	 => $this->input->post('no_rek'),
			'kdklp'	 	 => $this->input->post('kdklp')
		);
		
		$where = array(
			'kd_anggota' => $kd_anggota
		);
		
		$this->datamasterlipat1->update($where,$data,'anggota_klp');
		redirect('masterlipat1/daftar');
	}

	public function hapus($kd_anggota)
	{
		$where = array(
			'kd_anggota' => $kd_anggota
		);
		
		$this->datamasterlipat1->delete($where,'anggota_klp');
		redirect('masterlipat1/daftar');
	}
}