<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katelapo extends CI_Controller {

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

	public function __construct() {
		parent::__construct();	

            $this->gallery_path = realpath(APPPATH . '../assets/poto');
            $this->gallery_path_url = 'http://localhost:8080/shit/assets/poto/';

	        $this->load->helper('url');
	        $this->load->helper('form');

	        $this->load->model('m_login');
			$this->load->model('m_ngitung');

	        $this->load->library('session');

	        $this->load->library('pagination');
     
	}

	public function index() {
		$this->load->view('login/loginadmin');
	}

	public function aksi_login() {

		$A = $this->input->post('username');
		$B = $this->input->post('password');

			$where = array(
				'username' => $A,
				'password' => $B
			);

		$cek = $this->m_login->cek_login_admin("admin",$where)->num_rows();
		
		if($cek > 0){

			$data_session = array(
				'username' => $A,
				'status' => "login",
			); 


		$this->session->set_userdata($data_session);

		redirect ('../katelapo/zxsaqw');

		} else {
			echo "ukey salah, silahkan hubungi panitia !";
		}
	}

	public function zxsaqw() {

		if($this->session->userdata('status') != "login") {
			redirect ('../katelapo');
		}

		$data['admin'] = $this->m_login->get_data_login_admin()->result();

		$this->load->view('admin/admin',$data);
	} 


	public function logout() {
		$this->session->sess_destroy();
		redirect('../katelapo/');
	}

	public function add() {

		if($this->session->userdata('status') != "login") {
			redirect ('../katelapo');
		}

		$data['admin'] = $this->m_login->get_data_login_admin()->result();

		$this->load->view('admin/add',$data);
	}

	public function addinput() {

				$config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('file_upload'))
                );

                $this->load->library('upload', $config);

                $this->upload->do_upload();

                $A = $this->input->post('nama');
                $B = $this->input->post('code');
                $C = $this->input->post('visimisi');
                $D = $this->input->post('foto');

                $this->db->insert('calon',array(
                        'nama' => $A,
                        'code' => $B,
                        'visimisi' => $C,
                        'foto' => $D,

                ));

                redirect ('../katelapo/zxsaqw');
	}

	public function calon($id=NULL) {

        $jumlah_data = $this->m_login->jumlah_data_calon();

        $config['base_url'] = base_url().'/katelapo/calon/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = '1';
 
        $config['full_tag_open']='<ul class="pagination">';
        $config['full_tag_close']='</ul>';

        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';

        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';

        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';

        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';

        $config['cur_tag_open']="<li class='active'><a href='#'>";
        $config['cur_tag_close']='</a></li>';

        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';

        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();

        $data['calon'] = $this->m_login->tampil_data_calon($config['per_page'],$id)->result();

		if($this->session->userdata('status') != "login") {
			redirect ('../katelapo');
		}

		$data['admin'] = $this->m_login->get_data_login_admin()->result();

		$this->load->view('admin/calon',$data);
	}  

	public function cekukey() {

		if($this->session->userdata('status') != "login") {
			redirect ('../katelapo');
		}

		$data['admin'] = $this->m_login->get_data_login_admin()->result();

		$this->load->view('admin/ukey',$data);
	}  

	public function hasil($hasil=NULL) {

		if($this->session->userdata('status') != "login") {
			redirect ('../katelapo');
		}

		$data['admin'] = $this->m_login->get_data_login_admin()->result();

		$keyword    =   $this->input->post('keyword');
     	$data['ok']    =   $this->m_login->search($keyword)->result();

     	$this->load->view('admin/hasil',$data);
	}

	public function quick() {

		if($this->session->userdata('status') != "login") {
			redirect ('../katelapo');
		}

		if($this->session->userdata('username') != "alphard") {
			redirect ('../katelapo');
		}

		$data['sudah'] = $this->db->count_all('manusiaselesai');
		$data['belum'] = $this->db->count_all('manusia');
		
		$data['MMB01'] = $this->m_ngitung->MMB01()->result()[0]->mmb01;
		$data['MMB02'] = $this->m_ngitung->MMB02()->result()[0]->mmb02;
		$data['MMB03'] = $this->m_ngitung->mmb03()->result()[0]->mmb03;

		$data['admin'] = $this->m_login->get_data_login_admin()->result();

		$this->load->view('admin/quick',$data);

	}

	public function pemilih() {

		if($this->session->userdata('status') != "login") {
			redirect ('../katelapo');
		}

		if($this->session->userdata('username') != "alphard") {
			redirect ('../katelapo');
		}

		$data['sudah'] = $this->db->count_all('manusiaselesai');
		$data['belum'] = $this->db->count_all('manusia');

		$data['admin'] = $this->m_login->get_data_login_admin()->result();

		$this->load->view('admin/pemilih',$data);

	}

}
