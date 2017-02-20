<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class m_login extends CI_Model{

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function cek_login_admin($table,$where){		
		return $this->db->get_where($table,$where);
	}		

	function get_data_login_admin(){		
		$this->db->select('*');
    	$this->db->from('admin');
   		$this->db->where('username',$this->session->userdata("username")); // variable
   		return $this->db->get();
	}

	function get_data_login_admin_super(){		
		$this->db->select('*');
    	$this->db->from('admin');
   		$this->db->where('username',$this->session->userdata("username")); // variable
   		return $this->db->get();
	}

    function search($keyword) {
        $this->db->select('*');
    	$this->db->from('manusia');
   		$this->db->where('nrp',$keyword);
   		return  $this->db->get('');
   }

	function jumlah_data_calon(){
		return $this->db->get('calon')->num_rows();
	}

	function tampil_data_calon($limit,$id){		
		$this->db->select('*');
    	$this->db->from('calon');
   		return $this->db->get('',$limit,$id);
	}
       

}

?>