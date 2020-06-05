<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perhitungan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insertPemeriksaan($data){
		$this->db->insert('tb_pemeriksaan',$data);
	}

	public function insertDetailPemeriksaan($data){
		$this->db->insert('tb_detail_pemeriksaan',$data);
	}

	public function getPerhitunganQueryObject(){
	  $query=$this->db->query('SELECT * FROM tb_detail_basis_pengetahuan');
	  return $query->result();
	 }

	public function joinPerhitungan(){
	 $query = $this->db //script untuk join tabel agar dapat berelasi dengan tabel penyakit sehingga muncul nama penyakitnya
			->select('*')
			->join('tb_penyakit', 'tb_basis_pengetahuan.id_penyakit = tb_penyakit.id_penyakit')
			->get('tb_basis_pengetahuan');
	return $query->result();
	}

}
