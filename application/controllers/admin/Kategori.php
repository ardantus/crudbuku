<?php defined('BASEPATH') or die('No direct script access allowed');

class Kategori extends Admin_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('KategoriModel', 'kategori');
    }

    public function index() {
        $kategori = $this->kategori->get();
        $result = array('kategori' => $kategori);
        $data['content'] = $this->load->view('admin/kategori/index', $result, TRUE);
        $this->load->view($this->template, $data);
    }

    public function tambah() {
        if ($this->input->post()){
            $nama_kategori = $this->input->post('nama_kategori');
            $this->kategori->insert($nama_kategori);
            redirect('admin/kategori');
        }
        $data['content'] = $this->load->view('admin/kategori/tambah', NULL, TRUE);
        $this->load->view($this->template, $data);
    }

    public function ubah($id_kategori = NULL) {
        if ($this->input->post()) {
            $id_kategori = $this->input->post('id_kategori');
            $nama_kategori = $this->input->post('nama_kategori');
            $this->kategori->update($id_kategori, $nama_kategori);
            redirect('admin/kategori');
        }

        $kategori = $this->kategori->get($id_kategori);
        $result = array('kategori' => $kategori->row());
        $data['content'] = $this->load->view('admin/kategori/ubah', $result, TRUE);
        $this->load->view($this->template, $data);
    }

    public function hapus($id_kategori = NULL) {
        $this->kategori->delete($id_kategori);
        redirect('admin/kategori');
    }
}