<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_import_excel extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('app_data_upload', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('app_data_upload')->result_array();
	}

}