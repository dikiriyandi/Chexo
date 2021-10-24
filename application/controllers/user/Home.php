<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$id = $this->session->userdata('id');

		if ($id == NULL) {

			redirect('user/login');
		
		}

		$data['page'] 		= 'page/user/home';
		$data['menu']		= 'home';

		$this->load->view('main-pages-user',$data);
	}
}
