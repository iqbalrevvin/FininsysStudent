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
		$this->db->order_by('master_leger.semester', 'desc');
		$query = $this->db->get();
		//$execute = $query->result();
		return $query;
	}

	public function sumNilaiPengetahuan($idMasterLeger, $NIK){
 		$this->db->select_sum('nilai_pengetahuan');
 		$this->db->from('leger');
 		$this->db->join('leger_nilai', 'leger.idLeger = leger_nilai.idLeger', 'left');
 		$this->db->where('leger.idMaster_leger', $idMasterLeger);
 		$this->db->where('leger_nilai.NIK_pd', $NIK);
 		$query 		= $this->db->get();
 		$execute 	= $query->row();
 		return $execute;
 	}
 	public function sumNilaiKeterampilan($idMasterLeger, $NIK){
 		$this->db->select_sum('nilai_keterampilan');
 		$this->db->from('leger');
 		$this->db->join('leger_nilai', 'leger.idLeger = leger_nilai.idLeger', 'left');
 		$this->db->where('leger.idMaster_leger', $idMasterLeger);
 		$this->db->where('leger_nilai.NIK_pd', $NIK);
 		$query 		= $this->db->get();
 		$execute 	= $query->row();
 		return $execute;
 	}

	public function sumNilaiKelas($idMasterLeger){
 		$this->db->select_sum('nilai_pengetahuan');
 		$this->db->select_sum('nilai_keterampilan');
 		$this->db->from('leger');
 		$this->db->join('leger_nilai', 'leger.idLeger = leger_nilai.idLeger', 'left');
 		$this->db->where('leger.idMaster_leger', $idMasterLeger);
 		$this->db->group_by('NIk_pd');
 		$this->db->order_by('nilai_pengetahuan', 'desc');
 		$query = $this->db->get();
 		$execute = $query->result();
 		return $execute;
 	}

 	public function rankSystem($value, $arrayValue=NULL){
 		$query = $this->db->query("SELECT FIND_IN_SET($value, $arrayValue) AS rank");
 		$execute = $query->row();
 		return $execute;
 	}

}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */