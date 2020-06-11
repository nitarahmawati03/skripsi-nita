<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBasis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_detailbasis');
		$this->load->helper('url','form');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->view('tabelbasis');

	}

	public function daftar_detail()
	{
		$this->load->model('M_detailbasis');
		$data['detailbasis']=$this->M_detailbasis->readDetail();
		$this->load->view('tabeldetail',$data);
	}

	public function datatable_ajaxDetail()
	{
		$this->load->view('detail_basis_datatable_ajax');

	}

	public function data_serverDetail()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id_detail, id_gejala, id_basis_pengetahuan, bobot')->from('tb_detail_basis_pengetahuan');
			echo $this->datatables->generate();
	}

	public function DetailBasis($id)
	{
		$data['detailbasis'] = $this->M_detailbasis->getDataBasisId($id);
		$this->load->view('tabeldetail',$data);
	}

	public function Create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation', 'database');
			$this->form_validation->set_rules('id_detail', 'Detail Basis Pengetahuan', 'trim|required');
			$this->form_validation->set_rules('id_Basis_pengetahuan', 'Basis Pengetahuan', 'trim|required');
			$this->form_validation->set_rules('id_gejala', 'Gejala', 'trim|required');
			$this->form_validation->set_rules('bobot', 'Bobot', 'trim|required');
			$this->load->model('M_detailbasis');
			$this->load->model('M_gejala');
			$this->load->model('M_basispengetahuan');
			$nextId = '';
			$query = $this->db->select('id_detail')
						->from('tb_detail_basis_pengetahuan')
						->get();
			$row = $query->last_row();
			if($row){
				$idPostfix = (int)substr($row->id_detail,2)+1;
				$nextId = 'DB'.STR_PAD((string)$idPostfix,2,"0",STR_PAD_LEFT);
			}
			else{
				$nextId = 'DB01';
			}

		if ($this->form_validation->run()==FALSE)
		 	{
		 		$data['basis']=$this->M_basispengetahuan->readBasis();
				$data['gejala']=$this->M_gejala->readGejala();
				$data['id_detail']=$nextId;
				$this->load->view("tambahdetail", $data);
		}else
		{

			$this->M_detailbasis->insertDetail();
			$this->load->view('tambah_detail_basis_sukses');
		}
	}

	public function Update($id_detail)
	{
		$this->form_validation->set_rules('id_detail', 'Kode Detail Basis Pengetahuan','trim|required');
		$this->form_validation->set_rules('id_basis_pengetahuan','Basis Pengetahuan','trim|required');
		$this->form_validation->set_rules('id_gejala','Gejala','trim|required');
		$this->form_validation->set_rules('bobot','Bobot','trim|required');

		$data['detailbasis']=$this->M_detailbasis->getDataBasisId($id_detail);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->model('M_gejala');
			$data['gejala']=$this->M_gejala->readGejala();
			$this->load->model('M_basispengetahuan');
			$data['basis']=$this->M_basispengetahuan->readBasis();
			$this->load->view('editdetail', $data);
		}
		else
		{
			$this->M_detailbasis->UpdateById($id_detail);
			$this->load->view('edit_detail_basis_sukses');
			}
	}

	public function delete($id)
	{
		$this->M_detailbasis->delete($id_detail);
		$this->load->view('hapus_detail_basis_sukses');
	}

	public function datatable()
	{
		$data['detail_list']=$this->M_detailbasis->readDetail();
		$this->load->view('detail_list',$data);
	}


	}
