<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends CI_ModeL {

	// public function __construct()
	// {
	// 	$this->load->database();
	// 	$this->load->model('Mtambah_kategori');
	// }

	

	public function load_pegawai(){
		$sql = $this->db->query("SELECT * FROM pegawai INNER JOIN kategori USING (id_kategori)");
		return $sql->result_array();
	}

	public function load_kategori(){
		$sql = $this->db->query("SELECT * FROM kategori");
		return $sql->result_array();
	}



	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$idkategori = $this->db->escape($post['idkategori']);
		$email = $this->db->escape($post['email']);
		$password = $this->db->escape($post['password']);
		$gaji = $this->db->escape($post['gaji']);

		$sql = $this->db->query("INSERT INTO pegawai VALUES (NULL, $idkategori, $email, $password, $gaji)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$idkategori = $this->db->escape($post['idkategori']);
		$email = $this->db->escape($post['email']);
		$password = $this->db->escape($post['password']);
		$gaji = $this->db->escape($post['gaji']);

		$sql = $this->db->query("UPDATE pegawai SET id_kategori = $idkategori, email=$email, password=$password, gaji_pegawai=$gaji WHERE id_pegawai = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE FROM pegawai WHERE id_pegawai=".intval($id));
	}	
}


