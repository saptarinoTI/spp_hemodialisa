<?php
class Jadwal extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('m_jadwal');
		$this->load->model('m_pasien');
		$this->cekLogin();
	}

	function index()
	{
		$data['title'] = "Data Jadwal";

		$data['jadwal'] = $this->m_jadwal->semua()->result();
		$this->template->display('jadwal/index', $data);
	}

	function tambah()
	{
		$data['title'] = "Tambah Data Jadwal";
		$this->validasi();

		if ($this->form_validation->run() == true) {
			$idpasien = $this->input->post('idpasien');
			$tgl = $this->template->InggrisTgl($this->input->post('tgl'));
			$cek = $this->m_jadwal->cek($idpasien, $tgl);
			if ($cek->num_rows() > 0) {
				$data['message'] =
					"<div class='alert alert-danger'>ID sudah digunakan</div>";
				$this->template->display('jadwal/tambah', $data);
			} else {
				$info = array(
					'j_idpasien' => $idpasien,
					'j_hari' => $this->input->post('hari'),
					'j_tgl' => $this->input->post('tgl'),
					'j_shift' => $this->input->post('shift'),
					'j_keterangan' => $this->input->post('keterangan')
				);
				$this->m_jadwal->simpan($info);

				$data['message'] = "<div class='alert alert-info'>Data berhasil ditambah</div>";
				$data['jadwal'] = $this->m_jadwal->semua()->result();
				// $this->template->display('jadwal/index', $data);
				redirect('jadwal/index');
			}
		} else {
			$data['message'] = "Tambah Data Jadwal";
			$data['jadwal'] = $this->m_pasien->semua()->result();
			$this->template->display('jadwal/tambah', $data);
		}
	}

	function edit()
	{
		$data['title'] = "Edit Data Jadwal";
		if (isset($_POST['btn'])) {
			$this->validasi();

			if ($this->form_validation->run() == true) {
				$idpasien = $this->input->post('idpasien');
				$tgl = $this->template->InggrisTgl($this->input->post('tgl'));
				$info = array(
					'j_hari' => $this->input->post('hari'),
					'j_tgl' => $this->input->post('tgl'),
					'j_shift' => $this->input->post('shift'),
					'j_keterangan' => $this->input->post('keterangan')
				);

				$this->m_jadwal->update($idpasien, $info);

				$data['message'] = "<div class='alert alert-info'>Data Berhasil diupdate</div>";
				$data['jadwal'] = $this->m_jadwal->semua()->result();
				// $this->template->display('jadwal/index', $data);
				redirect('jadwal/index');
			} else {
				$data['message'] = "Ubah Data Jadwal";
			}
		} else {
			$id = $this->input->get('id');
			$arr_kata = explode(" ", $id);
			$data['jadwal'] = $this->m_jadwal->cek($arr_kata[0], $arr_kata[1])->row_array();
			$this->template->display('jadwal/edit', $data);
		}
	}

	function hapus()
	{
		$kode = $this->input->post('kode');
		$arr_kata = explode(" ", $kode);
		$this->m_jadwal->hapus($arr_kata[0], $arr_kata[1]);
	}

	function validasi()
	{
		$this->form_validation->set_rules('idpasien', 'ID Pasien ', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required');
	}

	function cekLogin()
	{
		if ($this->session->userdata('is_login') == false) {
			redirect('auth/login');
		} else if ("" == $this->session->userdata('aplevel')) {
			redirect('jadwal/v_tidakada');
		}
	}
}
