<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertama extends CI_Controller {

	public function index()
	{
		$this->load->view('pesan_view');
	}

}
