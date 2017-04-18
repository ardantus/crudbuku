<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('BukuModel', 'buku');
    }

    public function index() {
        $buku = $this->buku->get();
        $data['content'] = $this->load->view('home/index', array('buku' => $buku), TRUE);
        $this->load->view($this->template, $data);
    }
}
