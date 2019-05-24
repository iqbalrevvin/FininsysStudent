<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_m extends CI_Model {

	public function nilai($username){
		$this->db->select('*');
		$this->db->from('leger_nilai');
		$this->db->join('leger', 'leger_nilai.idLeger = leger.idLeger', 'left');
		$this->db->join('master_leger', 'leger.idMaster_leger = master_leger.idMaster_leger', 'left');
		$this->db->join('mata_pelajaran', 'leger.idMata_pelajaran = mata_pelajaran.idMata_pelajaran', 'left');
		$this->db->where('leger_nilai.NIK_pd', $username);
		$query = $this->db->get();
		$execute = $query->result();
		return $execute;
	}

}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */