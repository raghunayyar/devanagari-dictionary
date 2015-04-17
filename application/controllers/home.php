<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/* Majority of the widgets will go here */
	public function index() {

		$data['title'] = 'Home';
		$data['bodyclass'] = 'home-page';
		$this->load->view('templates/header', $data);

		$this->load->view('home/search');
		$this->load->view('home/content');
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
		$this->load->model("AdminModel");

		$contributeentry['name'] = $this->input->post('name');
		$contributeentry['email'] = $this->input->post('email');
		$contributeentry['url'] = $this->input->post('url');
		$contributeentry['acceptance'] = $this->input->post('acceptance');
		$contributeentry['feedback'] = $this->input->post('feedbacktextarea');

		$contributeentry['results'] = $this->AdminModel->postcontribute($contributeentry);
		
	}

	public function contributors() {
		$data['title'] = 'Contributors';

		$this->load->model("AdminModel");
		$data['listofcontributors'] = $this->AdminModel->getcontributors();

		$this->load->view('templates/header', $data);
		$this->load->view('partials/contribute',$data);
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
		$matchedentry['allcomb'] = $this->input->post('allcomb');
		$matchedentry['twocomb'] = $this->input->post('twocomb');
		$matchedentry['threecomb'] = $this->input->post('threecomb');
		$matchedentry['fourcomb'] = $this->input->post('fourcomb');

		$matchedentry['results'] = $this->devanagari->searchdevanagari(
			$matchedentry);

		$this->load->view('templates/header', $data);
		$this->load->view('widgets/search');
		$this->load->view('partials/searchresults',$matchedentry);
		$this->load->view('templates/footer');

	}

	public function recentadditions() {
		
		$this->load->model("devanagari");
		$result = $this->devanagari->recentlyadded();
		return $result;
	}

	public function glyphoftheday() {

		$this->load->model("devanagari");
		$result = $this->devanagari->glyphofthedaymodel();
		return $result;
	}

	public function topglyphs() {

		$this->load->model("devanagari");
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