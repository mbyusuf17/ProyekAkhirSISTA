<?php

class Dosen_model extends CI_Model{
    public $_table = 'dosen';

    public function getAll(){
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function tambahDosen()
    {
        $data = array(
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama')
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function ubahDosen()
    {
        $data = array(
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama')
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    } 

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }
}
?>