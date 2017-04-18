<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class User extends MY_Controller {
    public function __construct() {
    	parent::__construct();
    }

    public function index() {
    	$this->login();
    }

    public function login() {
    	if ($this->session->login)
    		redirect('admin/dashboard');

    	if ($this->input->post()) {
    		$this->load->model('AdminModel', 'admin');
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		$password = md5($password);
    		if ($this->admin->ceklogin($username, $password)) {
    			$this->session->set_userdata(array('login' => $username));
    			redirect('admin/dashboard');
    		}
    	}
    	$this->load->view('admin/login');
    }

    public function logout() {
    	$this->session->unset_userdata('login');
    	redirect('admin');
    }
}