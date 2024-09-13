<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_guru');
		$this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel');
		$this->db->order_by('id_guru', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function detail($id_guru)
	{
		$this->db->select('*');
		$this->db->from('tbl_guru');
		$this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel');
		$this->db->where('id_guru', $id_guru);
		$query = $this->db->get();
		return $query->row();
	}


	public function add($data)
	{
		$this->db->insert('tbl_guru', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->update('tbl_guru', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->delete('tbl_guru', $data);
	}

}

/* End of file M_guru.php */
