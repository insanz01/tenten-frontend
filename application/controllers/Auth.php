<?php

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Auth_Model', 'auth');
	}

	public function index() {
		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('admin/home');
		$this->load->view('template/footer');
	}

	public function login() {
		$data = $this->input->post();

		$hasil = $this->auth->login($data);
		if($hasil == 'sekolah') {
			redirect('Sekolah/App');
		} else if($hasil == 'admin') {
			redirect('Main/App');
		} else {
			$this->session->set_flashdata('bermasalah', True);

			redirect('Auth/index');
		}
	}

	public function cekAkun($username) {
		return $this->auth->cekAkun($username);
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('sekolah_id');

		redirect('Auth/index');
	}
}