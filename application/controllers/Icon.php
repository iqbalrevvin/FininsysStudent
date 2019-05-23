<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icon extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('OutputView');
	}

	public function index(){
		$data['judul'] 		= 'List Icon';
		$data['subJudul'] 	= 'Halaman List Icon';
		$template 			= 'admin_template';
		$view 				= 'icon';
		$this->outputview->outputAdmin($view, $template, $data);
	}

}

/* End of file Icon.php */
/* Location: ./application/controllers/Icon.php */

?>