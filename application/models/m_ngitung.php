<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class m_ngitung extends CI_Model{

	function MMB01() {
		$sql = $this->db->query('SELECT COUNT(codecalon) AS mmb01 FROM manusiaselesai WHERE codecalon = "MMB01"');
		return $sql;
	}

	function MMB02() {
		$sql = $this->db->query('SELECT COUNT(codecalon) AS mmb02 FROM manusiaselesai WHERE codecalon = "MMB02"');
		return $sql;
	}

	function MMB03() {
		$sql = $this->db->query('SELECT COUNT(codecalon) AS mmb03 FROM manusiaselesai WHERE codecalon = "MMB03"');
		return $sql;
	}
	
}

?>