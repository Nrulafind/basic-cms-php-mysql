<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
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
	//for the aunthenticate
	public function index()
	{
		$data['user_name'] = $this->session->userdata('user_name');
		$this->load->view('admin/index', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('role_id');
		session_destroy();
		redirect('AuthController');
	}
	//for the buku 
	public function list_buku()
	{
		$data['buku'] = $this->BukuModel->get_all_join_buku()->result();
		$this->load->view('admin/buku/buku', $data);
	}
	public function add_buku()
	{
		$data['buku'] = $this->BukuModel->get_all_join_buku()->result();
		$this->load->view('admin/buku/add_buku', $data);
	}
	public function save_buku()
	{

		$kategori_buku_id = $this->input->post('kategori_buku_id');
		$judul_buku = $this->input->post('judul_buku');
		$deskripsi = $this->input->post('deskripsi');
		$jumlah = $this->input->post('jumlah');
		$file_buku = $this->input->post('file_buku');
		$buku_cover = $this->input->post('buku_cover');

		$data = array(
			'kategori_buku_id' => $kategori_buku_id,
			'user_id' => 1,
			'judul_buku' => $judul_buku,
			'deskripsi' => $deskripsi,
			'jumlah' => $jumlah,
			'file_buku' => $file_buku,
			'buku_cover' => $buku_cover,
		);
		$this->BukuModel->insert('tbl_buku', $data);
		redirect('AdminController/list_buku');
	}
	public function edit_buku($id)
	{
		$dataWhere = array('buku_id' => $id);
		$data['buku'] = $this->BukuModel->get_by_id('tbl_buku', $dataWhere)->result();
		$this->load->view('admin/buku/edit_buku', $data);
	}
	public function edit_proses_buku()
	{
		$buku_id = $this->input->post('buku_id');
		$kategori_buku_id = $this->input->post('kategori_buku_id');
		$judul_buku = $this->input->post('judul_buku');
		$deskripsi = $this->input->post('deskripsi');
		$jumlah = $this->input->post('jumlah');
		$file_buku = $this->input->post('file_buku');
		$buku_cover = $this->input->post('buku_cover');
		$data = array(
			'buku_id' => $buku_id,
			'kategori_buku_id' => $kategori_buku_id,
			'judul_buku' => $judul_buku,
			'deskripsi' => $deskripsi,
			'jumlah' => $jumlah,
			'file_buku' => $file_buku,
			'buku_cover' => $buku_cover,
		);
		$this->BukuModel->update('tbl_buku', $data, 'buku_id', $buku_id);
		redirect('AdminController/list_buku');
	}
	public function delete_buku($id)
	{
		$dataWhere = array('buku_id' => $id);
		$this->BukuModel->delete('tbl_buku', $dataWhere);
		redirect('AdminController/list_buku');
	}


	//for the kategori
	public function list_kategori()
	{
		$data['kategori'] = $this->KategoriModel->get_all_data('tbl_kategori_buku')->result();
		$this->load->view('admin/kategori/kategori', $data);
	}
	public function add_kategori()
	{
		$this->load->view('admin/kategori/add_kategori');
	}
	public function save_kategori()
	{

		$kategori_buku_id = $this->input->post('kategori_buku_id');
		$kategori_nama = $this->input->post('kategori_nama');

		$data = array(
			'kategori_buku_id' => $kategori_buku_id,
			'kategori_nama' => $kategori_nama
		);
		$this->KategoriModel->insert('tbl_kategori_buku', $data);
		redirect('AdminController/list_kategori');
	}
	public function edit_kategori($id)
	{
		$dataWhere = array('kategori_buku_id' => $id);
		$data['kategori'] = $this->KategoriModel->get_by_id('tbl_kategori_buku', $dataWhere)->result();
		$this->load->view('admin/kategori/edit_kategori', $data);
	}
	public function edit_proses_kategori()
	{
		$kategori_buku_id = $this->input->post('kategori_buku_id');
		$kategori_nama = $this->input->post('kategori_nama');


		$data = array(
			'kategori_buku_id' => $kategori_buku_id,
			'kategori_nama' => $kategori_nama
		);
		$this->KategoriModel->update('tbl_kategori_buku', $data, 'kategori_buku_id', $kategori_buku_id);
		redirect('AdminController/list_kategori');
	}
	public function delete_kategori($id)
	{
		$dataWhere = array('kategori_buku_id' => $id);
		$this->KategoriModel->delete('tbl_kategori_buku', $dataWhere);
		redirect('AdminController/list_kategori');
	}
}
