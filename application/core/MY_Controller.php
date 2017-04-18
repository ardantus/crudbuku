<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class MY_Controller extends CI_Controller {
	public $template;
  
  // buat variabel $menu
  public $menu;

	public function __construct() {
		parent:: __construct();

		$this->load->model('SuplierModel', 'suplier');
		$this->load->model('PenerbitModel', 'penerbit');
		$this->load->model('KategoriModel', 'kategori');
    $this->load->model('BukuModel', 'buku');
		// Ini adalah template dasar yang ada di views
		$this->template = 'template';
  

	}
}

// controller berikut untuk menangani halaman admin, nanti controller halaman admin akan extend ke admin_controller
class Admin_Controller extends CI_Controller
{
	public $template;
    public function __construct() {
        parent::__construct();
        $this->template = 'admin/template';

        // fungsi dibawah untuk ngecek sudah login belum jika sudah ke dashboard, jika belum ke login
        if (!$this->session->login)
         	redirect('admin/user/login');
    }
}
