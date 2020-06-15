<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pemeriksaan');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('indexadmin');

	}

	public function daftar_pemeriksaan()
	{
		$this->load->model('M_pemeriksaan');
		$data['pemeriksaan']=$this->M_pemeriksaan->readPemeriksaan();
		$this->load->view('Pemeriksaan',$data);
	}

	public function datatable_ajaxPemeriksaan()
	{
		$this->load->view('pemeriksaan_datatable_ajax');
	}

	public function data_serverPemeriksaan()
	{
		$this->load->library('Datatables');
		$this->load->model('M_pemeriksaan');
		$data['pemeriksaan']=$this->M_pemeriksaan->joinPemeriksaan();
		
		// $this->datatables->select('id_pemeriksaan, id_penyakit, hasil, tgl_pemeriksaan')->from('tb_pemeriksaan');
		// 	echo $this->datatables->generate();
		// $db = $this->M_pemeriksaan->joinPemeriksaan();
	}


	public function Create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation', 'database');
			$this->form_validation->set_rules('id_pemeriksaan', 'Pemeriksaane', 'trim|required');
			$this->form_validation->set_rules('id_penyakit', 'Penyakit', 'trim|required');
			$this->form_validation->set_rules('hasil', 'Hasil', 'trim|required');
			$this->form_validation->set_rules('tgl_pemeriksaan', 'Tanggal Pemeriksaan', 'trim|required');
			$this->load->model('M_pemeriksaan');
			$this->load->model('M_penyakit');
			$nextId = '';
			$query = $this->db->select('id_pemeriksaan')
						->from('tb_basis_pengetahuan')
						->get();
			$row = $query->last_row();
			if($row){
				$idPostfix = (int)substr($row->id_basis_pengetahuan,2)+1;
				$nextId = 'BP'.STR_PAD((string)$idPostfix,2,"0",STR_PAD_LEFT);
			}
			else{
				$nextId = 'BP01';
			}

		if ($this->form_validation->run()==FALSE)
		 	{
				$data['penyakit']=$this->M_penyakit->readPenyakit();
				$data['id_basis']=$nextId;
				$this->load->view("tambahbasis", $data);
		}else
		{

			$this->M_basispengetahuan->insertBasis();
			$this->load->view('tambah_basis_sukses');
		}
	}



	public function Update($id_basis_pengetahuan)
	{
		$this->form_validation->set_rules('id_basis_pengetahuan', 'Kode Basis Pengetahuan','trim|required');
		$this->form_validation->set_rules('id_penyakit','Penyakit','trim|required');

		$data['basis']=$this->M_basispengetahuan->getBasis($id_basis_pengetahuan);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->model('M_penyakit');
			$data['penyakit']=$this->M_penyakit->readPenyakit();
			$this->load->view('editbasis', $data);
		}
		else
		{
			$this->M_basispengetahuan->UpdateById($id_basis_pengetahuan);
			$this->load->view('edit_basis_sukses');
			}
	}

	public function delete($id_basis_pengetahuan)
	{
		$this->M_basispengetahuan->delete($id_basis_pengetahuan);
		$this->load->view('hapus_basis_sukses');
	}

	public function datatable()
	{
		$data['basis_list']=$this->M_basispengetahuan->readBasis();
		$this->load->view('basis_list',$data);
	}


	}
