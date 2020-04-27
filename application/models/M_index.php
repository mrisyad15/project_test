<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_index extends CI_Model {

	
	function tampil_data(){	
		return $this->db->get('tb_test');
	}

	function create($data){
		$this->db->insert('tb_test',$data);
	}

	function update($where){
		return $this->db->get_where('tb_test', $where);
	}

	function update_data($where,$data){
		$this->db->where($where);
		$this->db->update('tb_test',$data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('tb_test');
	}
}
