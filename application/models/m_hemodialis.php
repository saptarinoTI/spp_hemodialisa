<?php
class M_hemodialis extends CI_Model
{
	private $table = "hemodialis";
	private $primary1 = "h_idpasien";
	private $primary2 = "h_id";

	function semua()
	{
		$this->db->join('pasien', 'hemodialis.h_idpasien=pasien.p_id', 'left');
		$this->db->order_by('hemodialis.h_idpasien', 'asc');
		$this->db->order_by('hemodialis.h_id', 'desc');
		return $this->db->get($this->table);
	}

	function semua_idpasien($id)
	{
		$this->db->limit(10, 0);
		$this->db->order_by($this->primary2, 'DESC');
		$this->db->where($this->primary1, $id);
		return $this->db->get($this->table);
	}

	function lab_idpasien($idpasien, $id)
	{
		$this->db->join('pasien', 'hemodialis.h_idpasien=pasien.p_id', 'left');
		$this->db->where($this->primary1, $idpasien);
		$this->db->where($this->primary2, $id);
		return $this->db->get($this->table);
	}

	function simpan($info)
	{
		$this->db->insert($this->table, $info);
	}

	function cek($id1, $id2)
	{
		$this->db->where($this->primary1, $id1);
		$this->db->where($this->primary2, $id2);
		return $this->db->get($this->table);
	}

	function hapus($kode1, $kode2)
	{
		$this->db->where($this->primary1, $kode1);
		$this->db->where($this->primary2, $kode2);
		$this->db->delete($this->table);
	}

	function update($id2, $info)
	{
		// $this->db->where('h_id', $id1);
		$this->db->where($this->primary2, $id2);
		$this->db->update($this->table, $info);
	}

	function tot_hemodialis()
	{
		return $this->db->count_all($this->table);
	}
}
