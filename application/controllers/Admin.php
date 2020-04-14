<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('M_user');
	}
 
	function index()
	{
		$this->load->view('indexadmin');
	}

	public function data_penyakit()
	{	
		$data['koki']=$this->koki_model->readKoki();
		$this->load->view('tabelresep',$data);
		
	}

	public function data_gejala()
	{	
		$data['koki']=$this->koki_model->readKoki();
		$this->load->view('tabelresep',$data);
		
	}

}