<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LatihanModel extends CI_Model {

		public function kelas_latihan($id)
		{

			$this->db->order_by('lath_id', 'desc');
			$exe = $this->db->get_where('latihan', ['lath_kels_id' => $id]);

			return $exe;

		}

		public function detail_latihan($id)
		{

			$this->db->select('*');
			$this->db->from('latihan a');
			$this->db->join('kelas b', 'a.lath_kels_id = b.kels_id');
			$this->db->join('mata_pelajaran c', 'b.kels_mape_id = c.mape_id');
			$this->db->where('a.lath_id',$id);

			$exe = $this->db->get();

			// $exe = $this->db->get_where('latihan', ['lath_id' => $id]);

			return $exe;


		}
	

}
