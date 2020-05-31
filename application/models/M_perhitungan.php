<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perhitungan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function readPerhitungan(){
		$kasus = $this->db->get('tb_detail_basis_pengetahuan');
		return $kasus->result(); //mengambil data gejala setiap kasus
	}



}
