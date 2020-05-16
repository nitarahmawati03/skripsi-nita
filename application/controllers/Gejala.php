<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	public function datatable_ajax()
		{
			$this->load->view('gejala_datatable_ajax');
		}

	public function data_server()
		{
			$this->load->library('Datatables');
			$this->datatables->select('id_gejala, gejala, id_bobot')->from('tb_gejala');
				echo $this->datatables->generate();
		}

	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_gejala');
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('M_pengelola');
		}

	public function index()
		{
			$this->load->view('indexadmin');
		}

	public function daftar_gejala();
		{
			$this->load->model('M_gejala');
			$data[gejala]=$this->M_gejala->readGejala();
			$this->load->view('tabelgejala',$data);
		}

	public function datatable_ajax()
		{
			$this->load->view('gejala_datatable_ajax');
		}

	public function data_server()
		{
			$this->load->library('Datatables');
			$this->datatables->select('id_gejala, gejala, id_bobot')->from('tb_gejala');
			echo $this->datatables->generate();
		}

	public function Create()
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('gejala', 'Gejala', 'trim|required');
			$this->load->model('M_gejala');
		if ($this->form_validation->run()==FALSE)
		 	{
				$this->load->view("tambahgejala");
			}else
			{
				$this->M_gejala->insertGejala();
				$this->load->view('tambah_gejala_sukses');
			}
		}

	public function Update($id_gejala)
		{
			$this->form_validation->set_rules('gejala', 'Gejala','trim|required');
			$this->form_validation->set_rules('id_bobot','Bobot','trim|required');
			$data['gejala']=$this->M_gejala->getGejala($id_gejala);
			if ($this->form_validation->run()==FALSE)
			{
				$this->load->view('editgejala', $data);
			}
			else
			{
				$this->M_gejala->UpdateById($id_gejala);
				$this->load->view('edit_gejala_sukses');
			}
		}

	public function delete($id_penyakit)
		{
			$this->M_gejala->delete($id_gejala);
			$this->load->view('hapus_gejala_sukses');
		}

	public function datatable()
		{
			$data['gejala_list']=$this->M_gejala->readGejala();
			$this->load->view('gejala_list',$data);
		}


	}
