<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_pengumuman');
		$this->db->order_by('id_pengumuman', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function detail($id_pengumuman)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengumuman');
		$this->db->where('id_pengumuman', $id_pengumuman);
		$query = $this->db->get();
		return $query->row();
	}


	public function add($data)
	{
		$this->db->insert('tbl_pengumuman', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_pengumuman', $data['id_pengumuman']);
		$this->db->update('tbl_pengumuman', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pengumuman', $data['id_pengumuman']);
		$this->db->delete('tbl_pengumuman', $data);
	}
}

/* End of file M_pengumunan.php */
