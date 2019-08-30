<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/index',$data);
	}
	public function barang()
	{
		$data['contents'] = 'admin/master/barang';
		$this->load->view('templates/index',$data);
	}
	 
}
