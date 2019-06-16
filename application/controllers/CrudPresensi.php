<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudPresensi extends CI_Controller {
	// public function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->load->model('Mtambah_kategori');
	// }

	public function index()
	{
		$this->load->model("Mpresensi");
		$data['list_presensi'] = $this->Mpresensi->load_presensi();

		$this->load->view("Vpresensi",$data);

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
