<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class M_cetak extends CI_Model { 

 public function view(){ 
 $query = $this->db->query("SELECT tb_pemeriksaan.*, tb_penyakit.id_penyakit, tb_penyakit.nama_penyakit, tb_pengelola.id_pengelola, tb_pengelola.nama FROM tb_pemeriksaan INNER JOIN tb_penyakit ON tb_pemeriksaan.id_penyakit = tb_penyakit.id_penyakit LEFT JOIN tb_pengelola ON tb_pemeriksaan.id_pengelola = tb_pengelola.id_pengelola ORDER BY id_pemeriksaan DESC");
		return $query->result();
 } 

 public function view_row(){ 
  $query = $this->db->query("SELECT tb_pemeriksaan.*, tb_penyakit.id_penyakit, tb_penyakit.nama_penyakit, tb_pengelola.id_pengelola, tb_pengelola.nama FROM tb_pemeriksaan INNER JOIN tb_penyakit ON tb_pemeriksaan.id_penyakit = tb_penyakit.id_penyakit LEFT JOIN tb_pengelola ON tb_pemeriksaan.id_pengelola = tb_pengelola.id_pengelola ORDER BY id_pemeriksaan DESC");
		return $query->result();
 } 
  

} 

/* End of file cetak_model.php */ 
/* Location: ./application/models/cetak_model.php */