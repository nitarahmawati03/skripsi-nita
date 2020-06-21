<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_penyakit');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('M_pengelola');
	}

	public function index()
	{
		$data['totalPenyakit'] = $this->M_penyakit->countPenyakit();
		$data['totalGejala'] = $this->M_penyakit->countGejala();
		$data['totalPemeriksaan'] = $this->M_penyakit->countPemeriksaan();
		$data['totalBasis'] = $this->M_penyakit->countBasis();
		$this->load->view('indexadmin',$data);
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

	public function Create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'trim|required');
			$this->load->model('M_penyakit');

		if ($this->form_validation->run()==FALSE)
		 	{
				$this->load->view("tambahpenyakit");
		}else
		{
		
			$this->M_penyakit->insertPenyakit();
			$this->load->view('tambah_penyakit_sukses');
		}
	}

		public function Update($id_penyakit)
	{
		$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit','trim|required');
		$this->form_validation->set_rules('definisi','Definisi','trim|required');
		$this->form_validation->set_rules('solusi','Solusi','trim|required');

		$data['penyakit']=$this->M_penyakit->getPenyakit($id_penyakit);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('editpenyakit', $data);
		}
		else
		{
			$this->M_penyakit->UpdateById($id_penyakit);
			$this->load->view('edit_penyakit_sukses');
			}
	}

	public function delete($id_penyakit)
	{
		$this->M_penyakit->delete($id_penyakit);
		$this->load->view('hapus_penyakit_sukses');
	}

	public function datatable()
	{
		$data['penyakit_list']=$this->M_penyakit->readPenyakit();
		$this->load->view('penyakit_list',$data);
	}


	}
