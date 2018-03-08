<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Datamasterlipat1 extends CI_Model
{	
	/*
	Pengolahan data anggota
	*/
	public function __construct()
	{
		$this->load->database();
	}
	
	public function daftar()
	{
		return $this->db->query("SELECT * FROM anggota_klp WHERE kdklp='KLP01'");
	}

	public function save($data)
	{
		$this->db->insert('anggota_klp',$data);	
		return $this->db->insert_id();
	}
	
	public function edit($data, $table)
	{
		$res=$this->db->get_where($table, $data);
    	return $res->result_array();
	}

	public function update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	/*
	pengolahan data finishing
	*/
	public function get_kelompok()//Mendapatkan data dari table klp_masyarakat
	{
		return $this->db->get('klp_masyarakat')->result_array();

	}

	public function get_anggota()//mendapatkan data dari table anggota_klp
	{
		return $this->db->query("SELECT * FROM anggota_klp WHERE kdklp='KLP01'")->result_array();
	}

	public function desainbarang()//Mendapatkan data dari table desain
	{
		return $this->db->get('desainbarang')->result_array();	
	}

	public function savebrgjadi($data)//menyimpan data barang jadi
	{
		$this->db->insert('barang_jadi',$data);	
		return $this->db->insert_id();
	}

	public function listbrgjadi()//menampilkan list barang jadi
	{
		return $this->db->query("SELECT * FROM barang_jadi, desainbarang, anggota_klp WHERE desainbarang.kddesbrg=barang_jadi.kddesbrg AND anggota_klp.kd_anggota=barang_jadi.kd_anggota")->result_array();
	}
}
?>