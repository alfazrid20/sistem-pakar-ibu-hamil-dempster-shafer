<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Riwayat_model'); //load model penyakit
	}
	
	public function index()
	{
		$data['content'] = 'admin/riwayat/list'; 
		$data['kelompok_data'] = $this->Riwayat_model->daftarRiwayat();
		$data['kelompok_data2'] = $this->Riwayat_model->daftarHasil();
		$this->load->view('templates/admin/index', $data);
	}

	// public function riwayatHasil()
	// {
	// 	$data['content'] = 'admin/riwayat/list'; 
	// 	$data['kelompok_data'] = $this->Riwayat_model->daftarHasil();
	// 	$this->load->view('templates/admin/index', $data);
	// }
	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Riwayat_model->hapus($id);
		redirect('riwayat/index');

	}
} 
