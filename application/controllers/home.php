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

	public function about() {

		$data['title'] = 'About Us';
		$data['pageclass'] = 'aboutus';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	public function contact() {

		$data['title'] = 'Contact Us';
		$data['pageclass'] = 'contactus';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/contact');
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
		$this->load->view('pages/credits');
		$this->load->view('templates/footer');
	}

	public function search() {

		$data['title'] = 'Search Results';
		$data['pageclass'] = 'searchresults';
		$this->load->model("devanagari");

		$matchedentry['inputquery'] = $this->input->post('searchinput');

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

	public function result() {

		$data['title'] = 'Conjunct';
		$data['pageclass'] = 'resultpage';
		$uri = $this->uri->segment(3, 1);

		$this->load->model("devanagari");
		$matchedentry['result'] = $this->devanagari->get($uri);
		$matchedentry['relatedsearchresult'] = $this->devanagari->relatedsearch($uri);
		$this->load->view('templates/header', $data);
		
		if (sizeof($matchedentry['result']) > 0) {
			$this->load->view('pages/result', $matchedentry);
		} else {
			$this->load->view('pages/404');
		}
		$this->load->view('templates/footer');
		
		
	
	}

}
/* End of file homecontroller.php */
/* Location: ./application/controllers/homecontroller.php */