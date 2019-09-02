<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pelanggan');
	}
	public function index()
	{
		$data['contents'] = 'admin/master/pelanggan';
		$data['title'] = "Data Pelanggan";
		$data['pelanggan'] = $this->M_pelanggan->getPelanggan();
		$this->load->view('templates/index', $data);
	}
	public function tambah_aksi()
	{
		$kode = $this->input->post('kode_pelanggan');
		$nama = $this->input->post('nama_pelanggan');
		$jk = $this->input->post('jk_pelanggan');
		$ket = $this->input->post('ket_pelanggan');

		$data = array(
			'kode_pelanggan' => $kode,
			'nama_pelanggan' => $nama,
			'jk_pelanggan' => $jk,
			'ket_member' => $ket
		);
		$this->M_pelanggan->tambah($data);
		redirect('Pelanggan/index');
	}
	function hapus($id)
	{
		$where = array('kode_pelanggan' => $id);
		$this->M_pelanggan->hapus($id);
		redirect('Pelanggan/index');
	}
}
