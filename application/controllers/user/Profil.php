<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('ProfilModel', 'profil');
	}

	public function index()
	{

		$id = $this->session->userdata('id');

		if ($id == NULL) {

			redirect('user/login');
		
		}

		//load page
		$data['page'] 		= 'page/user/profil';
		//menu
		$data['menu']		= 'profil';

		//get data user
		$id 				= $this->session->userdata('id');
		$data['user']		= $this->profil->getDataUser($id)->row_array();

		// data daftar ulang
		// $dataid 			= $this->db->get_where('user',['user_id' => $id])->row_array();
		// $data['dafu']		= $this->db->get_where('daftar_ulang',['dafu_user_nomor' => $dataid['user_nomor']])->row_array();

		$this->load->view('main-pages-user',$data);
	}

	public function daftarulang()
	{
		$nomor 				= $this->input->post('nomor');
		$data				= $this->db->get_where('daftar_ulang',['dafu_user_nomor' => $nomor])->row_array();

		echo json_encode($data);
	}

	public function simpan_profil()
	{
		$id 				= $this->input->post('id');
		$nama				= $this->input->post('nama');
		$email 				= $this->input->post('email');
		$no_telp 			= $this->input->post('no_telp');
		$tanggal_lahir 		= $this->input->post('tanggal_lahir');
		$jk					= $this->input->post('jenis_kelamin');
		$alamat 			= $this->input->post('alamat');
		$password			= $this->input->post('password');
		$konfirmasi_password= $this->input->post('konfirmasi_password');

		if ($password != null && $konfirmasi_password != null) {
		
			if ($password != $konfirmasi_password) {
				
				$this->session->set_flashdata('pesanGagal','Password tidak cocok dengan Konfirmasi Password');	
				redirect('user/profil');

			}

		}


		$exe = $this->profil->simpanData($id, $nama, $email, $no_telp, $tanggal_lahir, $jk, $alamat, $password);

		if ($exe) {
			$this->session->set_flashdata('pesanBerhasil','Data berhasil disimpan');	
			redirect('user/profil');

		}
		else{

			$this->session->set_flashdata('pesanGagal','Data gagal disimpan');	
			redirect('user/profil');
		}

	}

	public function simpan()
	{
		$nama				= $this->input->post('nama');
		$jk					= $this->input->post('jenis_kelamin');
		$nisn				= $this->input->post('nisn');
		$asal_sekolah		= $this->input->post('asal_sekolah');
		$nik				= $this->input->post('nik');
		$no_kk				= $this->input->post('no_kk');
		$tempat				= $this->input->post('tempat');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$no_akta			= $this->input->post('no_akta');
		$agama				= $this->input->post('agama');
		$no_ijazah			= $this->input->post('no_ijazah');
		$no_skhun			= $this->input->post('no_skhun');
		$nama_ibu_kandung	= $this->input->post('nama_ibu_kandung');
		$anak_ke			= $this->input->post('anak_ke');
		$dari				= $this->input->post('dari');
		$alamat				= $this->input->post('alamat');
		$tempat_tinggal		= $this->input->post('tempat_tinggal');
		$moda_transportasi	= $this->input->post('moda_transportasi');
		$no_kip				= $this->input->post('no_kip');
		$no_pkh				= $this->input->post('no_pkh');
		$no_kks				= $this->input->post('no_kks');
		$nama_ayah			= $this->input->post('nama_ayah');
		$nik_ayah			= $this->input->post('nik_ayah');
		$pendidikan_ayah	= $this->input->post('pendidikan_ayah');
		$tahun_lahir_ayah	= $this->input->post('tl_ayah');
		$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
		$penghasilan_ayah	= $this->input->post('penghasilan_ayah');
		$nama_ibu			= $this->input->post('nama_ibu');
		$nik_ibu			= $this->input->post('nik_ibu');
		$pendidikan_ibu		= $this->input->post('pendidikan_ibu');
		$tahun_lahir_ibu	= $this->input->post('tl_ibu');
		$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
		$penghasilan_ibu	= $this->input->post('penghasilan_ibu');
		$nama_wali			= $this->input->post('nama_wali');
		$nik_wali			= $this->input->post('nik_wali');
		$pendidikan_wali	= $this->input->post('pendidikan_wali');
		$tahun_lahir_wali	= $this->input->post('tl_wali');
		$pekerjaan_wali		= $this->input->post('pekerjaan_wali');
		$penghasilan_wali	= $this->input->post('penghasilan_wali');
		$no_telp			= $this->input->post('no_telp');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');
		$tb					= $this->input->post('tb');
		$bb					= $this->input->post('bb');
		$lk					= $this->input->post('lk');
		$jarak				= $this->input->post('jarak');
		$waktu				= $this->input->post('waktu');
		$jumlah				= $this->input->post('jumlah');


		$data				= array(
			'dafu_nama' => $nama,
			'dafu_jenis_kelamin' => $jk,
			'dafu_user_nomor' =>$nisn,
			'dafu_asal_sekolah' => $asal_sekolah,
			'dafu_nik' => $nik,
			'dafu_no_kk' => $no_kk,
			'dafu_tempat_tanggal_lahir' => $tempat . ', ' . $tanggal_lahir,
			'dafu_no_akta_lahir' => $no_akta,
			'dafu_agama' => $agama,
			'dafu_no_ijazah' => $no_ijazah,
			'dafu_no_skhun' => $no_skhun,
			'dafu_nama_ibu_kk' => $nama_ibu_kandung,
			'dafu_anak_ke' => $anak_ke . ' dari ' . $dari,
			'dafu_alamat' => $alamat,
			'dafu_tempat_tinggal' => $tempat_tinggal,
			'dafu_moda_transportasi' => $moda_transportasi,
			'dafu_no_kip' => $no_kip,
			'dafu_no_pkh' => $no_pkh,
			'dafu_no_kks' => $no_kks,
			'dafu_nama_ayah' => $nama_ayah,
			'dafu_nik_ayah' => $nik_ayah,
			'dafu_pendidikan_ayah' => $pendidikan_ayah,
			'dafu_tahun_lahir_ayah' => $tahun_lahir_ayah,
			'dafu_pekerjaan_ayah' => $pekerjaan_ayah,
			'dafu_penghasilan_ayah' => $penghasilan_ayah,
			'dafu_nama_ibu' => $nama_ibu,
			'dafu_nik_ibu' => $nik_ibu,
			'dafu_pendidikan_ibu' => $pendidikan_ibu,
			'dafu_tahun_lahir_ibu' => $tahun_lahir_ibu,
			'dafu_pekerjaan_ibu' => $pekerjaan_ibu,
			'dafu_penghasilan_ibu' => $penghasilan_ibu,
			'dafu_nama_wali' => $nama_wali,
			'dafu_nik_wali' => $nik_wali,
			'dafu_pendidikan_wali' => $pendidikan_wali,
			'dafu_tahun_lahir_wali' => $tahun_lahir_wali,
			'dafu_pekerjaan_wali' => $pekerjaan_wali,
			'dafu_penghasilan_wali' => $penghasilan_wali, 
			'dafu_no_telp' => $no_telp,
			'dafu_no_hp' => $no_hp,
			'dafu_email' => $email,
			'dafu_tb' => $tb,
			'dafu_bb' => $bb,
			'dafu_lk' => $lk,
			'dafu_jarak_rumah' => $jarak,
			'dafu_waktu_tempuh' => $waktu,
			'dafu_jumlah_saudara' => $jumlah
		);

		$exe = $this->db->insert('daftar_ulang',$data);

		if ($exe) {
			$this->session->set_flashdata('pesanBerhasil','Data berhasil disimpan');	
			redirect('user/profil');

		}
		else{

			$this->session->set_flashdata('pesanGagal','Data gagal disimpan');	
			redirect('user/profil');
		}
	}
}
