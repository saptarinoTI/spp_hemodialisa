<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'session', 'template'));
		$this->load->model('m_user');
		$this->load->model('m_pasien');
		$this->load->model('m_dialisis_book');
		$this->load->model('m_jadwal');
		$this->load->model('m_hemodialis');
		$this->load->model('m_slider');
	}

	public function index()
	{
		$slider = $this->m_slider->get_all();
		$data = array(
			'title' => 'SPP Hemodialisa',
			'slider_data' => $slider,
		);

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/slider', $data);
		$this->load->view('home/content', $data);
		$this->load->view('home/footer', $data);
	}

	public function dialisis_book()
	{
		$id = $this->session->userdata('idpasien');
		$namapasien = $this->m_pasien->cek($id)->row_array();
		$dialisis_book = $this->m_dialisis_book->semua_idpasien($id)->result();
		$data = array(
			'title' => 'Dialisis Book',
			'dialisis_book' => $dialisis_book,
			'pagination' => $this->pagination->create_links(),
			'nama_pasien' => $namapasien['p_nama'],
		);

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/v_dialisis_book', $data);
		$this->load->view('home/footer', $data);
	}

	public function dialisis_book_tambah()
	{
		$id = $this->session->userdata('idpasien');
		$dialisis_book = $this->m_dialisis_book->semua_idpasien($id)->result();
		$data = array(
			'title' => 'Tambah Dialisis Book',
			'dialisis_book' => $dialisis_book,
			'pagination' => $this->pagination->create_links(),
		);

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/v_dialisis_book_tambah', $data);
		$this->load->view('home/footer', $data);
	}

	public function dialisis_book_edit()
	{
		$id = $this->input->get('id');
		$data['dialisis_book'] = $this->m_dialisis_book->cekNew($id)->row_array();

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/v_dialisis_book_edit', $data);
		$this->load->view('home/footer', $data);
	}

	public function dialisis_book_tambahpost()
	{
		$info = array(
			'db_idpasien' => $this->input->post('id'),
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
		redirect('home/dialisis_book');
	}

	public function dialisis_book_editpost()
	{
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
		redirect('home/dialisis_book');
	}

	public function dialisis_book_hapus()
	{
		$id = $this->input->get('id');
		$this->m_dialisis_book->hapusNew($id);
		redirect('home/dialisis_book');
	}

	public function informasi_detail($id)
	{
		$informasi = $this->m_informasi->cek($id)->row_array();
		$data = array(
			'title' => 'Informasi',
			'informasi' => $informasi,
		);

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/v_informasi_detail', $data);
		$this->load->view('home/footer', $data);
	}

	public function jadwal_pasien()
	{
		$id = $this->session->userdata('idpasien');
		$namapasien = $this->m_pasien->cek($id)->row_array();
		$jadwal = $this->m_jadwal->semua_idpasien($id)->result();
		$data = array(
			'title' => 'Jadwal Pasien Hemodialisa',
			'jadwal' => $jadwal,
			'nama_pasien' => $namapasien['p_nama'],
		);

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/v_jadwal', $data);
		$this->load->view('home/footer', $data);
	}

	public function lab_hasil()
	{
		$id = $this->session->userdata('idpasien');
		$namapasien = $this->m_pasien->cek($id)->row_array();
		$lab = $this->m_hemodialis->semua_idpasien($id)->result();
		$data = array(
			'title' => 'Hasil Lab Hemodialisis',
			'lab' => $lab,
			'nama_pasien' => $namapasien['p_nama'],
		);

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/v_lab', $data);
		$this->load->view('home/footer', $data);
	}

	public function kontak()
	{
		$data = array(
			'title' => 'Kontak',
		);

		$this->load->view('home/head', $data);
		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/navigasi_pasien', $data);
		} else {
			$this->load->view('home/navigasi', $data);
		}
		$this->load->view('home/v_kontak', $data);
		$this->load->view('home/footer', $data);
	}

	public function login_pasien()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true) {
			$user = $this->input->post('username');
			$pass = $this->input->post('password');

			$cek = $this->m_user->login_pasien($user, $pass);
			if ($cek->num_rows() > 0) {
				// Create session
				$this->session->set_userdata('is_login_pasien', true);
				$this->session->set_userdata('idpasien', $user);
				$message = "";
			} else {
				$message = "<div class='alert alert-danger'>Username atau Password salah</div>";
				$this->session->set_userdata('is_login_pasien', false);
			}
		} else {
			$message = "";
		}

		$slider = $this->m_slider->get_all();
		$data = array(
			'title' => 'SPP Hemodialisa',
			'slider_data' => $slider,
			'message' => $message,
		);

		if ($this->session->userdata('is_login_pasien') == true) {
			$this->load->view('home/head', $data);
			$this->load->view('home/navigasi_pasien', $data);
			$this->load->view('home/slider', $data);
			$this->load->view('home/content', $data);
			$this->load->view('home/footer', $data);
		} else {
			$this->load->view('home/head', $data);
			$this->load->view('home/navigasi', $data);
			$this->load->view('home/v_loginpasien', $data);
			$this->load->view('home/footer', $data);
		}
	}

	function cetaklab($id)
	{
		$data['title'] = "Cetak Form Traveling Dialisis";
		$this->load->library('pdfgenerator');

		$idpasien = $this->session->userdata('idpasien');
		$id = $id;
		$data['namapasien'] = $this->m_pasien->cek($idpasien)->row_array();
		$data['lab'] = $this->m_hemodialis->lab_idpasien($idpasien, $id)->row_array();

		$html = $this->load->view('home/cetak_lab', $data, true);
		$this->pdfgenerator->buatPDF($html, 'Lab_' . $idpasien, true);
	}

	function logout_pasien()
	{
		$this->data['title'] = "Logout";

		$this->session->sess_destroy();
		$this->session->set_flashdata('message', 'Terima Kasih');
		redirect('home', 'refresh');
	}
}
