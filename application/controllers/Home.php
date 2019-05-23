<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->helper('tglIndo_helper');
		$this->load->helper('semester_helper');		
		$this->load->helper('grade_helper');
		//$this->load->model('User_m');
	}

	public function index(){
		$data['judul'] 		= 'Beranda';
		$data['subJudul'] 	= 'Halaman Beranda';
		$username 			= $username = $this->session->userdata('username');
		$data['user'] 		= $this->User_m->user($username);
		$template      		= 'admin_template';
		$view          		= 'home';
        $this->outputview->outputAdmin($view, $template, $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */