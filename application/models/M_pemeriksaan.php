<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemeriksaan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function readPemeriksaan(){
		$query=$this->db->get('tb_pemeriksaan');
		return $query->result();
	}

	public function insertPemeriksaan(){
		$object=array(
			'id_pemeriksaan' => $this->input->post('id_basis_pengetahuan'),
			'id_penyakit'=>$this->input->post('id_penyakit')
			'hasil'=>$this->input->post('hasil'),
			'status'=>$this->input->post('status'),
			'tgl_pemeriksaan'=>$this->input->post('tgl_pemeriksaan'),
			'tgl_revisi'=>$this->input->post('tgl_revisi')
		);
		$this->db->insert('tb_pemeriksaan',$object);
	}
	
	public function getPemeriksaan($id_pemeriksaan){
		$this->db->where('id_pemeriksaan',$id_pemeriksaan);
		$query= $this->db->get('tb_pemeriksaan');
		return $query->result();
	}

	public function UpdateById($id_pemeriksaan)
	{
		$data = array
		(
			'id_pemeriksaan' => $id_pemeriksaan,
			'id_penyakit'=>$this->input->post('id_penyakit'),
			'hasil'=>$this->input->post('hasil'),
			'status'=>$this->input->post('status'),
			'tgl_pemeriksaan'=>$this->input->post('tgl_pemeriksaan'),
			'tgl_revisi'=>$this->input->post('tgl_revisi')
		);
		$this->db->where('id_pemeriksaan',$id_pemeriksaan);
		$this->db->update('tb_pemeriksaan',$data);
	}

	public function delete($id_pemeriksaan)
	{
		$this->db->where('id_pemeriksaan', $id_pemeriksaan);
		$this->db->delete('tb_pemeriksaan');
	}

	public function getPemeriksaanQueryObject(){
	  $query=$this->db->query('SELECT * FROM tb_pemeriksaan');
	  return $query->result();
	 }



}
