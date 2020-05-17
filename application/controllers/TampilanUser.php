<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TampilanUser extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('M_penyakit');
	}

	public function index()
	{	
		/*$this->load->view('indexuser');*/
		$data['penyakit_object']=$this->M_penyakit->getPenyakitQueryObject(); 
	  	$this->load->view('indexuser', $data); 
	}

	public function detailPenyakit($id_penyakit){
		$data['penyakit']=$this->M_penyakit->getPenyakitQueryObject();
		$this->load->view('detail',$data);
	}

	

}

/* End of file homeuser.php */
/* Location: ./application/controllers/homeuser.php */