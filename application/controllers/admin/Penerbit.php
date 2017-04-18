<?php defined('BASEPATH') or die('No direct script access allowed');

class Penerbit extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('PenerbitModel', 'penerbit');
    }

    public function index() {
        $penerbit = $this->penerbit->get();
        $result = array('penerbit' => $penerbit);
        $data['content'] = $this->load->view('admin/penerbit/index', $result, TRUE);
        $this->load->view($this->template, $data);
    }

    public function tambah() {
        if ($this->input->post()){
            $nama_suplier = $this->input->post('nama_suplier');
            $nama_penerbit = $this->input->post('nama_penerbit');
            $alamat_penerbit = $this->input->post('alamat_penerbit');
            $telp_penerbit = $this->input->post('telp_penerbit');
            $this->penerbit->insert($nama_suplier,$nama_penerbit,$alamat_penerbit,$telp_penerbit);
            redirect('admin/penerbit');
        }
        $data['content'] = $this->load->view('admin/penerbit/tambah', NULL, TRUE);
        $this->load->view($this->template, $data);
    }

    public function ubah($id_penerbit = NULL) {
        if ($this->input->post()) {
            $id_penerbit = $this->input->post('id_penerbit');
            $nama_suplier = $this->input->post('nama_suplier');
            $nama_penerbit = $this->input->post('nama_penebit');
            $alamat_penerbit = $this->input->post('alamat_penerbit');
            $telp_penerbit = $this->input->post('telp_penerbit');
            $this->penerbit->update($id_penerbit, $nama_suplier, $nama_penerbit, $alamat_penerbit, $telp_penerbit);
            redirect('admin/penerbit');
        }

        $penerbit = $this->penerbit->get($id_penerbit);
        $result = array('penerbit' => $penerbit->row());
        $data['content'] = $this->load->view('admin/penerbit/ubah', $result, TRUE);
        $this->load->view($this->template, $data);
    }

    public function hapus($id_penerbit = NULL) {
        $this->penerbit->delete($id_penerbit);
        redirect('admin/penerbit');
    }
}