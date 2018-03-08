<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterlipat1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('level') !== '9') { $this->dataload->tolak_user(); }

		$this->load->model('datamasterlipat1');
		$this->load->helper('url');
	}
	
	/*
	Pengelolaan data anggota
	*/
	public function daftar()
	{	
		$data['data'] = $this->datamasterlipat1->daftar()->result();
		
		$data['title'] = "Kelompok Lipat 1";
		$data['isi'] = "mlipat1";
		
		$this->load->view('masterlipat1',$data);
	}

	public function input() //Load halaman Anggota
	{
		$data['title']="Input Anggota";
		$data['isi'] = "input";
		$data['klp_masyarakat'] = $this->datamasterlipat1->get_kelompok();
		$this->load->view('masterlipat1',$data);
	}
	
	public function create() //action input anggota
	{
		$data = array(
			//'kd_anggota' => $this->input->post('kd_anggota'),
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
		$data['klp_masyarakat'] = $this->datamasterlipat1->get_kelompok();
		$data['anggota']=$this->datamasterlipat1->edit($where,'anggota_klp');
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

	/*
	Proses Pengelolaan Finishing
	*/
	public function inputbjadi() //Tampilkan halaman Input Barang Jadi
	{	
		$data['data'] = $this->datamasterlipat1->get_anggota();
		$data['desainbarang'] = $this->datamasterlipat1->desainbarang();
		$data['kelompok'] = $this->datamasterlipat1->get_kelompok();
		$data['title'] = "Data Finishing Barang";
		$data['isi'] = "mlipat1bjadi";
		
		$this->load->view('masterlipat1',$data);
	}

	public function simpanbjadi() //action Simpan Barang Jadi
	{
		$data = array(
			'kddesbrg' => $this->input->post('kddesbrg'),
			'kd_anggota' => $this->input->post('kd_anggota'),
			'tgl_jadi' => $this->input->post('tgl_jadi'),
			'jumlah' => $this->input->post('jumlah'),
			'kdklp' => $this->input->post('kdklp')
		);
		$data = $this->datamasterlipat1->savebrgjadi($data);
		redirect('Masterlipat1/getbrgjadi');
	}

	public function getbrgjadi() //Tampilkan halaman Barang Jadi
	{	
		$data['listbarang'] = $this->datamasterlipat1->listbrgjadi();
		$data['title'] = "List Barang Jadi";
		$data['isi'] = "mlistbrgjadi1";
		
		$this->load->view('masterlipat1',$data);
	}

	/*public function edit($kd_anggota)
	{
		$data['title']="Edit Anggota";
		$where = array(
			'kd_anggota' => $kd_anggota
		);
		$data['isi'] = 'mlipatedit';
		$data['klp_masyarakat'] = $this->datamasterlipat1->get_kelompok();
		$data['anggota']=$this->datamasterlipat1->edit($where,'anggota_klp');
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
	}*/
}