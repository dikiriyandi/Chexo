<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// Load libarary pagination
		$this->load->library('paging');

		//load model latihan
		$this->load->model('LatihanModel', 'latihan');
	}

	public function index()
	{

		$id = $this->session->userdata('id');

		if ($id == NULL) {

			redirect('user/login');
		
		}

		$data['page'] 		= 'page/user/soal';
		$data['menu']		= 'kelas';

		$this->load->view('main-pages-user',$data);
	}

	public function pembahasan()
	{
		$data['page'] 		= 'page/user/pembahasan';
		$data['menu']		= 'kelas';

		$this->load->view('main-pages-user',$data);
	}

	public function selesai()
	{
		redirect('user/kelas/detail/35');

		$this->session->set_flashdata('pesanBerhasil','Jawaban berhasil disimpan, terimakasih dan tetaplah semangat');	
	}

	public function test($id_latihan)
	{

		$id 							= $this->session->userdata('id');

		// $id_latihan						= $this->input->get('id'); // id tryout mata pelajaran

		if ($id == NULL) {

			redirect('user/login');
		
		}

		if($id_latihan !== null)
		{
			// Delete session jawaban sementara
			$this->session->unset_userdata('jawaban_sementara');

			$session['id_soal'] 		= $id_latihan;
			$this->session->set_userdata($session);
		}

		$uri_segment 					= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		
		/*
		* 
		* Mengambil soal berdasarkan id latihan mata pelajaran
		* 
		*/ 

		$get 							= $this->db->where('lade_lath_id', $id_latihan);
		
		// Get soal berdasarkan id dengan pagination
		$get_one 						= $get->get('latihan_detail', 1, $uri_segment);
		// Get semua soal 
		$get_all 						= $get->get_where('latihan_detail',['lade_lath_id' => $id_latihan]);
		// Get Nama soal 				
		$get_mapel 						= $this->latihan->detail_latihan($id_latihan);

		/*
		* 
		* Set timer
		* 
		*/
		// $this->setTimer($get_mapel->row_array()['tomp_total_menit']);

		/*
		* 
		* Mengirm soal ke view
		* 
		*/
		$data['soal'] 					= $get_all->result_array();
		$data['soal_1'] 				= $get_one->result_array();
		$data['id'] 					= $id_latihan;
		$data['uri_segment'] 			= $uri_segment;
		$data['mapel'] 					= $get_mapel->row_array();

		$data['page'] 		= 'page/user/soal-1';
		$data['menu']		= 'kelas';

		$this->load->view('main-pages-user',$data);

	}

	public function setTimer($timer_end)
	{
		$timer 							= $this->session->userdata('timer');
		/*
		* Jika timer tidak ada
		*/
		if($timer === null)
		{
			$get_detik					= $this->db->get_where('try_out_mata_pelajaran',['tomp_id' => $this->session->userdata('id_soal')])->row_array()['tomp_total_detik'];

			$timer 						= time();
			$timer 						= date("Y-m-d H:i:s", $timer);
			$timer_end 					= date("Y/m/d H:i:s", strtotime("+{$timer_end} minutes {$get_detik} seconds"));
			$data['timer_end'] 			= $timer_end;
			$data['timer'] 				= $timer;
				 							
			$this->session->set_userdata($data);
		}

		return 'NTAP';
	}
}

