<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

        $this->load->model('m_login');

        $this->load->library('session');

     
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi_login() {

			$A = $this->input->post('nrp');
			$B = $this->input->post('ukey');

			$where = array(
				'nrp' => $A,
				'ukey' => $B
				);

			$cek = $this->m_login->cek_login("manusia",$where)->num_rows();
			
				if($cek > 0){

				$data_session = array(
					'nrp' => $A,
					'status' => "login",
					
				); 

				

				$this->session->set_userdata($data_session);

				redirect ('../user/');

			} else{
				echo "Username dan password salah !";
			}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect ('../');
	}


}
