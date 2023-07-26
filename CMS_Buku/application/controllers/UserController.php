<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user_name') == "") {
			redirect('AuthController');
		}
		$this->load->helper('text');
		$this->load->model('BukuModel');
		$this->load->model('KategoriModel');
	}
	public function index()
	{
		$data['user_name'] = $this->session->userdata('user_name');
		$this->load->view('users/index', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('role_id');
		session_destroy();
		redirect('AuthController');
	}
	//for the book
	public function list_buku()
	{
		$data['buku'] = $this->BukuModel->get_all_join_buku()->result();
		$this->load->view('users/list_buku', $data);
	}
	//for the kategori
	public function list_kategori()
	{
		$data['kategori'] = $this->KategoriModel->get_all_data('tbl_kategori_buku')->result();
		$this->load->view('users/list_kategori', $data);
	}
}
