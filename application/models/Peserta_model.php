<?php

class Peserta_model extends CI_Model{
    public $_table = 'peserta_seminar';

    public function getAll(){
        return $this->db->get($this->_table)->result_array();
    }

    public function joinSeminar(){
        $this->db->select('seminar_ta.judul,  peserta_seminar.*')
        -> from('peserta_seminar')
        -> join('seminar_ta','peserta_seminar.seminar_id = seminar_ta.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function tambahPeserta()
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'seminar_id' => $this->input->post('seminar_id'),
            'kehadiran' => $this->input->post('kehadiran')
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function ubahPeserta()
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'seminar_id' => $this->input->post('seminar_id'),
            'kehadiran' => $this->input->post('kehadiran')
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