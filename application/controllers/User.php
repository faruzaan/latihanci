<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}
	public function index()
	{
		$data['contents'] = 'admin/master/user';
		$data['title'] = "Data User";
		$data['User'] = $this->M_user->getUser();
		$this->load->view('templates/index', $data);
	}
	public function tambah_aksi()
	{
		$kode = $this->input->post('kode_user');
		$nama = $this->input->post('nama_user');
		$jk = $this->input->post('jk_user');
		$ket = $this->input->post('status_user');

		$data = array(
			'kode_user' => $kode,
			'nama_user' => $nama,
			'jk_user' => $jk,
			'status_user' => $ket
		);
		$this->M_user->tambah($data);
		redirect('User/index');
	}
	function hapus($id)
	{
		$where = array('kode_user' => $id);
		$this->M_user->hapus($id);
		redirect('User/index');
	}
}
