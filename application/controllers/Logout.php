<?php
class Logout extends CI_Controller {
	public function index() {
		$this->session->sess_destroy();
		//$this->load->view('logout');
		echo 'user logged out';
		//redirect(base_url());
	}

}