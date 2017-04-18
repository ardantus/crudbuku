<?php defined('BASEPATH') or die('No direct script access allowed');

class BukuModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get($id_buku = NULL)
	{
		if ($id_buku == NULL) {
			$sql = "SELECT * FROM buku";
			return $this->db->query($sql);
		}

		else {
			$sql = "SELECT * FROM buku WHERE id_buku = ? ";
			return $this->db->query($sql, array($id_buku));
		}
	}

	public function insert($nama_suplier,$nama_penerbit,$nama_kategori,$judul_buku) {
		$sql = "INSERT INTO buku (nama_suplier, nama_penerbit,nama_kategori,judul_buku) VALUES (?,?,?,?) ";
		$this->db->query($sql, array($nama_suplier, $nama_penerbit, $nama_kategori, $judul_buku));
	}

	public function update($id_buku, $nama_suplier, $nama_penerbit, $nama_kategori, $judul_buku) {
		$sql = "UPDATE buku SET nama_suplier = ?, nama_penerbit = ?, nama_kategori = ?, judul_buku = ? WHERE id_buku = ? ";
		$this->db->query($sql, array($nama_suplier,  $nama_penerbit, $nama_kategori, $judul_buku, $id_buku));
	}

	public function delete($id_buku) {
		$sql = "DELETE FROM buku WHERE id_buku = ?";
		$this->db->query($sql, array($id_buku));
	}
}