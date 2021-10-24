<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('KelasModel', 'kelas');
		$this->load->model('ProfilModel', 'profil');
		$this->load->model('LatihanModel', 'latihan');
	}

	public function index()
	{
		$id = $this->session->userdata('id');

		if ($id == NULL) {

			redirect('user/login');
		
		}

		$cek = $this->profil->getDataUser($id)->row_array();

		if ($cek['user_status'] == 2) {
			
			$data['page'] 		= 'page/user/kelas';
			$data['menu']		= 'kelas';
			$data['kelas']		= $this->kelas->getData($id)->result_array();

		}else{

			$data['page'] 		= 'page/user/kelas-guru';
			$data['menu']		= 'kelas';
			$data['kelas']		= $this->kelas->getDataKelas($id)->result_array();

		}


		$this->load->view('main-pages-user',$data);
	}

	public function detail($id_kels)
	{

		$id = $this->session->userdata('id');

		if ($id == NULL) {

			redirect('user/login');
		
		}

		$datakelas 		 	= $this->kelas->data_kelas($id_kels)->row_array();
		$datalatihan		= $this->latihan->kelas_latihan($id_kels)->result_array();

		$data['page'] 		= 'page/user/kelas-detail';
		$data['menu']		= 'kelas';
		$data['kelas']		= $datakelas;
		$data['latihan']	= $datalatihan;

		$this->load->view('main-pages-user',$data);
	}

	public function kelas_latihan($id_latihan)
	{

		$id = $this->session->userdata('id');

		if ($id == NULL) {

			redirect('user/login');
		
		}

		$datalatihan		= $this->latihan->detail_latihan($id_latihan)->row_array();

		$data['page'] 		= 'page/user/kelas-latihan';
		$data['menu']		= 'kelas';
		$data['latihan']	= $datalatihan;

		$this->load->view('main-pages-user',$data);


	}

	public function cariKelas()
	{
		$kode = $this->input->post('kode');

		$cek = $this->kelas->cek_kelas($kode)->row_array();

		if ($cek) {
			
			$exe = $this->kelas->join_kelas($id, $kels_id);

			if ($exe) {

				$this->session->set_flashdata('pesanBerhasil','Anda berhasil join kedalam kelas');	
				redirect('user/kelas');

			}
			else{

				$this->session->set_flashdata('pesanGagal','Anda gagal join kedalam kelas');	
				redirect('user/kelas');

			}
		}
		else{

			$this->session->set_flashdata('pesanGagal','Tidak Menemukan kode kelas yang anda masukan');	
			redirect('user/kelas');

		}
	}
}
