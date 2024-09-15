<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengumuman');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'title' => 'MTs AL-AMIIN',
			'title2' => 'Data Pengumuman',
			'pengumuman' => $this->m_pengumuman->lists(),
			'isi' => 'admin/pengumuman/v_list'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		// Form validation rules
		$this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required');
		$this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'MTs AL-AMIIN',
				'title2' => 'Tambah Pengumuman',
				'isi' => 'admin/pengumuman/v_add'
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		}else{
			$data = array(
				'judul_pengumuman' => $this->input->post('judul_pengumuman'),
				'isi_pengumuman' => $this->input->post('isi_pengumuman'),
				'tgl' => date('Y-m-d H:i:s')
			);
			$this->m_pengumuman->add($data);
			$this->session->set_flashdata('pesan', 'Data telah ditambahkan');
			redirect('pengumuman');
		}
	}

	public function edit($id_pengumuman)
	{
		// Form validation rules
		$this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required');
		$this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'MTs AL-AMIIN',
				'title2' => 'Edit Pengumuman',
				'pengumuman' => $this->m_pengumuman->detail($id_pengumuman),
				'isi' => 'admin/pengumuman/v_edit'
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		}else{
			$data = array(
				'id_pengumuman' 	=> $id_pengumuman,
				'judul_pengumuman' 	=> $this->input->post('judul_pengumuman'),
				'isi_pengumuman' 	=> $this->input->post('isi_pengumuman'),
				'tgl'				=> date('Y-m-d H:i:s')
			);
			$this->m_pengumuman->edit($data);
			$this->session->set_flashdata('pesan', 'Data telah diEdit');
			redirect('pengumuman');
		}
	}

	public function delete($id_pengumuman)
	{
		$data = array('id_pengumuman' => $id_pengumuman);
		$this->m_pengumuman->delete($data);
		$this->session->set_flashdata('pesan', 'Data berhasil diHapus..!!');
		redirect('pengumuman');
	}

}

/* End of file Pengumuman.php */
