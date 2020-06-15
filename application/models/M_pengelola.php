<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pengelola extends CI_Model {

	public function login($username, $pass)
{
	$this->db->select('id_pengelola, username, pass');
	$this->db->from('tb_pengelola');
	$this->db->where('username', $username);
	$this->db->where('pass', MD5($pass));
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
	}else{
		return false;
	}
}
	public function insertUser(){
		$object = array('username'=>$this->input->post('username'),
						'pass'=>MD5($this->input->post('pass'))
					);
		$this->db->insert('tb_pengelola',$object);
	}

}


/* End of file user.php */
/* Location: ./application/models/user.php */
?>