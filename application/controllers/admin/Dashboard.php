<?php defined('BASEPATH') or die('No direct script access allowed');

class Dashboard extends Admin_Controller {
	public function __construct(){
		parent::__construct();		
	}

	public function index() {
	$data['content'] = $this->load->view('admin/dashboard/index', NULL, TRUE);
	$this->load->view($this->template, $data);		
	}
}

