<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		//$this->output->enable_profiler(TRUE);
		$this->load->library('session');
		$data['user_id'] = $this->session->userdata('id');
		$data['user_email'] = $this->session->userdata('email');
		$data['page_title'] = 'Dashboard';
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/dashboard', $data);
		$this->load->view('backend/templates/footer');
	}
}
