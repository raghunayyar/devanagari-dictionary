<!--
	This model takes care of the terminologies widget.
	Implement a date changing function that returns a new row every day.
-->
<?php

	class Terminology extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

	}

?>