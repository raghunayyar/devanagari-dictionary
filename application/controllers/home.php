<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/* Majority of the widgets will go here */
	public function index() {

		$data['title'] = 'Home';
		$data['bodyclass'] = 'home-page';
		$data['pageclass'] = 'home';
		$this->load->view('templates/header', $data);

		$this->load->view('home/search', $data);
		$this->load->view('home/content');
		$this->load->view('templates/footer');
	}

	public function terminologies() {

		$data['title'] = 'Learn More';
		$data['pageclass'] = 'terminologies';
		$this->load->view('templates/header', $data);
		$this->load->view('partials/terminology');
		$this->load->view('templates/footer');
	}

	public function about() {

		$data['title'] = 'About Us';
		$data['pageclass'] = 'aboutus';
		$this->load->view('templates/header', $data);
		$this->load->view('partials/about');
		$this->load->view('templates/footer');
	}

	public function contact() {

		$data['title'] = 'Contact Us';
		$data['pageclass'] = 'contactus';
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
		$data['pageclass'] = 'contributors';
		$this->load->model("AdminModel");
		$data['listofcontributors'] = $this->AdminModel->getcontributors();

		$this->load->view('templates/header', $data);
		$this->load->view('partials/contribute',$data);
		$this->load->view('templates/footer');
	}

	public function credit() {
		
		$data['title'] = 'Credits';
		$data['pageclass'] = 'credits';
		$this->load->view('templates/header', $data);
		$this->load->view('partials/credit');
		$this->load->view('templates/footer');
	}

	public function search() {

		$data['title'] = 'Search Results';
		$data['pageclass'] = 'searchresults';
		$this->load->model("devanagari");

		$matchedentry['staticquery'] = $this->input->post('searchinput');

		/* DRY this out -> Bad Practice this is */
		
		if (!empty($this->input->post('language-1'))) {
			$matchedentry['language1'] = $this->input->post('language-1');
		}

		if (!empty($this->input->post('language-2'))) {
			$matchedentry['language2'] = $this->input->post('language-2');
		}

		if (!empty($this->input->post('language-3'))) {
			$matchedentry['language3'] = $this->input->post('language-3');
		}

		if (!empty($this->input->post('combination-1'))) {
			$matchedentry['combination1'] = $this->input->post('combination-1');
		}

		if (!empty($this->input->post('combination-2'))) {
			$matchedentry['combination2'] = $this->input->post('combination-2');
		}

		if (!empty($this->input->post('combination-3'))) {
			$matchedentry['combination3'] = $this->input->post('combination-3');
		}

		if (!empty($this->input->post('combination-4'))) {
			$matchedentry['combination4'] = $this->input->post('combination-3');
		}		

		$matchedentry['results'] = $this->devanagari->searchdevanagari($matchedentry);

		$this->load->view('templates/header', $data);
		$this->load->view('widgets/search');
		$this->load->view('search/results',$matchedentry);
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
		$data['pageclass'] = 'resultpage';
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