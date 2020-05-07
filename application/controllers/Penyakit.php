<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	public function datatable_ajax()
	{
		$this->load->view('penyakit_datatable_ajax');
	}

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('id_penyakit, nama_penyakit, definisi, solusi')->from('tb_penyakit');
			echo $this->datatables->generate();
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_penyakit');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('M_penyakit');
		$data['Penyakit']=$this->M_penyakit->readPenyakit();

		$this->load->view('indexadmin', $data);
	}

	public function Create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'trim|required');

			$this->load->model('M_penyakit');

		if ($this->form_validation->run()==FALSE)
		 {
			$this->load->view("tambah_penyakit_view");
		}else
		{
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('tambah_penyakit_view',$error);
		}
		else
		{
			$this->M_penyakit->insertPenyakit();
			$this->load->view('tambah_penyakit_sukses');
		}

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
			$this->load->view('edit_penyakit_view', $data);
		}
		else
		{
			$this->M_penyakit->UpdateById($id_penyakit);
			$this->load->view('edit_penyakit_sukses');
		// 	$config['upload_path'] = './assets/penyakit/';
		// 	$config['allowed_types'] = 'gif|jpg|png|jpeg';
		// 	$config['max_size']  = '9000000000';
		// 	$config['max_width']  = '10240';
		// 	$config['max_height']  = '7680';
		// 	$this->load->library('upload', $config);

		// 	if ( ! $this->upload->do_upload('userfile'))
		// {
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$this->load->view('tambah_penyakit_view',$error);
		// }
		// else
		// {
		// 	$this->M_penyakit->UpdateById($id_penyakit);
		// 	$this->load->view('edit_penyakit_sukses');
		// 	}


			}
	}

	public function delete($id_penyakit)
	{
		$this->M_penyakit->delete($id_penyakit);
		$this->load->view('hapus_penyakit_sukses');
	}

	public function datatable()
	{
		$data['penyakit_list']=$this->M_penyakit->readKoki();
		$this->load->view('penyakit_list',$data);
	}


	}
