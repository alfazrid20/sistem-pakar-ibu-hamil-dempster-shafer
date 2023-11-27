<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit_model'); //load model penyakit
	}
	
	public function index()
	{
		$data['content'] = 'admin/penyakit/list'; 
		$data['kelompok_data'] = $this->Penyakit_model->daftarPenyakit();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Penyakit_model->insert();
			redirect('penyakit/index');
		}
		
		$data['content'] = 'admin/penyakit/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Penyakit_model->edit();
			redirect('penyakit/index');
		}

		$id=$this->uri->segment(3);
		$data['penyakit'] = $this->Penyakit_model->getById($id);
		$data['content'] = 'admin/penyakit/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Penyakit_model->hapus($id);
		redirect('penyakit/index');

	}

}
