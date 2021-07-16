<?php

class Nilai_model extends CI_Model{
    public $_table = 'detail_penilaian';

    public function getAll(){
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function joinTable(){
        $this->db->select('seminar_ta.judul,  dosen.nama, penilaian.nama as kategori_nilai, detail_penilaian.*')
        -> from('detail_penilaian')
        -> join('seminar_ta','detail_penilaian.seminar_id = seminar_ta.id')
        -> join('dosen','detail_penilaian.dosen_id = dosen.id')
        -> join('penilaian','detail_penilaian.penilaian_id = penilaian.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahNilai()
    {
        $data = array(
            'penilaian_id' => $this->input->post('penilaian_id'),
            'dosen_id' => $this->input->post('dosen_id'),
            'seminar_id' => $this->input->post('seminar_id'),
            'nilai' => $this->input->post('nilai')
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function ubahNilai()
    {
        $data = array(
            'penilaian_id' => $this->input->post('penilaian_id'),
            'dosen_id' => $this->input->post('dosen_id'),
            'seminar_id' => $this->input->post('seminar_id'),
            'nilai' => $this->input->post('nilai')
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