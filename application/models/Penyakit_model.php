<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit_model extends CI_Model {

	public function daftarPenyakit(){
		return $this->db->get('penyakit')->result();
	}
	
	public function insert(){
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
	
	$data = array(
					'kode'=>$kode,
					'nama'=>$nama,
					'keterangan'=>$keterangan,
			);
	$this->db->insert('penyakit', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM penyakit WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');

		$data = array(
					'kode'=>$kode,
					'nama'=>$nama,
					'keterangan'=>$keterangan,
		);
		$this->db->where('id',$id);
		$this->db->update('penyakit', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('penyakit');
	}
}
