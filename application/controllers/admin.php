<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function signin () {
		$data['title'] = 'Admin Panel'; 
		$this->load->view('templates/header', $data);
		$this->load->view('admin/signin');
		$this->load->view('templates/footer');
	}

	public function dashboard () {
		$data['title'] = 'Dashboard'; 
		$this->load->view('templates/header', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer');
	}

	public function signout () {
		$data['title'] = 'Sign out'; 
		$this->load->view('templates/header', $data);
		$this->load->view('admin/signout');
		$this->load->view('templates/footer');
	}

}