<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_404 extends CI_Controller {
	
	public function index()
	{
		$this->load->view('404');
	}
}

/* End of file homecontroller.php */
/* Location: ./application/controllers/homecontroller.php */