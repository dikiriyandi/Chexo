<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelulusan extends CI_Controller {

	public function index()
	{
		$data['page'] = 'page/kelulusan';
		$this->load->view('main-pages',$data);
	}

	public function lulus()
	{
		$data['page'] = 'page/lulus';
		$this->load->view('main-pages',$data);
	}
}
