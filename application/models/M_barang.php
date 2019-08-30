<?php
class M_barang extends ci_model
{
	function getBarang()
	{
		return $this->db->get('tb_barang')->result();
	}
	function getSatuBarang($id)
	{
		return $this->db->get_where('tb_barang',array('kode_nama'->$id));
	}
	function hapus($id)
	{
		$this->db->where('kode_nama',$id);
		return $this->db->delete('tb_barang');
	}
	function tambah($data)
	{
		return $this->db->insert('tb_barang',$data);
	}
	function edit($data,$id)
	{
		$this->db->where('kode_nama',$id);
		return $this->db->update('tb_barang');
	}
}
