<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class m_user extends CI_Model{

	function get_data_login() {

		$this->db->select('*');
    	$this->db->from('manusia');
   		$this->db->where('nrp',$this->session->userdata("nrp")); // variable
   		return $this->db->get('');
	}

	function data_calon() {

		$this->db->select('*');
    	$this->db->from('calon');
   		return $this->db->get('');
	}		

	function input_data($data,$vote) {

		$this->db->insert($vote,$data);
	}

}

?>