<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakar extends CI_Controller {

	public function datatable_ajax()
	{
		$this->load->view('penyakit_datatable_ajax');
		$this->load->view('gejala_datatable_ajax');
	}

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id_penyakit, nama_penyakit, definisi, solusi')->from('tb_penyakit');
			echo $this->datatables->generate();
		$this->datatables->select('id_gejala, gejala, id_bobot')->from('tb_gejala');
				echo $this->datatables->generate();
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_penyakit');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('M_pengelola');
		$this->load->model('M_gejala');
	}

	public function index()
	{
		$this->load->view('indexpakar');
	}

	public function daftar_penyakit()
	{
		$this->load->model('M_penyakit');
		$data['penyakit']=$this->M_penyakit->readPenyakit();
		$this->load->view('tabelpenyakit',$data);
	}

	public function datatable_ajaxPenyakit()
	{
		$this->load->view('penyakit_datatable_ajax');
	}

	public function data_serverPenyakit()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id_penyakit,nama_penyakit, definisi, solusi')->from('tb_penyakit');
			echo $this->datatables->generate();
	}

	public function daftar_gejala()
	{
		$this->load->model('M_gejala');
		$data['gejala']=$this->M_gejala->readGejala();
		$this->load->view('tabelgejala',$data);
	}

	public function datatable_ajaxGejala()
		{
			$this->load->view('gejala_datatable_ajax');
		}

	public function data_serverGejala()
		{
			$this->load->library('Datatables');
			$this->datatables->select('id_gejala, gejala, id_bobot')->from('tb_gejala');
			echo $this->datatables->generate();
		}

	// public function detailPenyakit($id_penyakit){
	// 	$data['penyakit']=$this->M_penyakit->getPenyakit();
	// 	$this->load->view('detail',$data);
	// }

	// public function Create()
	// {
	// 		$this->load->helper('url','form');
	// 		$this->load->library('form_validation');
	// 		$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'trim|required');
	// 		$this->load->model('M_penyakit');

	// 	if ($this->form_validation->run()==FALSE)
	// 	 	{
	// 			$this->load->view("tambahpenyakit");
	// 	}else
	// 	{
		
	// 		$this->M_penyakit->insertPenyakit();
	// 		$this->load->view('tambah_penyakit_sukses');
	// 	}
	// }

	// 	public function Update($id_penyakit)
	// {
	// 	$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit','trim|required');
	// 	$this->form_validation->set_rules('definisi','Definisi','trim|required');
	// 	$this->form_validation->set_rules('solusi','Solusi','trim|required');

	// 	$data['penyakit']=$this->M_penyakit->getPenyakit($id_penyakit);

	// 	if ($this->form_validation->run()==FALSE)
	// 	{
	// 		$this->load->view('editpenyakit', $data);
	// 	}
	// 	else
	// 	{
	// 		$this->M_penyakit->UpdateById($id_penyakit);
	// 		$this->load->view('edit_penyakit_sukses');
	// 		}
	// }

	// public function delete($id_penyakit)
	// {
	// 	$this->M_penyakit->delete($id_penyakit);
	// 	$this->load->view('hapus_penyakit_sukses');
	// }

	public function datatable()
	{
		$data['penyakit_list']=$this->M_penyakit->readKoki();
		$this->load->view('penyakit_list',$data);
		$data['gejala_list']=$this->M_gejala->readGejala();
		$this->load->view('gejala_list',$data);
	}


	}
