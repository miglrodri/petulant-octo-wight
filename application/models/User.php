<?php

class User extends CI_Model {

	public function getAll() {
		$this->db->select()->from('users');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert($data) {
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	public function truncate() {
		$this->db->truncate('users');
	}

}