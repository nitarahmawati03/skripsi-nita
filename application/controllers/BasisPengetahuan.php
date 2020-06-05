<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BasisPengetahuan extends CI_Controller {

	// public function datatable_ajax()
	// {
	// 	$this->load->view('basis_datatable_ajax');
	// }

	// public function data_server()
	// {
	// 	$this->load->library('Datatables');
	// 	$this->datatables->select('id_basis_pengetahuan, id_penyakit')->from('tb_basis_pengetahuan');
	// 		echo $this->datatables->generate();
	// }

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_basispengetahuan');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('indexadmin');

	}

	public function daftar_basis_pengetahuan()
	{
		$this->load->model('M_basispengetahuan');
		$data['basis']=$this->M_basispengetahuan->readBasis();
		$this->load->view('tabelbasis',$data);
	}

	public function datatable_ajaxBasis()
	{
		$this->load->view('basis_datatable_ajax');
	}

	public function data_serverBasis()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id_basis_pengetahuan, id_penyakit')->from('tb_basis_pengetahuan');
			echo $this->datatables->generate();
	}

	public function Create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation', 'database');
			$this->form_validation->set_rules('id_basis_pengetahuan', 'Basis Pengetahuan', 'trim|required');
			$this->form_validation->set_rules('id_penyakit', 'Penyakit', 'trim|required');
			$this->load->model('M_basispengetahuan');
			$this->load->model('M_penyakit');
			$nextId = '';
			$query = $this->db->select('id_basis_pengetahuan')
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
