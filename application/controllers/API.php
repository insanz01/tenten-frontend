<?php

class API extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('User_Model', 'm_user');
	}

	public function get_data($table, $id) {
		$data = [];
		if($table == 'user') {
			$data = $this->m_user->tampilkan_user($id);
		}

		echo json_encode($data, JSON_PRETTY_PRINT);
	}
}

?>