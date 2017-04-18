<?php defined('BASEPATH') or die('No direct script access allowed');

class KategoriModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get($id_kategori = NULL)
	{
		if ($id_kategori == NULL) {
			$sql = "SELECT * FROM kategori";
			return $this->db->query($sql);
		}

		else {
			$sql = "SELECT * FROM kategori WHERE id_kategori = ? ";
			return $this->db->query($sql, array($id_kategori));
		}
	}

	public function insert($nama_kategori) {
		$sql = "INSERT INTO kategori (nama_kategori) VALUES (?) ";
		$this->db->query($sql, array($nama_kategori));
	}

	public function update($id_kategori, $nama_kategori) {
		$sql = "UPDATE kategori SET nama_kategori = ? WHERE id_kategori = ?";
		$this->db->query($sql, array($nama_kategori, $id_kategori));
	}

	public function delete($id_kategori) {
		$sql = "DELETE FROM kategori WHERE id_kategori = ?";
		$this->db->query($sql, array($id_kategori));
	}
}