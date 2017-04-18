<?php defined('BASEPATH') or die('No direct script access allowed');

class PenerbitModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get($id_penerbit = NULL)
	{
		if ($id_penerbit == NULL) {
			$sql = "SELECT * FROM penerbit";
			return $this->db->query($sql);
		}

		else {
			$sql = "SELECT * FROM penerbit WHERE id_penerbit = ? ";
			return $this->db->query($sql, array($id_penerbit));
		}
	}

	public function insert($nama_suplier,$nama_penerbit,$alamat_penerbit,$telp_penerbit) {
		$sql = "INSERT INTO penerbit (nama_suplier, nama_penerbit,alamat_penerbit,telp_penerbit) VALUES (?,?,?,?) ";
		$this->db->query($sql, array($nama_suplier, $nama_penerbit, $alamat_penerbit, $telp_penerbit));
	}

	public function update($id_penerbit, $nama_suplier, $nama_penerbit, $alamat_penerbit, $telp_penerbit) {
		$sql = "UPDATE penerbit SET nama_suplier = ?, nama_penerbit = ?, alamat_penerbit = ?, telp_penerbit = ? WHERE id_penerbit = ? ";
		$this->db->query($sql, array($nama_suplier,  $nama_penerbit, $alamat_penerbit, $telp_penerbit, $id_penerbit));
	}

	public function delete($id_penerbit) {
		$sql = "DELETE FROM penerbit WHERE id_penerbit = ?";
		$this->db->query($sql, array($id_penerbit));
	}
}