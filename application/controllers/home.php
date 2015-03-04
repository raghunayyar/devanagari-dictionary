<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/* Majority of the widgets will go here */
	public function index() {

		$data['title'] = 'Home'; 
		$this->load->view('templates/header', $data);
		$this->load->view('widgets/search');
		$this->load->view('widgets/widget1');
		$this->load->view('widgets/widget2');
		$this->load->view('widgets/widget3');
		$this->load->view('widgets/widget6');
		$this->load->view('templates/footer');
	}

	public function terminologies() {

		$data['title'] = 'Learn More'; 
		$this->load->view('templates/header', $data);
		$this->load->view('partials/terminology');
		$this->load->view('templates/footer');
	}

	public function about() {

		$data['title'] = 'About Us'; 
		$this->load->view('templates/header', $data);
		$this->load->view('partials/about');
		$this->load->view('templates/footer');
	}

	public function contact() {

		$data['title'] = 'Contact Us';
		$this->load->view('templates/header', $data);
		$this->load->view('partials/contact');
		$this->load->view('templates/footer');
	}

	public function contribute() {

		$data['title'] = 'Contribute'; 
		$this->load->view('templates/header', $data);
		$this->load->view('partials/contribute');
		$this->load->view('templates/footer');
	}

	public function credit() {
		
		$data['title'] = 'Credits'; 
		$this->load->view('templates/header', $data);
		$this->load->view('partials/credit');
		$this->load->view('templates/footer');
	}

	public function search() {

		$data['title'] = 'Search Results';
		$this->load->model("devanagari");

		$matchedentry['staticquery'] = $this->input->post('searchinput');

		$matchedentry['results'] = $this->devanagari->searchdevanagari($matchedentry['staticquery']);

		$this->load->view('templates/header', $data);
		$this->load->view('widgets/search');
		$this->load->view('partials/searchresults',$matchedentry);
		$this->load->view('templates/footer');

	}

	public function result() {

		$data['title'] = 'Conjunct';

		$uri = $this->uri->segment(3, 1);

		$this->load->model("devanagari");
		$matchedentry['result'] = $this->devanagari->get($uri);

		$this->load->view('templates/header', $data);
		$this->load->view('partials/conjunct', $matchedentry);
		$this->load->view('templates/footer');
	
	}

}

/* End of file homecontroller.php */
/* Location: ./application/controllers/homecontroller.php */