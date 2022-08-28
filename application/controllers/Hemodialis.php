<?php
class Hemodialis extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('m_hemodialis');
		$this->load->model('m_pasien');
		$this->cekLogin();
	}

	function index()
	{
		$data['title'] = "Data Traveling Dialisis";

		$config['base_url'] = site_url('hemodialis/index/');
		$data['hemodialis'] = $this->m_hemodialis->semua()->result();
		$this->template->display('hemodialis/index', $data);
	}

	function tambah()
	{
		$data['title'] = "Pengajuan Form Traveling Dialisis";
		$this->validasi();

		if ($this->form_validation->run() == true) {
			$idpasien = $this->input->post('idpasien');
			$hid = $this->input->post('hid');
			$cek = $this->m_hemodialis->cek($idpasien, $hid);
			if ($cek->num_rows() > 0) {
				$data['message'] =
					"<div class='alert alert-danger'>ID sudah digunakan</div>";
				$this->template->display('hemodialis/tambah', $data);
			} else {
				$info = array(
					'h_idpasien' => $this->input->post('idpasien'),
					'h_nama_pasien' => $this->input->post('nama_pasien'),
					'h_umur' => $this->input->post('umur'),
					'h_jkelamin' => $this->input->post('jkelamin'),
					'h_alamat' => $this->input->post('alamat'),
					'h_diagnosa' => $this->input->post('diagnosa'),
					'h_pertama' => $this->input->post('pertama'),
					'h_terakhir' => $this->input->post('terakhir'),
					'h_frekuensi' => $this->input->post('frekuensi'),
					'h_mesin' => $this->input->post('mesin'),
					'h_dialiser' => $this->input->post('dialiser'),
					'h_dialisat' => $this->input->post('dialisat'),
					'h_aliran_dialisat' => $this->input->post('aliran_dialisat'),
					'h_aliran_darah' => $this->input->post('aliran_darah'),
					'h_lama' => $this->input->post('lama'),
					'h_ultrafiltrasi' => $this->input->post('ultrafiltrasi'),
					'h_uf_profiling' => $this->input->post('uf_profiling'),
					'h_heparinisasi' => $this->input->post('heparinisasi'),
					'h_akses_faskuler' => $this->input->post('akses_faskuler'),
					'h_hbsag' => $this->input->post('hbsag'),
					'h_antihcv' => $this->input->post('antihcv'),
					'h_antihiv' => $this->input->post('antihiv'),
					'h_tglceklab' => $this->input->post('tglceklab'),
					'h_penyulit_hd' => $this->input->post('penyulit_hd'),
					'h_beratbadan_kering' => $this->input->post('beratbadan_kering'),
					'h_beratbadan_akhir' => $this->input->post('beratbadan_akhir'),
					'h_tekanan_darah' => $this->input->post('tekanan_darah'),
					'h_lab_hb' => $this->input->post('lab_hb'),
					'h_lab_ureum' => $this->input->post('lab_ureum'),
					'h_lab_kreatinin' => $this->input->post('lab_kreatinin'),
					'h_lab_natrium' => $this->input->post('lab_natrium'),
					'h_lab_kalium' => $this->input->post('lab_kalium'),
					'h_lab_prot/total' => $this->input->post('lab_prot/total'),
					'h_lab_albumin' => $this->input->post('lab_albumin'),
					'h_obat' => $this->input->post('obat'),
					'h_tranfusi_terakhir' => $this->input->post('tranfusi_terakhir'),
					'h_goldar' => $this->input->post('goldar'),
					'h_reaksi_transfusi' => $this->input->post('reaksi_transfusi'),
					'h_keterangan' => $this->input->post('keterangan')
				);
				$this->m_hemodialis->simpan($info);

				$data['message'] = "<div class='alert alert-info'>Data berhasil ditambah</div>";
				$data['hemodialis'] = $this->m_hemodialis->semua()->result();
				redirect('hemodialis/index');
			}
		} else {
			$data['message'] = "Add Traveling Dialisis";
			$data['pasien'] = $this->m_pasien->semua()->result();
			$this->template->display('hemodialis/tambah', $data);
		}
	}

	function edit()
	{
		$data['title'] = "Edit Traveling Dialisis";
		$this->validasi();

		$idpasien = $this->input->post('idpasien');
		$hid = $this->input->post('hid');
		$id = $this->input->get('id');
		if ($this->form_validation->run() == true) {
			$info = array(
				'h_idpasien' => $this->input->post('idpasien'),
				'h_nama_pasien' => $this->input->post('nama_pasien'),
				'h_umur' => $this->input->post('umur'),
				'h_jkelamin' => $this->input->post('jkelamin'),
				'h_alamat' => $this->input->post('alamat'),
				'h_diagnosa' => $this->input->post('diagnosa'),
				'h_pertama' => $this->input->post('pertama'),
				'h_terakhir' => $this->input->post('terakhir'),
				'h_frekuensi' => $this->input->post('frekuensi'),
				'h_mesin' => $this->input->post('mesin'),
				'h_dialiser' => $this->input->post('dialiser'),
				'h_dialisat' => $this->input->post('dialisat'),
				'h_aliran_dialisat' => $this->input->post('aliran_dialisat'),
				'h_aliran_darah' => $this->input->post('aliran_darah'),
				'h_lama' => $this->input->post('lama'),
				'h_ultrafiltrasi' => $this->input->post('ultrafiltrasi'),
				'h_uf_profiling' => $this->input->post('uf_profiling'),
				'h_heparinisasi' => $this->input->post('heparinisasi'),
				'h_akses_faskuler' => $this->input->post('akses_faskuler'),
				'h_hbsag' => $this->input->post('hbsag'),
				'h_antihcv' => $this->input->post('antihcv'),
				'h_antihiv' => $this->input->post('antihiv'),
				'h_tglceklab' => $this->input->post('tglceklab'),
				'h_penyulit_hd' => $this->input->post('penyulit_hd'),
				'h_beratbadan_kering' => $this->input->post('beratbadan_kering'),
				'h_beratbadan_akhir' => $this->input->post('beratbadan_akhir'),
				'h_tekanan_darah' => $this->input->post('tekanan_darah'),
				'h_lab_hb' => $this->input->post('lab_hb'),
				'h_lab_ureum' => $this->input->post('lab_ureum'),
				'h_lab_kreatinin' => $this->input->post('lab_kreatinin'),
				'h_lab_natrium' => $this->input->post('lab_natrium'),
				'h_lab_kalium' => $this->input->post('lab_kalium'),
				'h_lab_prot/total' => $this->input->post('lab_prot/total'),
				'h_lab_albumin' => $this->input->post('lab_albumin'),
				'h_obat' => $this->input->post('obat'),
				'h_tranfusi_terakhir' => $this->input->post('tranfusi_terakhir'),
				'h_goldar' => $this->input->post('goldar'),
				'h_reaksi_transfusi' => $this->input->post('reaksi_transfusi'),
				'h_keterangan' => $this->input->post('keterangan')
			);

			$this->m_hemodialis->update($id, $info);
			$data['message'] = "<div class='alert alert-info'>Data Berhasil diupdate</div>";
			// $data['hemodialis'] = $this->m_hemodialis->semua()->result();
			redirect('hemodialis/index');
		} else {
			$data['message'] = "Ubah Traveling Dialisis";
		}
		$idp = $this->input->get('idp');
		$id = $this->input->get('id');
		$data['hem'] = $this->m_hemodialis->cek($idp, $id)->row_array();
		$this->template->display('hemodialis/edit', $data);
	}



	function hapus()
	{
		$kode = $this->input->post('kode');
		$arr_kata = explode(" ", $kode);
		$this->m_hemodialis->hapus($arr_kata[0], $arr_kata[1]);
	}

	function validasi()
	{
		$this->form_validation->set_rules('idpasien', 'ID Pasien', 'required');
	}

	function cekLogin()
	{
		if ($this->session->userdata('is_login') == false) {
			redirect('auth/login');
		} else if ("" == $this->session->userdata('aplevel')) {
			redirect('hemodialis/v_tidakada');
		}
	}
}
