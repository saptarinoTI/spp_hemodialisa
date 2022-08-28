<?php
class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template', 'form_validation', 'upload'));
		$this->load->model('m_user');
		$this->cekLogin();
	}

	function index()
	{
		$data['title'] = "Data User";

		//pagination
		$config['base_url'] = site_url('user/index/');
		$data['user'] = $this->m_user->semua()->result();
		$this->template->display('user/index', $data);
	}

	function tambah()
	{
		$data['title'] = "Tambah Data Users";
		$this->validasi();

		if ($this->form_validation->run() == true) {
			$user = $this->input->post('user');
			$cek = $this->m_user->cek($user);
			if ($cek->num_rows() > 0) {
				$data['message'] =
					"<div class='alert alert-danger'>username sudah digunakan</div>";
				$this->template->display('user/tambah', $data);
			} else {
				$info = array(
					'user_namauser' => $user,
					'user_password' => $this->input->post('password'),
					'user_level' => $this->input->post('level')
				);
				$this->m_user->simpan($info);

				// Update FOTO Mahasiswa
				if (!empty($_FILES['foto']['name'])) {
					$foto = $_FILES["foto"]['name'];
					$tmp_file = $_FILES["foto"]["tmp_name"];
					$size_file = $_FILES["foto"]["size"];
					$type_file = $_FILES["foto"]["type"];
					$ext = substr(strtolower(strrchr($foto, ".")), 1);
					$name = $user . '.' . $ext;
					$dir = "./assets/images/$name";
					move_uploaded_file($tmp_file, $dir);

					if ($size_file > 100000) {
						echo $foto . " <b>Gagal! file melebihi ukuran.
						Ukuran maksimal 100kb</b><br>" . "<input type='button'
						value='Kembali' onclick='history.back(-1)' />";
					} else if (file_exists("./assets/images/" . $foto)) {
						echo $foto . " <b>Gagal! File sudah ada</b><br>" .
							"<input type='button' value='Kembali' onclick='history.back(-1)' />";
					} else {
						$imgFullpath = "./assets/images/" . $foto;
					}
					$this->m_user->simpanfoto($user, $name);
				}

				$data['message'] = "<div class='alert alert-info'>Data berhasil ditambah</div>";
				$data['user'] = $this->m_user->semua()->result();
				// $this->template->display('user/index', $data);
				redirect('user/index');
			}
		} else {
			$data['message'] = "Tambah Data Users";
			$this->template->display('user/tambah', $data);
		}
	}

	function edit()
	{
		$data['title'] = "Edit Data Users";
		$this->form_validation->set_rules('user', 'Username', 'required|max_length[15]');

		$id = $this->input->get('id');

		if ($this->form_validation->run() == true) {
			$user = $this->input->post('user');
			$info = array(
				'user_password' => $this->input->post('password'),
				'user_level' => $this->input->post('level')
			);

			$this->m_user->update($id, $info);

			// Update FOTO Mahasiswa
			if (!empty($_FILES['foto']['name'])) {
				$foto = $_FILES["foto"]['name'];
				$tmp_file = $_FILES["foto"]["tmp_name"];
				$size_file = $_FILES["foto"]["size"];
				$type_file = $_FILES["foto"]["type"];
				$ext = substr(strtolower(strrchr($foto, ".")), 1);
				$name = $user . '.' . $ext;
				$dir = "./assets/images/$name";
				move_uploaded_file($tmp_file, $dir);

				if ($size_file > 100000) {
					echo $foto . " <b>Gagal! file melebihi ukuran.
					Ukuran maksimal 100kb</b><br>" . "<input type='button'
					value='Kembali' onclick='history.back(-1)' />";
				} else if (file_exists("./assets/images/" . $foto)) {
					echo $foto . " <b>Gagal! File sudah ada</b><br>" .
						"<input type='button' value='Kembali' onclick='history.back(-1)' />";
				} else {
					$imgFullpath = "./assets/images/" . $foto;
				}
				$this->m_user->simpanfoto($user, $name);
			}
			$data['message'] = "<div class='alert alert-info'>Data Berhasil diupdate</div>";
			redirect('user/index');
		} else {
			$data['message'] = "Ubah Data Users";
		}
		$data['user'] = $this->m_user->cek($id)->row_array();
		$this->template->display('user/edit', $data);
	}

	function hapus()
	{
		$kode = $this->input->post('kode');
		$detail = $this->m_user->cek($kode)->result();
		foreach ($detail as $det) :
			unlink("assets/images/" . $det->user_foto);
		endforeach;
		$this->m_user->hapus($kode);
	}

	function validasi()
	{
		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	function cekLogin()
	{
		if ($this->session->userdata('is_login') == false) {
			redirect('login');
		} else if ("" == $this->session->userdata('aplevel')) {
			redirect('user/v_tidakada');
		}
	}
}
