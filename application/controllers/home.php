<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/* Majority of the widgets will go here */
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('search');
		$this->load->view('templates/footer');
	}

	public function terminologies() {
		$this->load->view('templates/header');
		$this->load->view('partials/terminology');
		$this->load->view('templates/footer');
	}

	public function about() {
		$this->load->view('templates/header');
		$this->load->view('partials/about');
		$this->load->view('templates/footer');
	}

	public function contact() {
		$this->load->view('templates/header');
		$this->load->view('partials/contact');
		$this->load->view('templates/footer');
	}

	public function contribute() {
		$this->load->view('templates/header');
		$this->load->view('partials/contribute');
		$this->load->view('templates/footer');
	}
}

/* End of file homecontroller.php */
/* Location: ./application/controllers/homecontroller.php */