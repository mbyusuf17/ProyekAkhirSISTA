<?php

class Seminar_model extends CI_Model{
    public $_table = 'seminar_ta';

    public function getAll(){
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function tambahSeminar()
    {
        $data = array(
            'semester' => $this->input->post('semester'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam'),
            'kategori_seminar_id' => $this->input->post('kategori_seminar_id'),
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'judul' => $this->input->post('judul'),
            'pembimbing_id' => $this->input->post('pembimbing_id'),
            'penguji1_id' => $this->input->post('penguji1_id'),
            'penguji2_id' => $this->input->post('penguji2_id'),
            'nilai_pembimbing' => $this->input->post('nilai_pembimbing'),
            'nilai_penguji1' => $this->input->post('nilai_penguji1'),
            'nilai_penguji2' => $this->input->post('nilai_penguji2'),
            'lokasi' => $this->input->post('lokasi'),
            'nilai_akhir' => $this->input->post('nilai_akhir')
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function ubahSeminar()
    {
        $data = array(
            'semester' => $this->input->post('semester'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam'),
            'kategori_seminar_id' => $this->input->post('kategori_seminar_id'),
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'judul' => $this->input->post('judul'),
            'pembimbing_id' => $this->input->post('pembimbing_id'),
            'penguji1_id' => $this->input->post('penguji1_id'),
            'penguji2_id' => $this->input->post('penguji2_id'),
            'nilai_pembimbing' => $this->input->post('nilai_pembimbing'),
            'nilai_penguji1' => $this->input->post('nilai_penguji1'),
            'nilai_penguji2' => $this->input->post('nilai_penguji2'),
            'lokasi' => $this->input->post('lokasi'),
            'nilai_akhir' => $this->input->post('nilai_akhir')
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