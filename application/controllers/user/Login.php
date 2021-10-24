<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$id = $this->session->userdata('id');

		if ($id) {

			redirect('user/home');
		
		}

		$this->load->view('page/user/login');
	}

	public function masuk()
	{
		$nomor	= $this->input->post('nomor');
		$pass 	= $this->input->post('pass');

		$cek 	= $this->db->get_where('user',['user_nomor' => $nomor , 'user_password' => $pass])->row_array();

		if ($cek) {

			$exe = $this->db->get_where('user',['user_nomor' => $nomor , 'user_password' => $pass])->row_array();

			$data = array(
				'id' => $exe['user_id'] 
			);

			$this->session->set_userdata($data);

			redirect('user/home');

		}else{

			$this->session->set_flashdata('pesanGagal','Login Gagal, periksa kembali Nomor Identitas dan Password anda');	
			redirect('user/login');

		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->load->view('page/user/login');
	}
}
