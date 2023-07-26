<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BukuModel extends  CI_Model
{
	public function get_all_data($tabel)
	{
		$q = $this->db->get($tabel);
		return $q;
	}


	public function insert($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($table, $id)
	{
		return $this->db->get_where($table, $id);
	}

	public function update($tabel, $data, $pk, $id)
	{
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $id)
	{
		$this->db->where($id);
		$this->db->delete($tabel);
	}

	public function get_all_join_buku()
	{
		$this->db->select('tbl_buku.*, tbl_kategori_buku.kategori_nama');
		$this->db->from('tbl_buku');
		$this->db->join('tbl_kategori_buku', 'tbl_buku.kategori_buku_id = tbl_kategori_buku.kategori_buku_id', 'INNER');
		return $this->db->get();
	}
}
