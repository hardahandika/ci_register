<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register_view');
	}

	public function cekReg()
	{
		$this->load->library('form_validation');
		$this->load->model('user');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run()==false){
			$this->load->view('register_view');
		}else{
			$this->user->register();
			$this->load->view('register_sukses');
		}
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */