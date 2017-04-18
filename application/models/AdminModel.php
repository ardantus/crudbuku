<?php defined('BASEPATH') or die('No direct script access allowed');

class AdminModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function ceklogin($username, $password) {
    	$sql = "SELECT * FROM user WHERE username = ? AND password = ? ";
    	$query = $this->db->query($sql, array($username, $password));
    	if ($query->num_rows() > 0)
    		return TRUE;
    	else
    		return FALSE;
    }
}