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

			$conjunct = $query->result();
			$languages = $this->getlanguages($conjunct);
			$parsedresult = $this->parseresults($conjunct,$languages);
			return $parsedresult;
		}

		/*
			Returns everything
		*/

		public function parseresults($conjunct,$languages) {
			$parsedresult = array(
				'sno' => $conjunct[0]->Sno,
				'completealphabet' => $conjunct[0]->completealphabet,
				'seperated' => $conjunct[0]->seperated,
				'languages' => implode(", ",$languages),
				'examples' => $conjunct[0]->sanskrit, // replace by examples when girish is done.
				'meaning' => $conjunct[0]->meaning,
				'tip' => $conjunct[0]->tip,
				'numberofglyphs' => $conjunct[0]->numberofglyphs
			);

			return $parsedresult;

		}
 
		public function getAll() {

			$query = $this->db->query("SELECT * from devanagarimaintable");

			return $query->result();
		}

		public function getlanguages($conjunct) {
			$languages = array();
			if (strlen($conjunct[0]->sanskrit) > 0) {
				array_push($languages, 'Sanskrit');
			}
			if (strlen($conjunct[0]->hindi) > 0) {
				array_push($languages, 'Hindi');
			}

			if (strlen($conjunct[0]->marathi) > 0) {
				array_push($languages, 'Marathi');
			}
			return $languages;
		}		

		/*
			Returns search results.
			TODO: Currently only searchs via complete alphabet or separated alphabets.
		*/		

		public function searchdevanagari($searchedresult) {

			$searchedtext = $searchedresult['inputquery'];

			$hindi = isset($searchedresult['language1']);
			$marathi = isset($searchedresult['language2']);
			$sanskrit = isset($searchedresult['language3']);

			$comb1 = isset($searchedresult['combination1']);
			$comb2 = isset($searchedresult['combination2']);
			$comb3 = isset($searchedresult['combination3']);

			$query = $this->db->query("SELECT * from devanagarimaintable WHERE completealphabet LIKE '%$searchedtext%' OR seperated LIKE '%$searchedtext%'");
			
			$filteredbylanguage = $this->searchlangauges($hindi, $marathi, $sanskrit, $query);
			$filteredbycombination = $this->searchcombinations($comb1,$comb2,$comb3,$filteredbylanguage);
			return $filteredbylanguage;
		}

		public function searchlangauges($hindi, $marathi, $sanskrit, $query) {

			$number = 0;
			$filteredarray = array();
			foreach ($query->result() as $row) {
				if ($sanskrit && strlen($row->sanskrit) > 0) {
					$filteredarray[$number] = $row;
					$number++;
				} elseif ($hindi && strlen($row->hindi) > 0) {
					$filteredarray[$number] = $row;
					$number++;
				} elseif ($marathi && strlen($row->marathi) > 0) {
					$filteredarray[$number] = $row;
					$number++;
				}
			}
			return $filteredarray;
		}

		public function searchcombinations($comb1,$comb2,$comb3,$filteredbylanguage) {
			$number = 0;
			$filteredarray = array();
			foreach ($filteredbylanguage as $row) {
				if ($comb1 && strlen($row->completealphabet) == 1) {
					$filteredarray[$number] = $row;
					$number++;
				} elseif ($comb2 && strlen($row->completealphabet) === 3) {
					$filteredarray[$number] = $row;
					$number++;
				} elseif ($comb3 && strlen($row->completealphabet) === 5) {
					$filteredarray[$number] = $row;
					$number++;					
				}
			}
			return $filteredarray;
		}

		/*
			Returns the last 5 entries of the table.
			TODO: Fix for the final rows, when there are no elements further.
		*/		

		public function relatedsearch($sno) {

			$start = $sno+1;
			$end = $sno+4;

			$query = $this->db->query("SELECT * from devanagarimaintable WHERE Sno BETWEEN $start AND $end");
			return $query->result();
		}

	}

?>