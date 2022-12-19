<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mainpage extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Main Page';
		$this->load->view('tampil',$data);
	}
}
