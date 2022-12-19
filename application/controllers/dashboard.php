<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {


	public function index()
	{
		$data['title'] = 'sl';
		$data['admin'] = $this->ModelAdmin->getSiswa()->result_array();
		$data['profile'] = $this->ModelAdmin->cekData()->row_array();

		$this->load->view('templates/dashboard',$data);
	}
	public function admin()
	{
		$data['title'] = 'sl';
		$data['profile'] = $this->ModelAdmin->cekData()->row_array();
		$this->load->view('templates/data_admin',$data);
	}
	public function siswa()
	{
		$data['title'] = 'sl';
		$data['siswa'] = $this->ModelAdmin->getSiswa()->result_array();
		$this->load->view('templates/data_siswa',$data);
	}
	
}
