<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
	}

	public function index()
	{
		$data['contents'] = 'admin/master/barang';
		$data['title'] = "Data Barang";
		$data['barang'] = $this->M_barang->getBarang();
		$this->load->view('templates/index', $data);
	}
	public function tambah_aksi()
	{
		$kode = $this->input->post('kode_barang');
		$nama = $this->input->post('nama_barang');
		$jenis = $this->input->post('jenis_barang');
		$harga = $this->input->post('harga_barang');
		$stock = $this->input->post('stock_barang');

		$data = array(
			'kode_nama' => $kode,
			'nama' => $nama,
			'jenis' => $jenis,
			'harga' => $harga,
			'stock' => $stock
		);
		$this->M_barang->tambah($data);
		redirect('Barang/index');
	}
	private function getkode()
	{
		$data['barang'] = $this->M_barang->getBarang();
	}
	function hapus($id)
	{
		$where = array('kode_nama' => $id);
		$this->M_barang->hapus($id);
		redirect('Barang/index');
	}
	function edit($id)
	{
		$where = array('kode_nama' => $id);
		$data['barang'] = $this->M_barang->edit_data($where, 'tb_barang')->result();
		$this->load->view('Barang/index', $data);
	}
	function update()
	{
		$id = $this->input->post('kode_nama');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$harga = $this->input->post('harga');
		$stock = $this->input->post('stock');

		$data = array(
			'nama' => $nama,
			'jenis' => $jenis,
			'harga' => $harga,
			'stock' => $stock
		);

		$where = array(
			'kode_nama' => $id
		);

		$this->M_Barang->update_data($where, $data, 'tb_barang');
		redirect('Barang/index');
	}
}
