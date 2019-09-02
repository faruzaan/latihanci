<?php
class M_user extends ci_model
{
    function getuser()
    {
        return $this->db->get('tb_user')->result();
    }
    function getSatuuser($id)
    {
        return $this->db->get_where('tb_user', array('kode_user'->$id));
    }
    function hapus($id)
    {
        $this->db->where('kode_user', $id);
        return $this->db->delete('tb_user');
    }
    function tambah($data)
    {
        return $this->db->insert('tb_user', $data);
    }
    function edit($data, $id)
    {
        $this->db->where('kode_user', $id);
        return $this->db->update('tb_user');
    }
}
