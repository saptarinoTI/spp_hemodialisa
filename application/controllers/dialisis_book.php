<?php
class Dialisis_book extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('m_dialisis_book');
		$this->load->model('m_pasien');
		$this->cekLogin();
	}

	function index()
	{
		$data['title'] = "Data Dialisis Book";

		$data['dialisis_book'] = $this->m_dialisis_book->semua()->result();
		$this->template->display('dialisis_book/index', $data);
	}

	function tambah()
	{
		$data['title'] = "Tambah Data Dialisis Book";
		$this->validasi();

		if ($this->form_validation->run() == true) {
			$idpasien = $this->input->post('id');
			$tgl = $this->template->InggrisTgl($this->input->post('tanggal'));
			$cek = $this->m_dialisis_book->cek($idpasien, $tgl);
			if ($cek->num_rows() > 0) {
				$data['message'] =
					"<div class='alert alert-danger'>ID Pasien & Tanggal sudah ada</div>";
				$this->template->display('dialisis_book/tambah', $data);
			} else {
				$info = array(
					'db_idpasien' => $idpasien,
					'db_tanggal' => $this->input->post('tanggal'),
					'db_hd' => $this->input->post('hd'),
					'db_hf' => $this->input->post('hf'),
					'db_pre_beratbadan' => $this->input->post('pre_beratbadan'),
					'db_post_beratbadan' => $this->input->post('post_beratbadan'),
					'db_pre_tdarah' => $this->input->post('pre_tdarah'),
					'db_post_tdarah' => $this->input->post('post_tdarah'),
					'db_pre_bun' => $this->input->post('pre_bun'),
					'db_post_bun' => $this->input->post('post_bun'),
				);
				$this->m_dialisis_book->simpan($info);

				$data['message'] = "<div class='alert alert-info'>Data berhasil ditambah</div>";
				$data['dialisis_book'] = $this->m_dialisis_book->semua()->result();
				// $this->template->display('dialisis_book/index', $data);
				redirect('dialisis_book/index');
			}
		} else {
			$data['pasien'] = $this->m_pasien->semua()->result();
			$data['message'] = "Tambah Data Dialisis Book";
			$this->template->display('dialisis_book/tambah', $data);
		}
	}

	function edit()
	{
		$data['title'] = "Edit Data Dialisis Book";
		$this->validasi();

		if ($this->form_validation->run() == true) {
			$idpasien = $this->input->post('id');
			$tgl = $this->template->InggrisTgl($this->input->post('tanggal'));
			$info = array(
				'db_tanggal' => $this->input->post('tanggal'),
				'db_hd' => $this->input->post('hd'),
				'db_hf' => $this->input->post('hf'),
				'db_pre_beratbadan' => $this->input->post('pre_beratbadan'),
				'db_post_beratbadan' => $this->input->post('post_beratbadan'),
				'db_pre_tdarah' => $this->input->post('pre_tdarah'),
				'db_post_tdarah' => $this->input->post('post_tdarah'),
				'db_pre_bun' => $this->input->post('pre_bun'),
				'db_post_bun' => $this->input->post('post_bun'),
			);

			$this->m_dialisis_book->updateNew($idpasien, $info);

			$data['message'] = "<div class='alert alert-info'>Data Berhasil diupdate</div>";
			$data['dialisis_book'] = $this->m_dialisis_book->semua()->result();
			// $this->template->display('dialisis_book/index', $data);
			redirect('dialisis_book/index');
		} else {
			$data['message'] = "Ubah Data Dialisis Book";
		}

		$id = $this->input->get('id');
		$tgl = $this->input->get('tgl');
		$data['dialisis_book'] = $this->m_dialisis_book->cek($id, $tgl)->row_array();;
		$this->template->display('dialisis_book/edit', $data);
	}

	function hapus()
	{
		$kode = $this->input->get('kode');
		$this->m_dialisis_book->hapusNew($kode);
		redirect('dialisis_book/index');
	}

	function validasi()
	{
		$this->form_validation->set_rules('id', 'Pasien ', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
	}

	function cekLogin()
	{
		if ($this->session->userdata('is_login') == false) {
			redirect('auth/login');
		} else if ("" == $this->session->userdata('aplevel')) {
			redirect('dialisis_book/v_tidakada');
		}
	}
}
