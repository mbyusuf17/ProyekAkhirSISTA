<?php

class Peserta extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peserta_model');
    }

    public function index(){
        // $data['list_peserta'] = $this->peserta_model->getAll();
        $data['seminar'] = $this->peserta_model->joinSeminar();
        // echo '<pre>';
        // print_r($list_seminar);
        // echo '</pre>';
        $this->load->view('layout/header');
        $this->load->view('peserta/peserta', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('seminar_id', 'Seminar', 'required');
        $validation->set_rules('kehadiran', 'Kehadiran', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->model('seminar_model');
            $data['seminar'] = $this->seminar_model->getAll();

            $this->load->view('layout/header');
            $this->load->view('peserta/tambah', $data);
            $this->load->view('layout/footer');
        } else {
          $this->peserta_model->tambahPeserta();
          redirect('peserta');
        }
    }

    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['peserta'] = $this->peserta_model->getById($id);

        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('seminar_id', 'Seminar', 'required');
        $validation->set_rules('kehadiran', 'Kehadiran', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->model('seminar_model');
            $data['list_seminar'] = $this->seminar_model->getAll();

            $this->load->view('layout/header');
            $this->load->view('peserta/ubah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->peserta_model->ubahPeserta();
            redirect('peserta');
        }
    }

    public function hapus($id)
    {
        $this->peserta_model->hapus($id);
        redirect('peserta');
    }
}

?>