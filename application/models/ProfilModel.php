<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilModel extends CI_Model {

	//get data user
	public function getDataUser($id)
	{

		$exe 		= $this->db->get_where('user',['user_id' => $id]);
		
		return $exe;

	}

	//simpan data
	public function simpanData($id, $nama, $email, $no_telp, $tanggal_lahir, $jk, $alamat, $password)
	{

		$data 		= array(
			'user_nama' 		 => $nama,
			'user_email' 		 => $email,
			'user_no_telp' 		 => $no_telp,
			'user_tanggal_lahir' => $tanggal_lahir,
			'user_jenis_kelamin' => $jk,
			'user_alamat' 		 => $alamat
		);

		//jika password dan konfirmasi ada isinya
		if ($password != "") {
			
			$data_password = array(
				'user_password' => $password
			);

			$data = array_merge($data, $data_password);

		}


		$this->db->where(['user_id' => $id]);
		$exe 		= $this->db->update('user', $data);

		return $exe;

	}

}
