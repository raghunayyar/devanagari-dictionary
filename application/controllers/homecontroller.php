<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('search');
		$this->load->view('templates/footer');
	}

	public function search() {
		$this->load->view('templates/header');
	}
}

/* End of file homecontroller.php */
/* Location: ./application/controllers/homecontroller.php */