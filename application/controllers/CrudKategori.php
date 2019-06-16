<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudKategori extends CI_Controller {
	// public function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->load->model('Mtambah_kategori');
	// }

	public function index()
	{
		$this->load->model("Mkategori");
		$data['list_kategori'] = $this->Mkategori->load_kategori();

		$this->load->view("Vkategori",$data);

	}
	public function add(){
		$this->load->model("Mkategori");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->Mkategori->simpan($_POST);
			redirect("CrudKategori");
		}

		$this->load->view("vform_kategori",$data);
	}

	public function edit($id){
		$this->load->model("Mkategori");
		$data['tipe'] = "Edit";
		$data['default'] = $this->Mkategori->get_default($id);
		if(isset($_POST['tombol_submit'])){
			
			$this->Mkategori->update($_POST, $id);
			redirect("CrudKategori", $data);
		}
		$this->load->view("vform_kategori", $data);
	}

	public function delete($id){
		$this->load->model("Mkategori");
		$this->Mkategori->hapus($id);
		redirect("CrudKategori");
	}



}	
	

