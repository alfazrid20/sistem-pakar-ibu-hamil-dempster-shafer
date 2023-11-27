<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_CF extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Nilaicf_model'); //load model nilaicf
	}

	public function index()
	{
		$q = null;

        $start = intval($this->input->get('start'));
		$config['base_url'] = base_url() . 'index.php/nilai_cf';
		$config['first_url'] = base_url() . 'index.php/nilai_cf';
        $config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Nilaicf_model->total_rows($q);
        $this->pagination->initialize($config);

		$data['content'] = 'admin/nilai_cf/list';
		$data['pagination'] = $this->pagination->create_links();
		$data['start'] = $start;
		$data['kelompok_data'] = $this->Nilaicf_model->daftarNilaicf($config['per_page'], $start, $q);
		$this->load->view('templates/admin/index', $data);
	}


	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Nilaicf_model->insert();
			redirect('nilai_cf/index');
		}

		$data['content'] = 'admin/nilai_cf/create';
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			// print_r($_POST);exit;
			$this->Nilaicf_model->edit();
			redirect('nilai_cf/index');
		}

		$id=$this->uri->segment(3);
		$data['penyakit'] = $this->db->query("SELECT * FROM penyakit order by id")->result();
		$data['gejala'] = $this->db->query("SELECT * FROM gejala order by id")->result();
		$data['nilaicf'] = $this->Nilaicf_model->getById($id);
		$data['content'] = 'admin/nilai_cf/edit';
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Nilaicf_model->hapus($id);
		redirect('nilai_cf/index');

	}
}
