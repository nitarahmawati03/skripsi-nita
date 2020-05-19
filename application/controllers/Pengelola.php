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
		$this->load->model('m_pengelola');
		$this->load->model('m_penyakit');
	}


	public function index()
	{
		$this->load->view('indexuser');
	}

	public function menulogin()
	{
		$this->load->view('loginAdmin');
	}


	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
			if($this->input->post('username')=='admin' && $this->input->post('password')=='admin')
			{
				redirect('Penyakit','refresh');
			}
			else
			{
				// redirect('Pakar','refresh');
				echo "<script>alert('Username atau Password yang Anda Masukan Salah !!!');history.go(-1);</script>";
			}
	}

	

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('Pengelola','refresh');
	}

}
