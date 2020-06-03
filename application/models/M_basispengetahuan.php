<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_basispengetahuan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function readBasis(){
		$query=$this->db->get('tb_basis_pengetahuan');
		return $query->result();
	}

	public function insertBasis(){
		$object=array(
			'id_basis_pengetahuan' => $this->input->post('id_basis_pengetahuan'),
			'id_penyakit'=>$this->input->post('id_penyakit')
		);
		$this->db->insert('tb_basis_pengetahuan',$object);
	}
	
	public function getBasis($id_basis_pengetahuan){
		$this->db->where('id_basis_pengetahuan',$id_basis_pengetahuan);
		$query= $this->db->get('tb_basis_pengetahuan');
		return $query->result();
	}

	public function UpdateById($id_basis_pengetahuan)
	{
		$data = array
		(
			'id_basis_pengetahuan' => $id_basis_pengetahuan,
			'id_penyakit'=>$this->input->post('id_penyakit')
		);
		$this->db->where('id_basis_pengetahuan',$id_basis_pengetahuan);
		$this->db->update('tb_basis_pengetahuan',$data);
	}

	public function delete($id_basis_pengetahuan)
	{
		$this->db->where('id_basis_pengetahuan', $id_basis_pengetahuan);
		$this->db->delete('tb_basis_pengetahuan');
	}

	public function getBasisQueryObject(){
	  $query=$this->db->query('SELECT * FROM tb_basis_pengetahuan');
	  return $query->result();
	 }



}
