<?php

class Nilai extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('nilai_model');
    }

    public function index()
    {
        // $data['list_nilai'] = $this->nilai_model->getAll();
        $data['list_nilai'] = $this->nilai_model->joinTable();

        $this->load->view('layout/header');
        $this->load->view('nilai/nilai', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('penilaian_id', 'Penilaian', 'required');
        $validation->set_rules('dosen_id', 'Dosen', 'required');
        $validation->set_rules('seminar_id', 'Seminar', 'required');
        $validation->set_rules('nilai', 'Nilai', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->model('dosen_model');
            $data['list_dosen'] = $this->dosen_model->getAll();

            $this->load->model('seminar_model');
            $data['list_seminar'] = $this->seminar_model->getAll();

            $this->load->model('penilaian_model');
            $data['list_penilaian'] = $this->penilaian_model->getAll();

            $this->load->view('layout/header');
            $this->load->view('nilai/tambah', $data);
            $this->load->view('layout/footer');
        } else {
          $this->nilai_model->tambahNilai();
          redirect('nilai');
        }
    }

    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['nilai'] = $this->nilai_model->getById($id);

        $validation->set_rules('penilaian_id', 'Penilaian', 'required');
        $validation->set_rules('dosen_id', 'Dosen', 'required');
        $validation->set_rules('seminar_id', 'Seminar', 'required');
        $validation->set_rules('nilai', 'Nilai', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->model('dosen_model');
            $data['list_dosen'] = $this->dosen_model->getAll();

            $this->load->model('seminar_model');
            $data['list_seminar'] = $this->seminar_model->getAll();

            $this->load->model('penilaian_model');
            $data['list_penilaian'] = $this->penilaian_model->getAll();

            $this->load->view('layout/header');
            $this->load->view('nilai/ubah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->nilai_model->ubahNilai();
            redirect('nilai');
        }
    }

    public function hapus($id)
    {
        $this->nilai_model->hapus($id);
        redirect('nilai');
    }
}

?>