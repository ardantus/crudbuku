<?php defined('BASEPATH') or die('No direct script access allowed');

class Suplier extends Admin_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('SuplierModel', 'suplier');
	}

	public function index() {
		$suplier = $this->suplier->get();
		$result = array('suplier' => $suplier);
		$data['content'] = $this->load->view('admin/suplier/index', $result, TRUE);
		$this->load->view($this->template, $data);
	}

	public function tambah() {
		if ($this->input->post()){
			$nama_suplier = $this->input->post('nama_suplier');
			$alamat_suplier = $this->input->post('alamat_suplier');
			$telp_suplier = $this->input->post('telp_suplier');
			$this->suplier->insert($nama_suplier,$alamat_suplier,$telp_suplier);
			redirect('admin/suplier');
		}
		$data['content'] = $this->load->view('admin/suplier/tambah', NULL, TRUE);
		$this->load->view($this->template, $data);
	}

	public function ubah($id_suplier = NULL) {
		if ($this->input->post()) {
			$id_suplier = $this->input->post('id_suplier');
			$nama_suplier = $this->input->post('nama_suplier');
			$alamat_suplier = $this->input->post('alamat_suplier');
			$telp_suplier = $this->input->post('telp_suplier');
			$this->suplier->update($id_suplier, $nama_suplier, $alamat_suplier, $telp_suplier);
			redirect('admin/suplier');
		}

		$suplier = $this->suplier->get($id_suplier);
		$result = array('suplier' => $suplier->row());
		$data['content'] = $this->load->view('admin/suplier/ubah', $result, TRUE);
		$this->load->view($this->template, $data);
	}

	public function hapus($id_suplier = NULL) {
		$this->suplier->delete($id_suplier);
		redirect('admin/suplier');
	}
}