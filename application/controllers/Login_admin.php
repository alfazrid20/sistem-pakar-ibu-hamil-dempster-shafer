<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model'); //load model login
	}
	
	public function index()
	{
		if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'admin'){redirect('welcome/admin');}
		// $data['contentuser'] = 'user/login'; 
		$this->load->view('templates/login/index');
	}

	public function login()
	{
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLogin($username, $password);
			if (!$check) {
				redirect('welcome/admin');
			}else{
				$data = array(
						'username' => $username,
						'password' => $password,
						'is_login' => TRUE,
						// 'nama' => $check->nama,
						'level' => $check->level
				);
				$this->session->set_userdata($data);
				redirect('welcome/dashboard');
			}

		}
	}

	public function logout()
	{
		$data = array('username','password','is_login', 'level');
		$this->session->unset_userdata($data);
		redirect('welcome/admin');	
	}

}
