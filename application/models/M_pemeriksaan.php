<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemeriksaan extends CI_Model {

	public function getDataPemeriksaan()
	{
		$query = $this->db->query("SELECT tb_pemeriksaan.*, tb_penyakit.id_penyakit, tb_penyakit.nama_penyakit, tb_pengelola.id_pengelola, tb_pengelola.nama FROM tb_pemeriksaan INNER JOIN tb_penyakit ON tb_pemeriksaan.id_penyakit = tb_penyakit.id_penyakit LEFT JOIN tb_pengelola ON tb_pemeriksaan.id_pengelola = tb_pengelola.id_pengelola ORDER BY id_pemeriksaan DESC");
		return $query->result();
	}

	public function getDataPemeriksaanId($id)
	{
		$query = $this->db->query("Select tb_pemeriksaan.id_pemeriksaan, tb_detail_pemeriksaan.*, tb_gejala.id_gejala,tb_gejala.gejala from tb_detail_pemeriksaan join tb_pemeriksaan on tb_detail_pemeriksaan.id_pemeriksaan = tb_pemeriksaan.id_pemeriksaan join tb_gejala on tb_gejala.id_gejala=tb_detail_pemeriksaan.id_gejala where tb_detail_pemeriksaan.id_pemeriksaan='$id'");
		return $query->result();
	}

	// public function __construct()
	// {
	// 	parent::__construct();
	// }

	// public function readPemeriksaan(){
	// 	$query=$this->db->get('tb_pemeriksaan');
	// 	return $query->result();
	// }

	// public function insertPemeriksaan(){
	// 	$object=array(
	// 		'id_pemeriksaan' => $this->input->post('id_basis_pengetahuan'),
	// 		'id_penyakit'=>$this->input->post('id_penyakit'),
	// 		'hasil'=>$this->input->post('hasil'),
	// 		'status'=>$this->input->post('status'),
	// 		'tgl_pemeriksaan'=>$this->input->post('tgl_pemeriksaan'),
	// 		'tgl_revisi'=>$this->input->post('tgl_revisi')
	// 	);
	// 	$this->db->insert('tb_pemeriksaan',$object);
	// }

	// public function joinPemeriksaan(){
	//  $query = $this->db 
	// 		->select('*')
	// 		->join('tb_penyakit', 'tb_pemeriksaan.id_penyakit = tb_penyakit.id_penyakit')
	// 		->get('tb_pemeriksaan');
	// return $query->result();
	// }
	
	// public function getPemeriksaan($id_pemeriksaan){
	// 	$this->db->where('id_pemeriksaan',$id_pemeriksaan);
	// 	$query= $this->db->get('tb_pemeriksaan');
	// 	return $query->result();
	// }

	// public function UpdateById($id_pemeriksaan)
	// {
	// 	$data = array
	// 	(
	// 		'id_pemeriksaan' => $id_pemeriksaan,
	// 		'id_penyakit'=>$this->input->post('id_penyakit'),
	// 		'hasil'=>$this->input->post('hasil'),
	// 		'status'=>$this->input->post('status'),
	// 		'tgl_pemeriksaan'=>$this->input->post('tgl_pemeriksaan'),
	// 		'tgl_revisi'=>$this->input->post('tgl_revisi')
	// 	);
	// 	$this->db->where('id_pemeriksaan',$id_pemeriksaan);
	// 	$this->db->update('tb_pemeriksaan',$data);
	// }

	// public function delete($id_pemeriksaan)
	// {
	// 	$this->db->where('id_pemeriksaan', $id_pemeriksaan);
	// 	$this->db->delete('tb_pemeriksaan');
	// }

	// public function getPemeriksaanQueryObject(){
	//   $query=$this->db->query('SELECT * FROM tb_pemeriksaan');
	//   return $query->result();
	//  }



}
