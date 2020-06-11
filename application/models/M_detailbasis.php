<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detailbasis extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function readDetail(){
		$query=$this->db->get('tb_detail_basis_pengetahuan');
		return $query->result();
	}

	public function insertDetail(){
		$object=array(
			'id_detail' => $this->input->post('id_detail'),
			'id_basis_pengetahuan'=>$this->input->post('id_basis_pengetahuan'),
			'id_gejala'=>$this->input->post('id_gejala'),
			'bobot'=>$this->input->post('bobot')
		);
		$this->db->insert('tb_detail_basis_pengetahuan',$object);
	}

	public function UpdateById($id_detail)
	{
		$data = array
		(
			'id_detail' => $id_detail,
			'id_basis_pengetahuan'=>$this->input->post('id_basis_pengetahuan'),
			'id_gejala'=>$this->input->post('id_gejala'),
			'bobot'=>$this->input->post('bobot')
		);
		$this->db->where('id_detail',$id_detail);
		$this->db->update('tb_detail_basis_pengetahuan',$data);
	}

	public function delete($id_detail)
	{
		$this->db->where('id_detail', $id_detail);
		$this->db->delete('tb_detail_basis_pengetahuan');
	}

	public function ambilGejala($id_detail)
	{
		$query = $this->db->query("SELECT * FROM tb_gejala WHERE id_gejala NOT IN (SELECT id_gejala FROM tb_detail_basis_pengetahuan WHERE id_basis_pengetahuan='$id_detail')");
		return $query->result();
	}

	public function getDataBasisId($id_detail)
	{
		$query = $this->db->query("Select tb_basis_pengetahuan.id_basis_pengetahuan, tb_detail_basis_pengetahuan.*, tb_gejala.id_gejala, tb_gejala.gejala from tb_detail_basis_pengetahuan join tb_basis_pengetahuan on tb_detail_basis_pengetahuan.id_basis_pengetahuan = tb_basis_pengetahuan.id_basis_pengetahuan join tb_gejala on tb_gejala.id_gejala= tb_detail_basis_pengetahuan.id_gejala where tb_detail_basis_pengetahuan.id_basis_pengetahuan='$id_detail'");
		return $query->result();
	}

}
