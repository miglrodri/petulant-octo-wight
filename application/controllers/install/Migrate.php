<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('migration');
	}
	
	/**
	* migrate database to latest version
	*/
	function index() {
		$this->migration->latest();
		var_dump($this->migration);
	}
	function latest() {
		$this->index();
	}
	
	/**
	 * migrate database to current version
	 */
	function current() {
		$this->migration->current();
		var_dump($this->migration);
	}
	
	/**
	 * migrate database to version on GET parameter
	 */
	function version($version = 0) {
		$this->migration->version($version);
		var_dump($this->migration);
	}
	
}