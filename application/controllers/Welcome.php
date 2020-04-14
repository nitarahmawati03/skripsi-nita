<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
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
		$this->load->model('m_user');
	}


	public function index()
	{
		$this->load->view('indexuser');

	}

	public function menulogin()
	{
		$this->load->view('loginAdmin');
	}

	// function aksi_login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => md5($password)
	// 		);
	// 	$cek = $this->m_user->cek_login("indexadmin",$where)->num_rows();
	// 	if($cek > 0){
 
	// 		$data_session = array(
	// 			'nama' => $username,
	// 			'status' => "login"
	// 			);
 
	// 		$this->session->set_userdata($data_session);
 
	// 		redirect('indexadmin');
 
	// 	}else{
	// 		echo "Username dan password salah !";
	// 	}
	// }

		public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		// if ($this->form_validation->run() == FALSE)
		// {
		// 	//$this->load->view('login_view');
		// 	redirect('loginAdmin','refresh');
		// } else 
		// {
			if($this->input->post('username')=='admin' && $this->input->post('password')=='admin')
			{
				redirect('Admin','refresh');
			}
			else
			{
				echo "<script>alert('Username atau Password yang Anda Masukan Salah !!!');history.go(-1);</script>";
			}
		// }
	}

	public function cekDb($password)
	{
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id'=>$row->id,
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
		redirect('Welcome','refresh');
	}

}
