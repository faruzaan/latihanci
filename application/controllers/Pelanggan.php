<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$data['contents'] = 'admin/master/barang';
		$this->load->view('templates/index',$data);
	}
	 
}
