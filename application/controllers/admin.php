<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function signin () {

		$data['title'] = 'Admin Panel';
		$this->load->model('AdminModel');
		$query = $this->AdminModel->initsession();
		
		if (!empty($query[0]->user_data)) {
			$this->load->view('templates/header', $data);
			$this->load->view('admin/dashboard');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header', $data);
			$this->load->view('admin/signin');
			$this->load->view('templates/footer');
		}
	}

	public function validate() {
		$this->load->model('AdminModel');
		$query = $this->AdminModel->validate();
		if ($query) {
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
				);

			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		} else {
			$this->signin();
		}
	}

	public function dashboard () {
		$data['title'] = 'Dashboard';
		$this->load->model('AdminModel');
		$query = $this->AdminModel->initsession();

		if (!empty($query[0]->user_data)) {
			$this->load->view('templates/header', $data);
			$this->load->view('admin/dashboard');
			$this->load->view('templates/footer');
		} else {
			redirect('admin/signin');
		}
	}

	public function signout() {
		$this->session->sess_destroy();
		redirect('admin/signin');
	}

}