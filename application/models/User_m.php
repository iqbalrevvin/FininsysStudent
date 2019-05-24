<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function user($username){
		/*$query 		= $this->db->get_where('peserta_didik',['NIK_pd' => $username]);*/
		$this->db->select('*');
		$this->db->from('peserta_didik');
		$this->db->join('detail_peserta_didik', 'peserta_didik.NIK_pd = detail_peserta_didik.NIK_pd', 'left');
		$this->db->join('ortu_peserta_didik', 'peserta_didik.NIK_pd = ortu_peserta_didik.NIK_pd', 'left');
		$this->db->join('kelas', 'detail_peserta_didik.idKelas = kelas.idKelas', 'left');
		$this->db->join('program_studi', 'kelas.idProdi = program_studi.idProdi', 'left');
		$this->db->join('provinsi', 'peserta_didik.idProvinsi = provinsi.id_prov', 'left');
		$this->db->join('kabupaten', 'peserta_didik.idKabupaten = kabupaten.id_kab', 'left');
		$this->db->join('kecamatan', 'peserta_didik.idKecamatan = kecamatan.id_kec', 'left');
		$this->db->join('kelurahan', 'peserta_didik.idKelurahan = kelurahan.id_kel', 'left');
		$this->db->where('peserta_didik.NIK_pd', $username);
		$query = $this->db->get();
		$execute 	= $query->row();
		return $execute;
	}

}

/* End of file User_m.php */
/* Location: ./application/models/User_m.php */