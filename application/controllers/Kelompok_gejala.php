<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_gejala extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Kelompok_model'); //load model kelompok
	}
	
	public function index()
	{
		$data['content'] = 'admin/kelompok/list'; 
		$data['kelompok_data'] = $this->Kelompok_model->daftarGejala();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Kelompok_model->insert();
			redirect('kelompok_gejala/index');
		}
		
		$data['content'] = 'admin/kelompok/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Kelompok_model->edit();
			redirect('kelompok_gejala/index');
		}

		$id=$this->uri->segment(3);
		$data['gejala'] = $this->Kelompok_model->getById($id);
		$data['content'] = 'admin/kelompok/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Kelompok_model->hapus($id);
		redirect('kelompok_gejala/index');

	}

}
