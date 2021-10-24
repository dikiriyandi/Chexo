<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['page'] 		= 'page/home';
		$data['web'] 		= $this->db->get('website')->row_array();
		$data['galeri'] 	= $this->db->get('galeri')->result_array();
		$data['tentang']	= $this->db->get('tentang')->row_array();

		$this->load->view('main-pages',$data);
	}
}
