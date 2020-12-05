<?php

class Auth_Model extends CI_Model {
	public function login($data) {
		$user = $this->db->get_where('user', ['username' => $data['username']])->row_array();

		if($user) {
			if(password_verify($data['password'], $user['password'])) {
				$this->session->set_userdata('user_id', $user['id']);
				$this->session->set_userdata('nama', $user['nama']);

				$role = $user['role'];

				if($role == 'sekolah') {
					$admin_sekolah = $this->db->get_where('sekolah', ['id_user' => $user['id']])->row_array();

					$this->session->set_userdata('sekolah_id', $admin_sekolah['id']);
					
					return 'sekolah';
				}

				return 'admin';
			} else {
				return false;
			}
		}
		
	}

	public function cekAkun($username) {
		return $this->db->get_where('user', ['username' => $username])->row_array();
	}
}