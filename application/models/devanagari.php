<?php

	class Devanagari extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		/*
			Returns One required row.
		*/		

		public function get ($id) {

			$query = $this->db->query("SELECT * from devanagarimaintable WHERE  Sno = $id ");

			return $query->result();
		}

		/*
			Returns everything
		*/
		public function getAll() {

			$query = $this->db->query("SELECT * from devanagarimaintable");

			return $query->result();
		}

		/*
			Returns search results.
			TODO: Currently only searchs via complete alphabet or separated alphabets.
		*/		

		public function searchdevanagari($searchedresult) {

			$searchedtext = $searchedresult['staticquery'];
			$searchedall = $searchedresult['allcomb'];
			print_r($searchedall);

			$query = $this->db->query("SELECT * from devanagarimaintable WHERE completealphabet LIKE '%$searchedtext%' OR seperated LIKE '%$searchedtext%'");
			return $query->result();
		}

		/*
			Returns Most Searched Results.
		*/			

		public function highestrated() {

		}

		/*
			Returns the last 5 entries of the table.
		*/	

		public function recentlyadded() {

			$query = $this->db->query("SELECT * from devanagarimaintable ORDER BY Sno DESC LIMIT 0,3");
			return $query->result();
		}

	}

?>