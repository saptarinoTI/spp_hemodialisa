<?php
class M_dialisis_book extends CI_Model
{
	private $table = "dialisis_book";
	private $primary1 = "db_idpasien";
	private $primary2 = "db_tanggal";

	function semua()
	{
		$this->db->join('pasien', 'dialisis_book.db_idpasien = pasien.p_id');
		return $this->db->get($this->table);
	}

	function semua_idpasien($id)
	{
		$this->db->limit(10, 0);
		$this->db->order_by($this->primary2, 'DESC');
		$this->db->where($this->primary1, $id);
		$this->db->join('pasien', 'dialisis_book.db_idpasien = pasien.p_id');
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

	function cekNew($id)
	{
		$this->db->where('db_id', $id);
		return $this->db->get($this->table);
	}

	function hapus($idpasien, $tgl)
	{
		$this->db->where($this->primary1, $idpasien);
		$this->db->where($this->primary2, $tgl);
		$this->db->delete($this->table);
	}

	function update($idpasien, $tgl, $info)
	{
		$this->db->where($this->primary1, $idpasien);
		$this->db->where($this->primary2, $tgl);
		$this->db->update($this->table, $info);
	}

	function updateNew($id, $info)
	{
		$this->db->where('db_id', $id);
		$this->db->update($this->table, $info);
	}

	function hapusNew($id)
	{
		$this->db->where('db_id', $id);
		$this->db->delete($this->table);
	}

	function tot_dialisis_book()
	{
		return $this->db->count_all($this->table);
	}
}
