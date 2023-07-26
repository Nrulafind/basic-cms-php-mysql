<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function register()
	{
		$this->load->view('template/header');
		$this->load->view('register');
		$this->load->view('template/footer');
	}
	public function register_add()
	{
		$data = array(
			'user_name' => $this->input->post('user_name', TRUE),
			'user_password' => $this->input->post('user_password', TRUE),
			'role_id' => 2
		);
		$hasil = $this->AuthModel->daftar($data);
		if ($hasil == TRUE) {
			redirect('AuthController');
		} else {
			echo "Register gagal ";
		}
	}


	public function cek_login()
	{
		$data = array(
			'user_name' => $this->input->post('user_name', TRUE),
			'user_password' => $this->input->post('user_password', TRUE)
		);
		$hasil = $this->AuthModel->cek_user($data);
		if ($hasil->num_rows() == 1) {

			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['user_id'] = $sess->user_id;
				$sess_data['user_name'] = $sess->user_name;
				$sess_data['role_id'] = $sess->role_id;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('role_id') == 1) {
				redirect('AdminController');
			} elseif ($this->session->userdata('role_id') == 2) {
				redirect('UserController');
			}
		} else {
			echo "<script>alert('Gagal login: Cek username, password!');</script>";
			redirect('login');
		}
	}
}
