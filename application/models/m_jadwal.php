<?php
class M_jadwal extends CI_Model
{
	private $table = "jadwal";
	private $primary1 = "j_idpasien";
	private $primary2 = "j_tgl";

	function semua()
	{
		$this->db->join('pasien', 'jadwal.j_idpasien = pasien.p_id');
		$this->db->order_by($this->primary2, 'DESC');
		return $this->db->get($this->table);
	}

	function semua_idpasien($id)
	{
		$this->db->limit(10, 0);
		$this->db->order_by($this->primary2, 'DESC');
		$this->db->where($this->primary1, $id);
		$this->db->join('pasien', 'jadwal.j_idpasien = pasien.p_id');
		return $this->db->get($this->table);
	}

	function simpan($info)
	{
		$this->db->insert($this->table, $info);
	}

	function cek($idpasien, $tgl)
	{
		$this->db->where($this->primary1, $idpasien);
		$this->db->where($this->primary2, $tgl);
		return $this->db->get($this->table);
	}

	function hapus($idpasien, $tgl)
	{
		$this->db->where($this->primary1, $idpasien);
		$this->db->where($this->primary2, $tgl);
		$this->db->delete($this->table);
	}

	function update($idpasien, $info)
	{
		$this->db->where($this->primary1, $idpasien);
		$this->db->update($this->table, $info);
	}

	function tot_jadwal()
	{
		return $this->db->count_all($this->table);
	}
}
