<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelola extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Pengelola
	 *	- or -
	 * 		http://example.com/index.php/Pengelola/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('M_pengelola');
		$this->load->model('M_penyakit');
		$this->load->model('M_gejala');
	}

	public function index()
	{
		$data['penyakit_object']=$this->M_penyakit->getPenyakitQueryObject(); 
		$data['gejala']=$this->M_gejala->getGejalaQueryObject();
		$this->load->view('indexuser',$data);
	}

	public function detailPenyakit($id_penyakit)
	{
		$data['penyakit']=$this->M_penyakit->getPenyakit($id_penyakit); 
		$this->load->view('detail',$data);
	}

	public function menulogin()
	{
		$this->load->view('loginAdmin');
	}


	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_cekDb');
			if ($this->form_validation->run() == FALSE){
			//$this->load->view('login_view');
			redirect('Pengelola','refresh');
		} else {
			if($this->input->post('username')=='admin' && $this->input->post('pass')=='admin'){
				redirect('Penyakit','refresh');}
			else{
				redirect('Pakar','refresh');
			}
		}
	}

public function cekDb($password)
	{
		$this->load->model('M_pengelola');
		$username = $this->input->post('username');
		$result = $this->M_pengelola->login($username,$pass);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id_pengelola'=>$row->id,
					'username'=> $row->username);
					$this->session->set_userdata('logged_in',$sess_array);
					 }
					 return true;
					}else{
						$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password tidak Valid");
						return false;
		}
	}
	

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('Pengelola','refresh');
	}

}
