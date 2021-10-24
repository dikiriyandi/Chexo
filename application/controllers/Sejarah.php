<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index()
	{
		$data['page'] = 'page/sejarah';
		$this->load->view('main-pages',$data);
	}
}
