<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {

	public function listHistory($id){
        return $this->db->select('*')
                        ->from('history a')
                        ->join('gejala b', 'b.id = a.gejala_id')
                        ->where('a.user_id', $id)
                        ->get()
                        ->result_array();
    }


    function listHasil($id){
        return $this->db->select('*')
                        ->from('hasil_diagnosa')
                        ->where('user_id', $id)
                        ->get()
                        ->result_array();


       
    }

}
