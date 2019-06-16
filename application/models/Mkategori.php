<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkategori extends CI_ModeL {

	// public function __construct()
	// {
	// 	$this->load->database();
	// 	$this->load->model('Mtambah_kategori');
	// }
	public function load_kategori(){
		$sql = $this->db->query("SELECT * FROM kategori");
		return $sql->result_array();
	}



	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$kategori = $this->db->escape($post['kategori']);

		$sql = $this->db->query("INSERT INTO kategori VALUES (NULL, $kategori)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM kategori WHERE id_kategori = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$kategori = $this->db->escape($post['kategori']);

		$sql = $this->db->query("UPDATE kategori SET nama_kategori = $kategori WHERE id_kategori = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE FROM kategori WHERE id_kategori=".intval($id));
	}	
}


