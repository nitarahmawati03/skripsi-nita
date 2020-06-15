<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakar extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('M_pakar');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		// $data['totalKasus'] = $this->M_Pakar->countKasus();
		// $data['totalPenyakit'] = $this->M_Pakar->countPenyakit();
		// $data['totalPemeriksaan'] = $this->M_Pakar->countPemeriksaan();
		// $data['komen']=$this->M_Pakar->getDataKomen();
		$this->load->view('indexpakar');
	}

	public function DataPenyakit()
	{
		$data['penyakit'] = $this->M_pakar->getDataPenyakit();
		// $data['page']='Penyakit.php';
		$this->load->view('indexpakar',$data);
	}

	public function DataBasis()
	{
		$data['basis'] = $this->M_pakar->getDataBasis();
		// $data['page']='BasisKasus.php';
		$this->load->view('indexpakar',$data);
	}

	public function detailBasis($id)
	{
		$data['basis'] = $this->M_pakar->getDataBasisId($id);
		// $data['page']='DetailKasus.php';
		$this->load->view('indexpakar',$data);
	}

	public function DataPemeriksaan()
	{
		$data['pemeriksaan'] = $this->M_pakar->getDataPemeriksaan();
		// $data['page']='Pemeriksaan.php';
		$this->load->view('indexpakar',$data);
	}

	public function detailPemeriksaan($id)
	{
		$data['pemeriksaan'] = $this->M_pakar->getDataPemeriksaanId($id);
		// $data['page']='PemeriksaanDetail.php';
		$this->load->view('indexpakar',$data);
	}

	//untuk tampilan pemeriksaan revisi
	public function DataPemeriksaanRevisi()
	{
		$data['pemeriksaan'] = $this->M_pakar->getDataPemeriksaanRevisi();
		$data['penyakitKasus']=$this->M_pakar->ambilPenyakit();
		// $data['page']='PemeriksaanRevisi.php';
		$this->load->view('indexpakar',$data);
	}

	public function detailPemeriksaanRevisi($id)
	{
		$where = array('id_pemeriksaan' => $id);
		$data['penyakit'] = $this->M_pakar->getdataID($where,'tb_pemeriksaan')->result();
		$data['penyakitKasus']=$this->M_pakar->ambilPenyakit();
		$data['pemeriksaan'] = $this->M_pakar->getDataPemeriksaanId($id);
		// $data['page']='PemeriksaanDetailRevisi.php';
		$this->load->view('indexpakar',$data);
	}

	//klik button simpan
	function ProsesRevisi($id){
		$data = array(
			'id_penyakit' => $this->input->post('id_penyakit'),
			'id_pengelola' => $_SESSION['id_pengelola'],
			'status' => "4",
			'tgl_revisi' => date("Y-m-d")
		);
		$where = array(
			'id_pemeriksaan' => $id
		);
		$this->M_pakar->updatePemeriksaan($where, $data, 'tb_pemeriksaan');

		$output = $this->input->post('bobot', TRUE);
		$id_gejala = $this->input->post('id_gejala', TRUE);
		$this->M_pakar->addKeBasis($output, $id_gejala);
		$this->session->set_flashdata('success','Data Kasus Berhasil Direvisi');
		redirect('Pakar/DataPemeriksaanRevisi');
	}

//klik button hapus oleh pakar
	function ProsesRevisiDihapus($id){
		$data = array(
			'id_pengelola' => $_SESSION['id_pengelola'],
			'status' => "3",
			'tgl_revisi' => date("Y-m-d")
		);
		$where = array(
			'id_pemeriksaan' => $id
		);
		$this->M_pakar->updatePemeriksaan($where, $data, 'tb_pemeriksaan');
		$this->session->set_flashdata('success','Data Kasus Berhasil Dihapus dari Kasus Revisi');
		redirect('Pakar/DataPemeriksaanRevisi');
	}
}
?>