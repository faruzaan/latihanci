<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_barang');
	}

	public function index()
	{
		$data['contents'] = 'admin/master/barang';
		$data['title'] = "Data Barang";
		$data['barang'] = $this->M_barang->getBarang();
		$this->load->view('templates/index',$data);
	}
	 
}
