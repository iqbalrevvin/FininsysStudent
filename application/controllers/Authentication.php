<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->model('Login_m');
	}
	public function index(){
		if($this->session->userdata('username') == ""){
			redirect('Authentication/Login');
		}else{
			redirect('home');
		}
	}

	public function login(){
		$data['redirect'] = site_url('home');
		$view             = 'auth/login';
		$template         = 'auth_template';
		$this->outputview->output_front($view, $template, $data);
	}

	public function loginAction(){
		$i 				= $this->input;
		$username 		= $i->post('username');
		$password 		= $i->post('password');
		//CHECK PARAMETER LOGIN KE DATABASE
		$checkLogin 	= $this->Login_m->login($username, $password);
		//JIKA RECORD TERSEDIA MAKA CREATE SESSION DAN REDIRECT KE HALAMAN DASBOR
		if(count($checkLogin) == 1){
			$this->session->set_userdata('username', $username);
			//$this->session->set_userdata('akses_level', $check_login->akses_level);
			/*$this->session->set_userdata('NIK', $checkLogin->NIK_pd);
			$this->session->set_userdata('nama', $checkLogin->nama_pd);*/
			$callback = [
		    	'status' 	=> 'sukses',
		    	'pesan' 	=> '' 
			];
		}else{
			//JIKA USERNAME DAN PASSWORD TIDAK DITEMUKAN MAKA AKAN TERJADI ERROR
			$callback = [
		    	'status' 	=> 'gagal',
		    	'pesan' 	=> '' 
			];
		}
		echo json_encode($callback);
	}

	public function logout(){
		$this->session->unset_userdata('username');
		//$this->session->sess_destroy();
		$this->session->set_flashdata('sukses', 'Anda Berhasil Logout, <br>Terimakasih Telah Menggunakan Layanan Kami.');
		redirect(base_url('Authentication/Login'),'refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */