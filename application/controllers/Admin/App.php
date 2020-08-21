<?php

class App extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/spp');
		$this->load->view('template/footer');
	}

	public function pengeluaran() {
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/pengeluaran');
		$this->load->view('template/footer');	
	}

	public function sekolah() {
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/sekolah');
		$this->load->view('template/footer');	
	}

	public function guru() {
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/guru');
		$this->load->view('template/footer');	
	}
}