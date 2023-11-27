<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_model extends CI_Model {

	public function daftarRiwayat(){
		return $this->db->get('history')->result();
		// return $this->db->select('*, gejala_penyakit.id AS gpid ')
		// 				->from('gejala_penyakit')
		// 				->join('gejala', 'gejala.id = gejala_penyakit.gejala_id ')
		// 				->join('penyakit', 'penyakit.id = gejala_penyakit.penyakit_id ')
  //                       ->limit($limit, $start)
		// 				->get()
		// 				->result_array();
		// }
	}

	public function jumlah(){
		return $this->db->get('hasil_diagnosa');
	}

	public function daftarHasil(){
		return $this->db->get('hasil_diagnosa')->result();
	}
	

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM penyakit WHERE id='$id' ")->row_array();

	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('hasil_diagnosa');
	}
}
