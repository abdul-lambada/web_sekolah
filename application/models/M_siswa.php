<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->order_by('id_siswa', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function detail($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->where('id_siswa', $id_siswa);
		$query = $this->db->get();
		return $query->row();
	}


	public function add($data)
	{
		$this->db->insert('tbl_siswa', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->update('tbl_siswa', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->delete('tbl_siswa', $data);
	}
}

/* End of file M_siswa.php */
