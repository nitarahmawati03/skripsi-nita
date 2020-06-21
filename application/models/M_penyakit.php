<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penyakit extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function countPenyakit()
	{
		$query = $this->db->query("SELECT COUNT(id_penyakit) AS total FROM tb_penyakit");
		return $query->result();
	}

	public function countGejala()
	{
		$query = $this->db->query("SELECT COUNT(id_gejala) AS total FROM tb_gejala");
		return $query->result();
	}

	public function countPemeriksaan()
	{
		$query = $this->db->query("SELECT COUNT(id_pemeriksaan) AS total FROM tb_pemeriksaan");
		return $query->result();
	}

	public function countBasis()
	{
		$query = $this->db->query("SELECT COUNT(id_basis_pengetahuan) AS total FROM tb_basis_pengetahuan");
		return $query->result();
	}

	public function readPenyakit(){
		$query=$this->db->get('tb_penyakit');
		return $query->result();
	}

	public function insertPenyakit(){
		$nextId = '';
		$query = $this->db->select('id_penyakit')
                      ->from('tb_penyakit')
                      ->get();
		$row = $query->last_row();
		if($row){
			$idPostfix = (int)substr($row->id_penyakit,1)+1;
			$nextId = 'P'.STR_PAD((string)$idPostfix,2,"0",STR_PAD_LEFT);
		}
		else{
			$nextId = 'P01';
		} // For the first time
			$object=array
			(
				'id_penyakit' => $nextId,
				'nama_penyakit'=>$this->input->post('nama_penyakit'),
				'definisi'=>$this->input->post('definisi'),
				'solusi'=>$this->input->post('solusi')
			);
		$this->db->insert('tb_penyakit',$object);
	}

	public function getPenyakit($id_penyakit){
		$this->db->where('id_penyakit',$id_penyakit);
		$query= $this->db->get('tb_penyakit');
		return $query->result();
	}

	public function UpdateById($id_penyakit)
	{
		$data = array
		(
			'nama_penyakit' =>$this->input->post('nama_penyakit'),
			'definisi' =>$this->input->post('definisi'),
			'solusi' =>$this->input->post('solusi')
		);
		$this->db->where('id_penyakit',$id_penyakit);
		$this->db->update('tb_penyakit',$data);
	}

	public function delete($id_penyakit)
	{
		$this->db->where('id_penyakit', $id_penyakit);
		$this->db->delete('tb_penyakit');
	}

	public function getPenyakitQueryObject(){
	  $query=$this->db->query('SELECT * FROM tb_penyakit');
	  return $query->result();
	 }



}
