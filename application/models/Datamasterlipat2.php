<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Datamasterlipat1 extends CI_Model
{	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function daftar()
	{
		return $this->db->get("anggota_klp");
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

	public function get_klp()
	{
		return $this->db->get('klp_masyarakat')->result_array();
	}
}
?>