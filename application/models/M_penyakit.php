<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penyakit extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}	

	public function readPenyakit(){
		$query=$this->db->get('tb_penyakit');
		return $query->result();
	}

	public function insertPenyakit(){
		$object=array
		('nama_penyakit'=>$this->input->post('nama_penyakit'),
		'definisi'=>$this->input->post('definisi'),
		'solusi'=>$this->input->post('solusi'));
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