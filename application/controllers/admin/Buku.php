<?php defined('BASEPATH') or die('No direct script access allowed');

class Buku extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BukuModel', 'buku');
    }

    public function index() {
        $buku = $this->buku->get();
        $result = array('buku' => $buku);
        $data['content'] = $this->load->view('admin/buku/index', $result, TRUE);
        $this->load->view($this->template, $data);
    }

    public function tambah() {
        if ($this->input->post()){
            $nama_suplier = $this->input->post('nama_suplier');
            $nama_penerbit = $this->input->post('nama_penerbit');
            $nama_kategori = $this->input->post('nama_kategori');
            $judul_buku = $this->input->post('judul_buku');
            $this->buku->insert($nama_suplier,$nama_penerbit,$nama_kategori,$judul_buku);
            redirect('admin/buku');
        }
        $data['content'] = $this->load->view('admin/buku/tambah', NULL, TRUE);
        $this->load->view($this->template, $data);
    }

    public function ubah($id_buku = NULL) {
        if ($this->input->post()) {
            $id_buku = $this->input->post('id_buku');
            $nama_suplier = $this->input->post('nama_suplier');
            $nama_penerbit = $this->input->post('nama_penebit');
            $nama_kategori = $this->input->post('nama_kategori');
            $judul_buku = $this->input->post('judul_buku');
            $this->buku->update($id_buku, $nama_suplier, $nama_penerbit, $nama_kategori, $judul_buku);
            redirect('admin/buku');
        }

        $buku = $this->buku->get($id_buku);
        $result = array('buku' => $buku->row());
        $data['content'] = $this->load->view('admin/buku/ubah', $result, TRUE);
        $this->load->view($this->template, $data);
    }

    public function hapus($id_buku = NULL) {
        $this->buku->delete($id_buku);
        redirect('admin/buku');
    }
}