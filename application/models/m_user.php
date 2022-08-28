<?php
class M_user extends CI_Model
{
	private $table = "user";
	private $primary = "user_namauser";

	function semua()
	{
		return $this->db->get($this->table);
	}

	function simpan($info)
	{
		$this->db->insert($this->table, $info);
	}

	function simpanfoto($user, $foto)
	{
		$info = array(
			'user_foto' => $foto
		);
		//$this->db->having('m_foto', $upload['file']['file_name']);
		$this->db->where('user_namauser', $user);
		$this->db->update('user', $info);
	}

	function cek($id)
	{
		$this->db->where($this->primary, $id);
		return $this->db->get($this->table);
	}

	function hapus($kode)
	{
		$this->db->where($this->primary, $kode);
		$this->db->delete($this->table);
	}

	function update($user, $info)
	{
		$this->db->where('user_namauser', $user);
		$this->db->update('user', $info);
	}

	function login($user, $pass, $level)
	{
		$this->db->where('user_namauser', $user);
		$this->db->where('user_password', $pass);
		$this->db->where('user_level', $level);
		return $this->db->get($this->table);
	}

	function login_pasien($user, $pass)
	{
		$this->db->where('p_id', $user);
		$this->db->where('p_password', $pass);
		return $this->db->get('pasien');
	}

	function updatePassword($username, $info)
	{
		$this->db->where('user_namauser', $username);
		$this->db->update($this->table, $info);
	}

	function tot_user()
	{
		return $this->db->count_all('user');
	}

	function cekPassword($username, $lama, $level)
	{
		$this->db->where('user_namauser', $username);
		$this->db->where('user_password', $lama);
		return $this->db->get($this->table);
	}

	function total_rows($q = NULL)
	{
		$this->db->like('user_namauser', $q);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
}
