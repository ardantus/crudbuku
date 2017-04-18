<?php defined('BASEPATH') or die('No direct script access allowed');

class SuplierModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get($id_suplier = NULL)
	{
		if ($id_suplier == NULL) {
			$sql = "SELECT * FROM suplier";
			return $this->db->query($sql);
		}

		else {
			$sql = "SELECT * FROM suplier WHERE id_suplier = ? ";
			return $this->db->query($sql, array($id_suplier));
		}
	}

	public function insert($nama_suplier,$alamat_suplier,$telp_suplier) {
		$sql = "INSERT INTO suplier (nama_suplier,alamat_suplier,telp_suplier) VALUES (?,?,?) ";
		$this->db->query($sql, array($nama_suplier, $alamat_suplier, $telp_suplier));
	}

	public function update($id_suplier, $nama_suplier, $alamat_suplier, $telp_suplier) {
		$sql = "UPDATE suplier SET nama_suplier = ?,alamat_suplier = ?,telp_suplier = ? WHERE id_suplier = ? ";
		$this->db->query($sql, array($nama_suplier,  $alamat_suplier, $telp_suplier, $id_suplier));
	}

	public function delete($id_suplier) {
		$sql = "DELETE FROM suplier WHERE id_suplier = ?";
		$this->db->query($sql, array($id_suplier));
	}
}