<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();	

        $this->load->helper('url');

        $this->load->model('m_ngitung');

        $this->load->library('session');
   
	}

	public function index(){
		
		$data['sudah'] = $this->db->count_all('manusiaselesai');
		$data['belum'] = $this->db->count_all('manusia');
		
		$data['MMB01'] = $this->m_ngitung->MMB01()->result()[0]->mmb01;
		$data['MMB02'] = $this->m_ngitung->MMB02()->result()[0]->mmb02;
		$data['MMB03'] = $this->m_ngitung->MMB03()->result()[0]->mmb03;

		$this->load->view('livereport',$data);
	}


}
