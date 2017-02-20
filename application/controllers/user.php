<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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

        $this->load->model('m_user');

        $this->load->library('session');
     
	}

	public function index() {
		if($this->session->userdata('status') != "login") {
			redirect ('../');
		}

		$data['user'] = $this->m_user->get_data_login()->result();
		$data['calon'] = $this->m_user->data_calon()->result();
		$this->load->view('home',$data);
	}

	public function hayo() {
		$this->session->sess_destroy();
		$this->load->view('pelanggaran');
	}

	public function sukses() {


		$A = $this->input->post('nrp');
		$B = $this->input->post('nama');
		$C = $this->input->post('kelas');
		$D = $this->input->post('ukey');
		$E = $this->input->post('codecalon');
		$F = date('Y-m-d H:i:s');

		$data = array(
			'nrp' => $A,
			'nama' => $B,
			'kelas' => $C,
			'ukey' => $D,
			'codecalon' => $E,
			'tanggal' =>$F
		);

		$this->m_user->input_data($data,'manusiaselesai');

		redirect('../Welcome/logout');
	}

}
