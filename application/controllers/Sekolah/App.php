<?php

class App extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('Admin_Model', 'admin');

		if(!$this->session->userdata('user_id')){
			redirect('Auth/index');
		}
	}

	public function index() {
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
	}

	public function sekolah($id = NULL) {

		$this->form_validation->set_rules('nama_sekolah', 'Nama_Sekolah', 'required');

		if($this->form_validation->run() == FALSE) {
			$id_sekolah = $this->session->userdata('sekolah_id');

			$data['id_sekolah'] = $id_sekolah;
			$data['sekolah'] = $this->admin->tampilkan_sekolah($id_sekolah);

			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('template/topbar');
			$this->load->view('admin/sekolah', $data);
			$this->load->view('template/footer');	
		} else {
			$data = $this->input->post();
			$data['total'] = $data['rombel'] + $data['guru_kelas'] + $data['guru_PAI'] + $data['guru_PJOK'] + $data['penjaga'];

			if($this->admin->perbaharui_sekolah($data, $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
			}

			redirect('Sekolah/App/sekolah');
		}

	}

	public function tambah_sekolah() {
		$data = $this->input->post();
		$data['id'] = NULL;

		$data['total'] = $data['rombel'] + $data['guru_kelas'] + $data['guru_PAI'] + $data['guru_PJOK'] + $data['penjaga'];

		if($this->admin->tambahkan_sekolah($data)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
		}

		redirect('Sekolah/App/sekolah');
	}

	public function ubah_sekolah() {
		
	}

	public function hapuskan_sekolah($id) {
		if($this->admin->hapus_sekolah($id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>');
		}

		redirect('Sekolah/App/sekolah');
	}

	public function kompetensi_guru($id) {
		$this->form_validation->set_rules('loyalitas', 'Loyalitas', 'required');
		$this->form_validation->set_rules('disiplin', 'Disiplin', 'required');
		$this->form_validation->set_rules('sertifikasi', 'Sertifikasi', 'required');

		if($this->form_validation->run() == FALSE) {
			$data['kompetensi'] = $this->admin->tampilkan_kompetensi($id);
			$data['id_guru'] = $id;

			if(!$data['kompetensi']) {
				$data['kompetensi']['loyalitas'] = 0;
				$data['kompetensi']['disiplin'] = 0;
				$data['kompetensi']['sertifikasi'] = 0;
			}

			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('template/topbar');
			$this->load->view('admin/kompetensi', $data);
			$this->load->view('template/footer');	
		} else {
			$data = $this->input->post();

			if($this->admin->perbaharui_kompetensi($data, $id)) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal disimpan</div>');
			}

			redirect('Sekolah/App/guru');
		}
	}

	public function api_tampilkan_sekolah($id) {
		$data = $this->admin->tampilkan_sekolah($id);

		echo json_encode($data);
	}

	public function guru() {
		$data['guru'] = $this->admin->tampilkan_guru();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/guru', $data);
		$this->load->view('template/footer');	
	}

	public function tambah_guru() {
		$data = $this->input->post();
		$data['sekolah_id'] = 1;

		if($this->admin->tambahkan_guru($data)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
		}

		redirect('Sekolah/App/guru');
	}

	public function perbaharui_guru() {
		$id = $this->input->post('id_guru');
		$data = [
			'NIP' => $this->input->post('NIP'),
			'nama_guru' => $this->input->post('nama_guru'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'jurusan_kuliah' => $this->input->post('jurusan_kuliah'),
			'alamat' => $this->input->post('alamat'),
			'jabatan' => $this->input->post('jabatan'),
			'gol_ruang' => $this->input->post('gol_ruang'),
			'tempat_tugas' => $this->input->post('tempat_tugas')
		];

		// var_dump($data); 
		// var_dump($id);
		// die;

		if($this->admin->perbaharui_guru($data, $id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal diperbaharui</div>');
		}

		redirect('Sekolah/App/guru');
	}

	public function hapuskan_guru($id) {
		if($this->admin->hapus_guru($id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>');
		}

		redirect('Sekolah/App/guru');
	}

	public function api_tampilkan_guru($id) {
		$data = $this->admin->tampilkan_guru($id);

		echo json_encode($data);
	}

	public function siswa() {
		$data['siswa'] = $this->admin->tampilkan_siswa();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/siswa', $data);
		$this->load->view('template/footer');
	}

	public function tambah_siswa() {
		$data = $this->input->post();

		if($this->admin->tambahkan_siswa($data)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disubmit</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal disubmit</div>');
		}

		redirect('Sekolah/App/siswa');
	}

	public function ubah_siswa() {
		$id = $this->input->post('id_siswa');

		$data = [
			'NIS' => $this->input->post('NIS'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'kelas' => $this->input->post('kelas'),
			'alamat' => $this->input->post('alamat')
		];

		if($this->admin->perbaharui_siswa($data, $id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disubmit</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal disubmit</div>');
		}

		redirect('Sekolah/App/siswa');
	}

	public function hapuskan_siswa($id) {
		if($this->admin->hapus_siswa($id)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>');
		}

		redirect('Sekolah/App/siswa');
	}

	public function api_tampilkan_siswa($id) {
		$data = $this->admin->tampilkan_siswa($id);

		echo json_encode($data);
	}

	// public function kompetensi($id) {
	// 	$data['id_guru'] = $id;

	// 	$this->load->view('template/header');
	// 	$this->load->view('template/sidebar');
	// 	$this->load->view('template/topbar');
	// 	$this->load->view('admin/kompetensi', $data);
	// 	$this->load->view('template/footer');
	// }

	// public function tambah_kompetensi() {
	// 	$data = $this->input->post();
	// 	$data['keterangan'] = '';

	// 	if($this->admin->tambahkan_kompetensi($data)) {
	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
	// 	} else {
	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambah</div>');
	// 	}

	// 	redirect('Sekolah/App/kompetensi');
	// }

	public function informasi() {
		$data['berita'] = $this->admin->beritahu_kabar();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/informasi', $data);
		$this->load->view('template/footer');
	}
}
