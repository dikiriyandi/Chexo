<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasModel extends CI_Model {


	//semua data kelas
	public function allData()
	{

		$exe = $this->db->get('kelas');
		
		return $exe;

	}

	//data kelas siswa
	public function getData($id)
	{

		$exe = $this->db->query('SELECT c.user_nama as nama_siswa, b.kels_id, e.mape_nama as kels_nama, d.user_nama as nama_guru FROM join_kelas a, kelas b, user c, user d, mata_pelajaran e WHERE a.joke_kels_id = b.kels_id and a.joke_user_id = c.user_id and b.kels_user_id = d.user_id and b.kels_mape_id = e.mape_id');
		return $exe;

	}

	//data kelas guru
	public function getDataKelas($id)
	{

		$exe = $this->db->get_where('kelas',['kels_user_id' => $id]);

		return $exe;

	}

	//cek kelas
	public function cek_kelas($kode)
	{
		$exe = $this->db->get_where('kelas',['kels_user_id' => $id]);

		return $exe;
	}

	//join kelas siswa
	public function join_kelas($id, $kels_id)
	{

		$data = array(
			'joke_user_id' => $id ,
			'joke_kels_id' => $kels_id
		);

		$exe = $this->db->insert('join_kelas',$data);

		return $exe;

	}

	//data kelas
	public function data_kelas($id)
	{

		$this->db->select('*, b.mape_nama as kels_nama');
		$this->db->from('kelas a');
		$this->db->join('mata_pelajaran b', 'a.kels_mape_id = b.mape_id');

		$exe = $this->db->get();


		return $exe;

	}

}
