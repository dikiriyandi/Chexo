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

	public function test()
	{

		$id 							= $this->session->userdata('id');

		$id_latihan						= $this->input->get('id'); // id tryout mata pelajaran

		if ($id == NULL) {

			redirect('user/login');
		
		}

		if($id_latihan !== null)
		{
			// Delete session jawaban sementara
			$this->session->unset_userdata('jawaban_sementara');

			$session['id_latihan'] 		= $id_latihan;
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
			$get_detik					= $this->db->get_where('latihan',['lath_id' => $this->session->userdata('id_latihan')])->row_array()['lath_detik'];

			$timer 						= time();
			$timer 						= date("Y-m-d H:i:s", $timer);
			$timer_end 					= date("Y/m/d H:i:s", strtotime("+{$timer_end} minutes {$get_detik} seconds"));
			$data['timer_end'] 			= $timer_end;
			$data['timer'] 				= $timer;
				 							
			$this->session->set_userdata($data);
		}

		return 'NTAP';
	}









	/*
	 *
	* Kirim Jawaban
	*
	*/

	public function jawab()
	{

		$status_jawaban 				= TRUE;
		$jawaban_sementara 				= array();

		/*
		* 
		* Jawaban
		* 
		*/
		$id 							= $this->input->post('id');
		$id_soal 						= $this->input->post('id_soal');
		$jawaban 						= $this->input->post('jawaban');
		

		// Session data soal yang sudah ada
		$data 							= $this->session->userdata('jawaban_sementara');
		


		/*
		*
		* Jika jawaban sebelumnya belum ada
		*
		*/
		if ($data === null) 
		{
			// Simpan session session soal
			$data 						= array('jawaban_sementara' 		=> array(
														0 	=> array(
															'id_soal' 		=> $id_soal, 
															'data' 			=> array(
																'id' 		=> $id, 
																'jawaban' 	=> $jawaban
															)
														)
													) 
												);

			$this->session->set_userdata($data);
		}
		else
		{
			// Session data soal yang sudah ada
			$data 						= $this->session->userdata('jawaban_sementara');
			

			
			/*
			*
			* Jawaban sementara sebelumnya
			*
			*/ 
			array_push($jawaban_sementara, $data);
			
			if(isset($jawaban_sementara[0][0]))
			{
				$jawaban_sementara 		= $jawaban_sementara[0]; 
			}

			
			// Jika jawaban sebelumnya ada 
			foreach($jawaban_sementara as $key => $value)
			{
				// Cek apakah jawaban soal sebelumnya sama dengan yang sekarang
				if($value['id_soal'] === $id_soal)
				{
					/*
					*
					* Menentukan status soal apakah soal ini sudah diisi sebelumnya atau belum
					*
					*/
					$status_jawaban 	= TRUE;


					/*
					*
					* Jika isi soal yang sudah di isi sebelumnya berubah
					*
					*/
					if($value['data']['jawaban'] !== $jawaban)
					{
						/*
						*
						* Replace jawaban sebelumnya dengan yang baru
						*
						*/
						$jawaban_sementara[$key]['data']['jawaban'] = $jawaban;


						$new_data 		= array('jawaban_sementara' => $jawaban_sementara);

						/*
						*
						* Set session jawaban terbaru
						*
						*/ 

						$this->session->set_userdata($new_data);

						// STOP
						if($value['data']['jawaban'] !== $jawaban) break;
					}
					else
					{
						// STOP
						break;
					}
				}
				else
				{
					$status_jawaban 	= FALSE;	
				}
			}

			/*
			*
			* Menambahkan jawaban di soal yang baru dengan jawaban yang baru
			*
			*/
			if($status_jawaban !== TRUE)
			{
				$jawaban_baru 			= array('id_soal' 		=> $id_soal, 
												'data' 			=> array(
																		'id' => $id, 
																		'jawaban' => $jawaban
																	));

				array_push($jawaban_sementara, $jawaban_baru);
				
				$new_data 				= array('jawaban_sementara' => $jawaban_sementara);
				
				/*
				*
				* Set session jawaban terbaru
				*
				*/ 

				$this->session->set_userdata($new_data);	
			}
		}

		echo json_encode(1);


	}

	/*
	*
	* Fungsi untuk menyimpan jawaban permanent
	*
	*/
	public function simpan_jawaban()
	{

		$jawaban 						= $this->session->userdata('jawaban_sementara');

		/*
		*
		* ID Latihan dan ID Pengguna
		*
		*/
		$id_latihan 					= $jawaban[0]['data']['id'];
		$id_pengguna 					= $this->session->userdata('id');


		/*
		*
		* Simpan jawaban latihan
		*
		*/
		$data['laja_lath_id'] 			= $id_latihan;
		$data['laja_user_id'] 			= $id_pengguna;
		$data['laja_nilai'] 			= 0;
		// $data['toja_keterangan'] 		= '-';

		if($jawaban == NULL){
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Anda sudah mengerjakan ini sebelumnya</div>');

			$id = $this->input->get('id');
			$ky = "user/kelas_lathihan/$id";
			redirect($ky);
			die();
		}else{
			$exe_jawaban 					= $this->db->insert('latihan_jawaban', $data);
			$id_jawaban 					= $this->db->insert_id();
		}

		


		/*
		*
		* Simpan jawaban detail latihan
		*
		*/
		foreach($jawaban as $jawaban)
		{
			$data2['lajd_laja_id'] 		= $id_jawaban;
			$data2['lajd_lath_id'] 		= $jawaban['id_soal'];
			$data2['lajd_jawaban'] 		= $jawaban['data']['jawaban'];
			$data2['lajd_status'] 		= '-';

			$exe_jawaban_detail 		= $this->db->insert('latihan_jawaban_detail', $data2);
		}

		$this->cek_jawaban($lath_id, $laja_id);

		// redirect("soal_test/pembahasan/{$id_jawaban}",'refresh');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Anda sudah mengerjakan soal, nantikan hasilnya ya!</div>');

		$id_latihan						= $this->session->userdata('id_latihan');

		
		// Unset Timer
		// $this->session->unset_userdata('timer');
		// $this->session->unset_userdata('timer_end');
		
		redirect("pilih-mata-pelajaran/{$id_tryout}",'refresh');
	}





	/*
	*
	* Cek Jawaban
	*
	*/
	public function cek_jawaban($id_latihan, $id_jawaban)
	{
		// Jawaban sementara dan Jawaban benar
		$jawaban_benar 					= $this->db->get_where('latihan_detail', ['lade_lath_id' => $id_latihan])->result_array();
		$jawaban_sementara				= $this->db->get_where('latihan_jawaban_detail', ['lajd_laja_id' => $id_jawaban])->result_array();

		//total soal
		$total_soal_latihan				= $this->db->get_where('latihan_detail', ['lade_lath_id' => $id_latihan])->result_array();

		$penilaian 						= 100 / (int)count($total_soal_latihan);

		// Jawaban akhir
		$jawaban_akhir 					= array();

		/*
		*
		* Total soal dan total soal yang terjawab 
		*
		*/
		$total_soal 					= count($jawaban_benar);
		$soal_terjawab 					= count($jawaban_sementara);
		

		/*
		*
		* Prosses Cek Jawaban
		*
		*/
		foreach($jawaban_sementara as $js)
		{
			foreach($jawaban_benar as $jb)
			{
				if($js['lajd_lath_id'] === $jb['lade_lath_id'])
				{
					if($js['lajd_jawaban'] === $jb['lade_jawaban'])
					{
						$status_jawaban = array(
							'jawaban_id' 	=> $js['lajd_id'],
							'jawaban_isi' 	=> $js['lajd_jawaban'],
							'jawaban_benar' => $jb['lade_jawaban'],
							'status' 		=> 'BENAR'
						);
					}
					else
					{
						$status_jawaban = array(
							'jawaban_id' => $js['lajd_id'],
							'jawaban_isi' => $js['lajd_jawaban'],
							'jawaban_benar' => $jb['lade_jawaban'],
							'status' 		 => 'SALAH',
						);	
					}

					array_push($jawaban_akhir, $status_jawaban);
				}
			}
		}


		/*
		*
		* Rubah status jawaban
		*
		*/
		foreach($jawaban_akhir as $ja)
		{
			$exe_jawaban_akhir 			= $this->db->where('tojd_id', $ja['jawaban_id']);
			$exe_jawaban_akhir 			= $this->db->update('try_out_jawaban_detail', ['tojd_status' => $ja['status'],'tojd_nilai' => $ja['jawaban_nilai']]);
		}

		/*
		*
		* Penilaian
		*
		*/
		// $get_status 					= $this->db->get_where('try_out_jawaban_detail', ['tojd_toja_id' => $id_jawaban, 'tojd_status' => 'BENAR'])->num_rows();
		$get_nilai						= $this->db->query("select sum(tojd_nilai) as jumlah from try_out_jawaban_detail where tojd_toja_id=$id_jawaban")->row_array();

		$nilai_akhir 					= $get_nilai['jumlah'];

		// Nilai akhir
		$exe_nilai_akhir 				= $this->db->where('toja_id', $id_jawaban)
													->update('try_out_jawaban', [
														'toja_nilai' => $nilai_akhir
													]);


		return TRUE;
	}
}
