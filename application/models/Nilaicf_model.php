<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaicf_model extends CI_Model {

	public function daftarNilaicf($limit, $start = 0, $q = null){
		// return $this->db->query("SELECT * FROM gejala_penyakit JOIN penyakit on penyakit.penyakit_id = gejala_penyakit.id ")->result();
		// return $this->db->get("gejala_penyakit")->result();

		return $this->db->select('*, gejala_penyakit.id AS gpid ')
						->from('gejala_penyakit')
						->join('gejala', 'gejala.id = gejala_penyakit.gejala_id ')
						->join('penyakit', 'penyakit.id = gejala_penyakit.penyakit_id ')
						->order_by('gejala_penyakit.id', 'DESC')
                        ->limit($limit, $start)
						->get()
						->result_array();
	}

	public function insert(){ 
		$gejala_id = $this->input->post('gejala_id');
		$penyakit_id = $this->input->post('penyakit_id');
		$md = $this->input->post('md');
		$mb = $this->input->post('mb');

		$data = array(
					'gejala_id'=>$gejala_id,
					'penyakit_id'=>$penyakit_id,
					'md'=>$md,
					'mb'=>$mb,
				);
		$this->db->insert('gejala_penyakit', $data);

	}

	public function getById($id){
		return $query = $this->db->query("SELECT *, a.id as nid FROM gejala_penyakit a JOIN penyakit b ON b.id = a.penyakit_id WHERE a.id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$gejala_id = $this->input->post('gejala_id');
		$penyakit_id = $this->input->post('penyakit_id');
		$md = $this->input->post('md');
		$mb = $this->input->post('mb');

		$data = array(
					'gejala_id'=>$gejala_id,
					'penyakit_id'=>$penyakit_id,
					'md'=>$md,'mb'=>$mb,
		);
		$this->db->where('id',$id);
		$this->db->update('gejala_penyakit', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('gejala_penyakit');
	}

	public function getlistnilaicf()
	{
		// return $this->db->get('gejala');

		return $this->db->select('*, gejala_penyakit.id AS gpid ')
						->from('gejala_penyakit')
						->join('gejala', 'gejala.id = gejala_penyakit.gejala_id ')
						->join('penyakit', 'penyakit.id = gejala_penyakit.penyakit_id ')
						->get()
						->result_array();
	}

	function get_by_gejala($gejala){
         $sql = "select distinct penyakit_id,p.kode,p.nama,p.keterangan from gejala_penyakit gp inner join penyakit p on gp.penyakit_id=p.id where gejala_id in (".$gejala.") order by penyakit_id,gejala_id";
         return $this->db->query($sql);
     }

     function get_gejala_by_penyakit($id,$gejala=null){
         $sql = "select gejala_penyakit.gejala_id,mb,md from gejala_penyakit where penyakit_id=".$id;
         if($gejala!=null)
            $sql=$sql." and gejala_id in (".$gejala.")";
        $sql=$sql." order by gejala_id";
         return $this->db->query($sql);
     }

     function getgejala(){
     	return $this->db->get('gejala');
     }

     function getpenyakit(){
     	return $this->db->get('penyakit');
     }

      function total_rows($q = NULL) {
        $this->db->from('gejala_penyakit');
        return $this->db->count_all_results();
    }
}
