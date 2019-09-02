<?php
class M_pelanggan extends ci_model
{
    function getPelanggan()
    {
        return $this->db->get('tb_pelanggan')->result();
    }
    function getSatuPelanggan($id)
    {
        return $this->db->get_where('tb_pelanggan', array('kode_pelanggan'->$id));
    }
    function hapus($id)
    {
        $this->db->where('kode_pelanggan', $id);
        return $this->db->delete('tb_pelanggan');
    }
    function tambah($data)
    {
        return $this->db->insert('tb_pelanggan', $data);
    }
    function edit($data, $id)
    {
        $this->db->where('kode_pelanggan', $id);
        return $this->db->update('tb_pelanggan');
    }
}
