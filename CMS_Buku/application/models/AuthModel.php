<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends  CI_Model
{

	public function cek_user($data)
	{
		$query = $this->db->get_where('tbl_users', $data);
		return $query;
	}
	public function daftar($data)
	{
		$this->db->insert('tbl_users', $data);
		//return $query;
	}
}
