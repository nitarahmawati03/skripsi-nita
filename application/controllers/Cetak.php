<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class cetak extends CI_Controller { 

 public function __construct(){ 
  parent::__construct(); 
  $this->load->model('M_cetak'); 
  $this->load->model('M_pemeriksaan');
  $this->load->library('dompdf_gen'); 
  $this->load->helper('file'); 

 } 

 
 public function index() 
 { 
  $data['pemeriksaan']=$this->M_cetak->view_row(); 
  $this->load->view('preview', $data); 
 } 

 public function cetakPdf(){
    $data['pemeriksaan']=$this->M_cetak->view_row();
    $this->load->view('print', $data);
    $paper_size='A4'; //paper size
    $orientation = 'landscape'; //tipe format kertas
    $html = $this->output->get_output();

    //$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
    $dompdf = new DOMPDF();
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("pemeriksaan.pdf");
    unset($html);
    unset($dompdf);
  }

} 

/* End of file cetak.php */ 
/* Location: ./application/controllers/cetak.php */