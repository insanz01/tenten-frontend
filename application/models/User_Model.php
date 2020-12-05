<?php

class User_Model extends CI_Model {
	public function tambah_user($data) {
		$this->db->insert('user', $data);

		$user_id = $this->db->insert_id();

		if($data['role'] == 'sekolah') {
			$sekolah = [
				'id' => NULL,
				'id_user' => $user_id,
				'nama_sekolah' => '',
				'nama_kepsek' => '',
				'rombel' => 0,
				'guru_kelas' => 0,
				'guru_PAI' => 0,
				'guru_PJOK' => 0,
				'penjaga' => 0,
				'total' => 0,
				'kekurangan' => 0
			];

			return $this->db->insert('sekolah', $sekolah);
		}

		return $user_id != NULL;
	}

	public function tampilkan_user($id = NULL) {
		if($id) {
			return $this->db->get_where('user', ['id' => $id])->row_array();
		}

		return $this->db->get('user')->result_array();
	}

	public function hapus_user($id) {
		return $this->db->delete('user', ['id' => $id]);
	}

	public function aktivasi($id) {
		$user = $this->db->get_where('user', ['id' => $id])->row_array();

		$this->db->set('aktif', !$user['aktif']);
		$this->db->where('id', $id);
		$this->db->update('user');

		return $this->db->affected_rows();
	}
}