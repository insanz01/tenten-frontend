<?php

class App extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('User_Model', 'user_m');
		$this->load->model('Admin_Model', 'admin');

		if(!$this->session->userdata('user_id')){
			redirect('Auth/index');
		}
	}

	public function index() {
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar');
		$this->load->view('template/admin/topbar');
		$this->load->view('pusat/dashboard');
		$this->load->view('template/admin/footer');
	}

	public function user() {
		$data['users'] = $this->user_m->tampilkan_user();

		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar');
		$this->load->view('template/admin/topbar');
		$this->load->view('pusat/user/index', $data);
		$this->load->view('template/admin/footer');	
	}

	public function tambah_user() {
		$data = $this->input->post();
		$data['id'] = NULL;
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		$data['aktif'] = 1;
		$data['created_at'] = date('Y-m-d', time());

		if($this->user_m->tambah_user($data)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan user</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan user</div>');
		}

		redirect('Main/App/user');
	}

	// menggunakan metode post
	public function ubah_user() {
		$id = $this->input->post('id');

		$data = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			// 'password' => $this->input->post('password'),
			'role' => $this->input->post('role')
		];

		if($this->user_m->ubah_user($data, $id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah user</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah user</div>');
		}

		redirect('App/user');
	}

	public function hapus_user($id) {
		if($this->user_m->hapus_user($id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus user</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus user</div>');
		}

		redirect('Main/App/user');
	}

	public function ubah_aktivasi($id) {
		if($this->user_m->aktivasi($id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah aktivasi</div>');
		}	else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah aktivasi</div>');
		}

		redirect('Main/App/user');
	}

	public function informasi() {
		$data['berita'] = $this->admin->beritahu_kabar();

		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar');
		$this->load->view('template/admin/topbar');
		$this->load->view('pusat/informasi/index', $data);
		$this->load->view('template/admin/footer');
	}

	public function simpan_kabar($menu) {
		$data = $this->input->post();

		if($this->admin->perbaharui_kabar($data, $menu)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal diperbaharui</div>');
		}

		redirect('Main/App/informasi');
	}

	public function data() {
		$this->form_validation->set_rules('nama_sekolah', 'Nama_Sekolah', 'required');
		$this->form_validation->set_rules('nama_kepsek', 'Nama_Kepsek', 'required');

		if($this->form_validation->run() == FALSE) {
			$data['sekolah'] = $this->admin->tampilkan_sekolah();
			$data['users'] = $this->user_m->tampilkan_user();

			$this->load->view('template/admin/header');
			$this->load->view('template/admin/sidebar');
			$this->load->view('template/admin/topbar');
			$this->load->view('pusat/data/index', $data);
			$this->load->view('template/admin/footer');
		} else {
			$data = $this->input->post();

			if($this->admin->tambahkan_sekolah($data)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan sekolah</div>');
			}	else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan sekolah</div>');
			}

			redirect('Main/App/data');
		}
	}

	public function rekap_data_guru() {
		$data['guru'] = $this->admin->tampilkan_kompetensi_dan_guru();

		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar');
		$this->load->view('template/admin/topbar');
		$this->load->view('pusat/rekap_data/index', $data);
		$this->load->view('template/admin/footer');
	}
}