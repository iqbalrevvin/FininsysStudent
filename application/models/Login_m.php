<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function login($username, $password){
		$this->db->select('*');
		$this->db->from('peserta_didik');
		$this->db->where(
					array('NIK_pd' => $username,
						'nisn' => $password
					));
		//$this->db->order_by('idUser', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */