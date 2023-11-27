<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('Login_model'); //load model login
	// }
	
	public function checkLogin($username, $password)
	{
		return $this->db->query(" SELECT * FROM user WHERE username='$username' AND password='$password' ")->row();
	}

	public function checkLoginPeserta($username, $password)
	{
		return $this->db->query(" SELECT * FROM user WHERE username='$username' AND password='$password' ")->row();
	}

}
