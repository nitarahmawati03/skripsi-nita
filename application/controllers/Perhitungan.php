<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('M_perhitungan');

		$kasus = $this->M_perhitungan->getPerhitunganQueryObject(); //mengambil data gejala setiap kasus

		$data_kasus = [];
		foreach ($kasus as $key => $value) {
			$data_kasus[$value->id_basis_pengetahuan][$value->id_gejala] = $value->bobot; //untuk mengambil bobot dari setiap gejala di kasus lama atau basis pengetahuan
		}

		$data_kasus_baru = $this->input->post('check_list'); //untuk menyimpan gejala kasus baru dengan variable data 


		$data_bobot_kasus_tiap_penyakit = []; //variabel untuk simpan hasil
		foreach ($data_kasus_baru as $gejala) {
			foreach ($data_kasus as $key_kasus => $value) {
				foreach ($value as $key_gejala => $bobot) {
					if ($key_gejala == $gejala) {
						$data_bobot_kasus_tiap_penyakit[$key_kasus][$gejala] = $bobot; // fungsi menghitung kesamaan x bobot
					} else {
						if (!isset($data_bobot_kasus_tiap_penyakit[$key_kasus][$gejala])) {
							$data_bobot_kasus_tiap_penyakit[$key_kasus][$gejala] = 0; //jika tidak ada yang sama maka diberi nilai 0
						}
					}
				}
			}
		}

		$sum_kasus_lama = []; //variabel untuk menyimpan nilai/ hasil kasus lama
		foreach ($data_kasus as $key => $value) {
			$sum_kasus_lama[$key] = array_sum($value); // untuk menjumlah bobot kasus lama
		}

		$sum_kasus_baru = []; //variabel untuk menyimpan nilai/ hasil kasus baru
		foreach ($data_bobot_kasus_tiap_penyakit as $key => $value) {
			$sum_kasus_baru[$key] = array_sum($value); //untuk menjumlah bobot kasus baru
		}

		$nilai_sim_untuk_tiap_kasus = []; //variabel proses retrieve
		foreach ($sum_kasus_baru as $key => $value) {
			$nilai_sim_untuk_tiap_kasus[$key] = $sum_kasus_baru[$key] / $sum_kasus_lama[$key]; //proses perhitungan retrieve
		}

		$nilai_sim_percent = []; //variabel untuk menyimpan nilai atau hasil
		foreach ($nilai_sim_untuk_tiap_kasus as $key => $value) {
			/*menjadikan persen */
			$nilai_sim_percent[$key] = $value * 100;
		}

		// #grant varible for view 

		$var_table_perhitungan = [];
		foreach ($data_kasus as $key => $value) { //array untuk menampilkan perhitungan
			$var_table_perhitungan[$key] = [
				'gejala_kasus' => count($value),
				'gejala_dipilih' => count($data_kasus_baru),
				'gejala_cocok' => count(array_filter($data_bobot_kasus_tiap_penyakit[$key])),
				'sum_gejala' => $sum_kasus_baru[$key],
				'pembagi' => $sum_kasus_lama[$key],
				'hasil' => number_format($nilai_sim_untuk_tiap_kasus[$key],2)
			];
		}

		$db_kasus = $this->M_perhitungan->joinPerhitungan();
		
		$data_kasus_penyakit = [];
		foreach ($db_kasus as $key => $value) {
			$data_kasus_penyakit[$value->id_basis_pengetahuan] = $value;
		}

		
		$var_hasil_analisa_penyakit = []; //script menampilkan hasil analisa penyakit dengan presentase
		foreach ($db_kasus as $key => $value) {
			$var_hasil_analisa_penyakit[$key] = [
				'penyakit' => $value->nama_penyakit,
				'persentase' => number_format($nilai_sim_percent[$value->id_basis_pengetahuan],2)
			];
		}

		$var_kemungkinan_penyakit_yang_diderita = [];
		foreach ($db_kasus as $key => $value) {
			$var_kemungkinan_penyakit_yang_diderita[$value->id_basis_pengetahuan] = [
				'penyakit' => $value->nama_penyakit,
				'definisi' => $value->definisi,
				'solusi' => $value->solusi,
				'persentase' => number_format($nilai_sim_percent[$value->id_basis_pengetahuan],2)
			];
		}


		$max_key_kasus = array_keys($nilai_sim_percent, max($nilai_sim_percent));

		$var_kemungkinan_penyakit_yang_diderita_maxed = [];
		foreach ($max_key_kasus as $key => $value) {
			$var_kemungkinan_penyakit_yang_diderita_maxed[] = $var_kemungkinan_penyakit_yang_diderita[$value];
		}

	// 	##simpan database




		foreach ($max_key_kasus as $key => $value) {
			$set_pemeriksaan = [
				'tgl_pemeriksaan' => date("Y-m-d"),
				'tgl_revisi' => date("Y-m-d"),
				'status' => ($var_kemungkinan_penyakit_yang_diderita[$value]['persentase'] >= 50 ? 1 : 2),
				'id_penyakit' => $data_kasus_penyakit[$value]->id_penyakit,
				'hasil' => $var_kemungkinan_penyakit_yang_diderita[$value]['persentase']
				
			];

			$this->M_perhitungan->insertPemeriksaan($set_pemeriksaan);
		
			$id_pemeriksaan = $this->db->insert_id();
			foreach ($data_kasus_baru as $key => $value) {
				$set_detail = [
					'id_pemeriksaan' => $id_pemeriksaan,
					'id_gejala' => $value,
				];

				$this->M_perhitungan->insertDetailPemeriksaan($set_detail);
			}
		}

		$data['table_perhitungan'] = $var_table_perhitungan;
		$data['hasil_analisa_penyakit'] = $var_hasil_analisa_penyakit;
		// $data['gejala_cocok'] = $var_gejala_cocok;
		$data['kemungkinan_penyakit_yang_diderita'] = $var_kemungkinan_penyakit_yang_diderita_maxed;
		$data['gejala'] = $data_kasus_baru;
		// $data['kasus'] = number_format($nilai_sim_untuk_tiap_kasus, 2, '.', '');
		$data['kasus'] = $nilai_sim_untuk_tiap_kasus;
		$data['persen'] = $nilai_sim_percent;
		$this->load->view('hasilKonsultasi', $data);
	}

	// public function revise($id_pemerikasaan)
	// {
	// 	$pemeriksaan = $this->db
	// 		->where('id_pemerikasaan', $id_pemerikasaan)
	// 		->get('pemeriksaan')
	// 		->result();
	// }

}

