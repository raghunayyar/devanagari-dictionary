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

		/*
			List of contributors to be displayed
		*/		

		public function getcontributors() {
			$query = $this->db->get('devanagaricontributions');
			$allcontributors = $query->result();
			$acceptednumber = 0;
			foreach ($allcontributors as $i) {
				if ($i->acception == '1') {
					$acceptednumber++;
					$acceptedlist[$acceptednumber] = $i;
				} 
			}
			return $acceptedlist;
		}

		/*
			List of contributors to be approved by the admin
			TODO - optimise it, DRY.
		*/

		public function approvelist() {
			$query = $this->db->get('devanagaricontributions');
			$allcontributors = $query->result();
			$unacceptednumber = 0;
			$unacceptedlist = array ();
			foreach ($allcontributors as $i) {
				if ($i->acception == '0') {
					$unacceptednumber++;
					$unacceptedlist[$unacceptednumber] = $i;
				} 
			}
			return $unacceptedlist;
		}

		public function initsession() {

			$query = $this->db->query("SELECT `user_data` FROM `ci_sessions` ORDER BY `user_data` ASC LIMIT 1");
			return $query->result();

		}

		public function postcontribute($contributedresult) {
			print_r($contributedresult);
		}

		public function acceptAll() {
			$this->db->query("UPDATE `devanagaricontributions` SET `acception`=1 WHERE `acception` = 0");
		}

	}

?>