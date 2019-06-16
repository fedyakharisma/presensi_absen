<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudPegawai extends CI_Controller {
	

	public function index()
	{
		$this->load->model("Mpegawai");
		$data['list_pegawai'] = $this->Mpegawai->load_pegawai();

		$this->load->view("Vpegawai",$data);

	}
	public function add(){
		$this->load->model("Mpegawai");
		$data['tipe'] = "Add";

		$data['list_kategori'] = $this->Mpegawai->load_kategori();

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->Mpegawai->simpan($_POST);
			redirect("CrudPegawai");
		}

		$this->load->view("vform_pegawai",$data);
	}

	public function edit($id){
		$this->load->model("Mpegawai");
		$data['tipe'] = "Edit";
		$data['list_kategori'] = $this->Mpegawai->load_kategori();
		$data['default'] = $this->Mpegawai->get_default($id);
		if(isset($_POST['tombol_submit'])){
			
			$this->Mpegawai->update($_POST, $id);
			redirect("CrudPegawai", $data);
		}
		$this->load->view("vform_pegawai", $data);
	}

	public function delete($id){
		$this->load->model("Mpegawai");
		$this->Mpegawai->hapus($id);
		redirect("CrudPegawai");
	}



}	
