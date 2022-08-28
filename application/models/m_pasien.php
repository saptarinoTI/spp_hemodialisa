<?php
class M_pasien extends CI_Model
{
	private $table = "pasien";
	private $primary = "p_id";

	function semua()
	{
		return $this->db->get($this->table);
	}

	function simpan($info)
	{
		$this->db->insert($this->table, $info);
	}

	function simpanfoto($id, $foto)
	{
		$info = array(
			'p_foto' => $foto
		);
		$this->db->where('p_id', $id);
		$this->db->update($this->table, $info);
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

	function update($id, $info)
	{
		$this->db->where('p_id', $id);
		$this->db->update($this->table, $info);
	}

	function tot_pasien()
	{
		return $this->db->count_all($this->table);
	}
}
