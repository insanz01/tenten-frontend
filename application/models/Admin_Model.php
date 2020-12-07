<?php

class Admin_Model extends CI_Model {
	public function tampilkan_sekolah($id = NULL) {
		if($id) {
			return $this->db->get_where('sekolah', ['id' => $id])->row_array();
		}

		return $this->db->get('sekolah')->result_array();
	}
 
	public function tambahkan_sekolah($data) {
		return $this->db->insert('sekolah', $data);
	}

	public function perbaharui_sekolah($data, $id) {
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('sekolah');

		return $this->db->affected_rows();
	}

	public function hapus_sekolah($id) {
		return $this->db->delete('sekolah', ['id' => $id]);
	}

	// ====================================================
	// URUSAN GURU
	// ====================================================

	public function tampilkan_guru($id_sekolah, $id = NULL) {
		if($id) {
			return $this->db->get_where('guru', ['sekolah_id' => $id_sekolah, 'id' => $id])->row_array();
		}

		return $this->db->get_where('guru', ['sekolah_id' => $id_sekolah])->result_array();
	}

	public function tambahkan_guru($data) {
		$this->db->insert('guru', $data);
		$id_guru = $this->db->insert_id();

		$kompetensi = [
			'id' => NULL,
			'loyalitas' => 0,
			'disiplin' => 0,
			'sertifikasi' => 0,
			'id_guru' => $id_guru
		];

		return $this->db->insert('kompetensi', $kompetensi);
	}

	public function perbaharui_guru($data, $id) {
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('guru');

		return $this->db->affected_rows();
	}

	public function hapus_guru($id) {
		return $this->db->delete('guru', ['id' => $id]);
	}

	// ====================================================
	// URUSAN SISWA
	// ====================================================

	public function tampilkan_siswa($id = NULL) {
		if($id) {
			return $this->db->get_where('siswa', ['id' => $id])->row_array();
		}

		return $this->db->get('siswa')->result_array();
	}

	public function tambahkan_siswa($data) {
		return $this->db->insert('siswa', $data);
	}

	public function perbaharui_siswa($data, $id) {
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('siswa');

		return $this->db->affected_rows();
	}

	public function hapus_siswa($id) {
		return $this->db->delete('siswa', ['id' => $id]);
	}

	// ====================================================
	// URUSAN KRITERIA
	// ====================================================

	public function tampilkan_kompetensi($id_guru) {
		return $this->db->get_where('kompetensi', ['id_guru' => $id_guru])->row_array();
	}

	public function tambahkan_kompetensi($data) {
		return $this->db->insert('kompetensi', $data);
	}

	public function perbaharui_kompetensi($data, $id) {
		$this->db->set($data);
		$this->db->where('id_guru', $id);
		$this->db->update('kompetensi');

		return $this->db->affected_rows();
	}

	public function tampilkan_kompetensi_dan_guru() {
		$query = "SELECT kompetensi.loyalitas, kompetensi.disiplin, kompetensi.sertifikasi, guru.nama_guru, guru.NIP, guru.jurusan_kuliah as pendidikan, sekolah.nama_sekolah FROM kompetensi JOIN guru ON kompetensi.id_guru = guru.id JOIN sekolah ON guru.sekolah_id = sekolah.id";

		return $this->db->query($query)->result_array();
	}

	public function beritahu_kabar() {
		return $this->db->get_where('kabar', ['id' => 1])->row_array();
	}

	public function perbaharui_kabar($data, $menu) {
		if($menu == 'informasi')
			$data['updated_informasi'] = date('Y-m-d', time());
		else 
			$data['updated_pemberitahuan'] = date('Y-m-d', time());
		
		$this->db->set($menu, $data[$menu]);
		$this->db->where('id', 1);
		$this->db->update('kabar');

		return $this->db->affected_rows();
	}
} 