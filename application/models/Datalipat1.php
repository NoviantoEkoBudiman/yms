<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Datalipat1 extends CI_Model{
	
	public function __construct()
	{
		$this->load->database();
	}
		
	public function listbrgjadi()//menampilkan list barang jadi
	{
		return $this->db->query("SELECT * FROM barang_jadi, desainbarang, anggota_klp WHERE desainbarang.kddesbrg=barang_jadi.kddesbrg AND anggota_klp.kd_anggota=barang_jadi.kd_anggota")->result_array();
	}
}
?>