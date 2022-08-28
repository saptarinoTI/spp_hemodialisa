<?php
class Pasien extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation', 'upload'));
		$this->load->model('m_pasien');
		$this->cekLogin();
	}

	function index()
	{
		$data['title'] = "Data Pasien";

		//pagination
		$config['base_url'] = site_url('pasien/index/');
		$data['pasien'] = $this->m_pasien->semua()->result();
		$this->template->display('pasien/index', $data);
	}

	function tambah()
	{
		$data['title'] = "Tambah Data Pasien";
		$this->validasi();

		if ($this->form_validation->run() == true) {
			$id = $this->input->post('id');
			$cek = $this->m_pasien->cek($id);
			if ($cek->num_rows() > 0) {
				$data['message'] =
					"<div class='alert alert-danger'>ID sudah digunakan</div>";
				$this->template->display('pasien/tambah', $data);
			} else {
				$info = array(
					'p_id' => $this->input->post('id'),
					'p_nama' => $this->input->post('nama'),
					'p_tempatlahir' => $this->input->post('tempatlahir'),
					'p_tgllahir' => $this->template->InggrisTgl($this->input->post('tgllahir')),
					'p_jkelamin' => $this->input->post('jkelamin'),
					'p_alamat' => $this->input->post('alamat'),
					'p_telpon' => $this->input->post('telpon'),
					'p_password' => $this->input->post('password')
				);
				$this->m_pasien->simpan($info);

				// Update FOTO Mahasiswa
				if (!empty($_FILES['foto']['name'])) {
					$foto = $_FILES["foto"]['name'];
					$tmp_file = $_FILES["foto"]["tmp_name"];
					$size_file = $_FILES["foto"]["size"];
					$type_file = $_FILES["foto"]["type"];
					$ext = substr(strtolower(strrchr($foto, ".")), 1);
					$name = $foto . '.' . $ext;
					$dir = "./foto_pasien/$name";
					move_uploaded_file($tmp_file, $dir);

					if ($size_file > 100000) {
						echo $foto . " <b>Gagal! file melebihi ukuran.
						Ukuran maksimal 100kb</b><br>" . "<input type='button'
						value='Kembali' onclick='history.back(-1)' />";
					} else if (file_exists("./foto_pasien/" . $foto)) {
						echo $foto . " <b>Gagal! File sudah ada</b><br>" .
							"<input type='button' value='Kembali' onclick='history.back(-1)' />";
					} else {
						$imgFullpath = "./foto_pasien/" . $foto;
					}
					$this->m_pasien->simpanfoto($id, $name);
				}

				$data['message'] = "<div class='alert alert-info'>Data berhasil ditambah</div>";
				$data['pasien'] = $this->m_pasien->semua()->result();
				// $this->template->display('pasien/index', $data);
				redirect('pasien/index');
			}
		} else {
			$data['message'] = "Tambah Data Pasien";
			$this->template->display('pasien/tambah', $data);
		}
	}

	function edit()
	{
		$data['title'] = "Edit Data Pasien";
		$this->form_validation->set_rules('id', 'ID ', 'required|max_length[16]');

		$id = $this->input->get('id');

		if ($this->form_validation->run() == true) {
			$info = array(
				'p_nama' => $this->input->post('nama'),
				'p_tempatlahir' => $this->input->post('tempatlahir'),
				'p_tgllahir' => $this->template->InggrisTgl($this->input->post('tgllahir')),
				'p_jkelamin' => $this->input->post('jkelamin'),
				'p_alamat' => $this->input->post('alamat'),
				'p_telpon' => $this->input->post('telpon'),
				'p_password' => $this->input->post('password')
			);

			$this->m_pasien->update($id, $info);

			// Update FOTO Mahasiswa
			if (!empty($_FILES['foto']['name'])) {
				$foto = $_FILES["foto"]['name'];
				$tmp_file = $_FILES["foto"]["tmp_name"];
				$size_file = $_FILES["foto"]["size"];
				$type_file = $_FILES["foto"]["type"];
				$ext = substr(strtolower(strrchr($foto, ".")), 1);
				$name = $id . '.' . $ext;
				$dir = "./foto_pasien/$name";
				move_uploaded_file($tmp_file, $dir);

				if ($size_file > 100000) {
					echo $foto . " <b>Gagal! file melebihi ukuran.
					Ukuran maksimal 100kb</b><br>" . "<input type='button'
					value='Kembali' onclick='history.back(-1)' />";
				} else if (file_exists("./foto_pasien/" . $foto)) {
					echo $foto . " <b>Gagal! File sudah ada</b><br>" .
						"<input type='button' value='Kembali' onclick='history.back(-1)' />";
				} else {
					$imgFullpath = "./foto_pasien/" . $foto;
				}
				$this->m_pasien->simpanfoto($id, $name);
			}
			$data['message'] = "<div class='alert alert-info'>Data Berhasil diupdate</div>";
			$data['pasien'] = $this->m_pasien->semua()->result();
			// $this->template->display('pasien/index', $data);
			redirect('pasien/index');
		} else {
			$data['message'] = "Ubah Data Pasien";
			$data['pasien'] = $this->m_pasien->cek($id)->row_array();
			$this->template->display('pasien/edit', $data);
		}
	}

	function hapus()
	{
		$kode = $this->input->post('kode');
		$this->m_pasien->hapus($kode);
	}

	function validasi()
	{
		$this->form_validation->set_rules('id', 'ID ', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	function cekLogin()
	{
		if ($this->session->userdata('is_login') == false) {
			redirect('auth/login');
		} else if ("" == $this->session->userdata('aplevel')) {
			redirect('pasien/v_tidakada');
		}
	}
}
