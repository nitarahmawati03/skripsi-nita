<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gejala extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function readGejala(){
		$query=$this->db->get('tb_gejala');
		return $query->result();
	}

	public function insertGejala(){
		$nextId = '';
		$query = $this->db->select('id_gejala')
                      ->from('tb_gejala')
                      ->get();
		$row = $query->last_row();
		if($row){
			$idPostfix = (int)substr($row->id_gejala,1)+1;
			$nextId = 'G'.STR_PAD((string)$idPostfix,2,"0",STR_PAD_LEFT);
		}
		else{
			$nextId = 'G01';
		} // For the first time
			$object=array
			(
				'id_gejala' => $nextId,
				'gejala'=>$this->input->post('gejala'),
				'bobot'=>$this->input->post('bobot'),
			);
		$this->db->insert('tb_gejala',$object);
	}

	public function getGejala($id_gejala){
		$this->db->where('id_gejala',$id_gejala);
		$query= $this->db->get('tb_gejala');
		return $query->result();
	}

	public function UpdateById($id_gejala)
	{
		$data = array
		(
			'gejala' =>$this->input->post('gejala'),
			'bobot' =>$this->input->post('bobot')
		);
		$this->db->where('id_gejala',$id_gejala);
		$this->db->update('tb_gejala',$data);
	}

	public function delete($id_gejala)
	{
		$this->db->where('id_gejala', $id_gejala);
		$this->db->delete('tb_gejala');
	}

	public function getGejalaQueryObject(){
	  $query=$this->db->query('SELECT * FROM tb_gejala');
	  return $query->result();
	 }

}