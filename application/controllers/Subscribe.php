<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	//Subscribe
	function __construct(){
		parent::__construct();
		$this->load->model('SubscribeModel', 'subscribe');
	}


	//insert data
	public function simpan()
	{
		//data email
		$email = $this->input->post('email');

		$this->subscribe->simpanData($email);

		redirect('Home');

	}
}
