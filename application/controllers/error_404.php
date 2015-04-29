<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_404 extends CI_Controller {
	
	public function index()
	{	
		$data['title'] = 'Error 404';
		$data['pageclass'] = 'error404';
		$this->load->view('templates/header', $data);
		$this->load->view('404');
		$this->load->view('templates/footer');
	}
}

/* End of file homecontroller.php */
/* Location: ./application/controllers/homecontroller.php */