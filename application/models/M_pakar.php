<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pakar extends CI_Model {

	// public function countPenyakit()
	// {
	// 	$query = $this->db->query("SELECT COUNT(id_penyakit) AS total FROM tb_penyakit");
	// 	return $query->result();
	// }

	// public function countBasis()
	// {
	// 	$query = $this->db->query("SELECT COUNT(id_basis_pengetahuan) AS total FROM tb_basis_pengetahuan");
	// 	return $query->result();
	// }

	// public function countPemeriksaan()
	// {
	// 	$query = $this->db->query("SELECT COUNT(id_pemeriksaan) AS total FROM tb_pemeriksaan");
	// 	return $query->result();
	// }

	function getDataPenyakit()
	{
		$query = $this->db->query("Select * from tb_penyakit");
		return $query->result();
	}

	function getDataBasis()
	{
		$query = $this->db->query("SELECT tb_penyakit.id_penyakit, tb_penyakit.nama_penyakit, tb_basis_pengetahuan.* FROM tb_basis_pengetahuan JOIN tb_penyakit ON tb_basis_pengetahuan.id_penyakit = tb_penyakit.id_penyakit");
		return $query->result();
	}

	function getDataBasisId($id)
	{
		$query = $this->db->query("Select tb_basis_pengetahuan.id_basis_pengetahuan, tb_detail_basis_pengetahuan.*, tb_gejala.id_gejala, tb_gejala.gejala from tb_detail_basis_pengetahuan join tb_basis_pengetahuan on tb_detail_basis_pengetahuan.id_basis_pengetahuan = tb_basis_pengetahuan.id_basis_pengetahuan join tb_gejala on tb_gejala.id_gejala=tb_detail_basis_pengetahuan.id_gejala where tb_detail_basis_pengetahuan.id_basis_pengetahuan='$id'");
		return $query->result();
	}

	//fungsi untuk menampilkan pemeriksaan revisi
	public function getDataPemeriksaan()
	{
		$query = $this->db->query("SELECT tb_pemeriksaan.*, tb_penyakit.id_penyakit, tb_penyakit.nama_penyakit, tb_pengelola.id_pengelola, tb_pengelola.nama FROM tb_pemeriksaan INNER JOIN tb_penyakit ON tb_pemeriksaan.id_penyakit = tb_penyakit.id_penyakit LEFT JOIN tb_pengelola ON tb_pemeriksaan.id_pengelola = tb_pengelola.id_pengelola ORDER BY id_pemeriksaan DESC");
		return $query->result();
	}

	public function getDataPemeriksaanRevisi()
	{
		$query = $this->db->query("SELECT tb_pemeriksaan.*, tb_penyakit.id_penyakit, tb_penyakit.nama_penyakit FROM tb_pemeriksaan INNER JOIN tb_penyakit ON tb_pemeriksaan.id_penyakit = tb_penyakit.id_penyakit WHERE tb_pemeriksaan.hasil < 50 AND tb_pemeriksaan.status = 2 ORDER BY id_pemeriksaan DESC");
		return $query->result();
	}

	//fungsi untuk menampilkan detail pemeriksaan revisi
	function getDataPemeriksaanId($id)
	{
		$query = $this->db->query("Select tb_pemeriksaan.id_pemeriksaan, tb_detail_pemeriksaan.*, tb_gejala.id_gejala,tb_gejala.gejala from tb_detail_pemeriksaan join tb_pemeriksaan on tb_detail_pemeriksaan.id_pemeriksaan = tb_pemeriksaan.id_pemeriksaan join tb_gejala on tb_gejala.id_gejala=tb_detail_pemeriksaan.id_gejala where tb_detail_pemeriksaan.id_pemeriksaan='$id'");
		return $query->result();
	}

	public function ambilPenyakit()
	{
		$query = $this->db->query("SELECT * FROM tb_penyakit");
		return $query->result();
	}

	
	function getdataID($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function updatePemeriksaan($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	//klik button simpan
	public function addKeBasis($output, $id_gejala)
	{
		$nextId = '';
		$query = $this->db->select('id_basis_pengetahuan')
                      ->from('tb_basis_pengetahuan')
                      ->get();
		$row = $query->last_row();
		if($row){
			$idPostfix = (int)substr($row->id_basis_pengetahuan,1)+1;
			$nextId = 'BP'.STR_PAD((string)$idPostfix,3,"0",STR_PAD_LEFT);
		}
		else{
			$nextId = 'BP01';
		} // For the first time

		$object=array
		(
			'id_basis_pengetahuan' => $nextId,
			'id_penyakit'=>$this->input->post('id_penyakit')
		);
		$this->db->insert('tb_basis_pengetahuan',$object);

		$id_basis_pengetahuan = $this->db->insert_id();

		$result = array();
		foreach ($output as $key => $value) {
			$result[] = array(
				'id_basis_pengetahuan' => $id_basis_pengetahuan,
				'id_gejala' => $_POST['id_gejala'][$key],
				'bobot' => $_POST['bobot'][$key]
			);
		}
		$this->db->insert_batch('tb_detail_basis_pengetahuan', $result);
	}
}