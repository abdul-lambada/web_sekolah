<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Pasword', 'required');

		
		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->user_login->login($username, $password);
		}
		
		
		$data = array('title' => 'Login');
		$this->load->view('v_login', $data, FALSE);
		
	}

	public function logout(){
		$this->load->library('user_login');
		$this->user_login->logout();
	}

}

/* End of file Login.php */
