<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubscribeModel extends CI_Model {

	public function simpanData($email)
	{
		$data = array(
			'subs_email' => $email 
		);

		$exe = $this->db->insert('subscribe',$data);
		
		return $exe;
	}

}
