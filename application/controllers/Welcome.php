<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_index');
	}
	
	function index(){	
		$data['tampil'] = $this->M_index->tampil_data()->result();
		$this->load->view('V_index',$data);
	}

	function simpan(){
		$id             = $this->input->post('id_additional');
		$nama_addtional = $this->input->post('nama_addtional');
		$harga_pokok    = $this->input->post('harga_pokok');
		$harga_jual     = $this->input->post('harga_jual');

		$data = array(
						'kode_additional' => $id,
						'nama_produk'     => $nama_addtional,
						'harga_pokok'     => $harga_pokok,
						'harga_jual'      => $harga_jual
		);

		$this->M_index->create($data);
		redirect('welcome');
	}

	function edit($id_test){
		$where = array('id_test' => $id_test);
		$data['tampil'] = $this->M_index->update($where)->result();
		$this->load->view('V_edit',$data);
	}

	function proses_update(){
		$id            = $this->input->post('id_test');
		$id_additional = $this->input->post('id_additional');
		$nama_produk   = $this->input->post('nama_addtional');
		$harga_pokok   = $this->input->post('harga_pokok');
		$harga_jual    = $this->input->post('harga_jual');

		$data = array(
						'id_test'        => $id,
						'kode_additional'  => $id_additional,
						'nama_produk'    => $nama_produk,
						'harga_pokok'    => $harga_pokok,
						'harga_jual'    => $harga_jual
		);

		$where = array('id_test' => $id);

		$this->M_index->update_data($where,$data);
		redirect('welcome');
	}

	function hapus($id_test){
		$where = array('id_test' => $id_test);
		$this->M_index->delete($where);
		redirect('welcome');
	}
}
