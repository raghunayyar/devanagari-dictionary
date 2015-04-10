<?php

	class AdminModel extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		public function validate() {
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password', sha1($this->input->post('password')));

			$query = $this->db->get('devanagariadmin');

			if ($query->num_rows == 1) {
				return true;
			}
		}

	}

?>