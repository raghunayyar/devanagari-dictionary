<?php

	class Devanagari extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		/*
			Returns everything
		*/
		public function getAll() {
			$query = $this->db->query("SELECT * from devanagarimaintable");

			return $query->result();
		}

		public function searchdevanagari($searchedtext) {
			$query = $this->db->query("SELECT * from devanagarimaintable WHERE completealphabet LIKE '%$searchedtext%' OR seperated LIKE '%$searchedtext%'");

			return $query->result();
		}

		/*
			Returns searched element
		*/

		public function get() {

		}

		public function highestrated() {

		}

		public function recentlyadded() {
			
		}

	}

?>