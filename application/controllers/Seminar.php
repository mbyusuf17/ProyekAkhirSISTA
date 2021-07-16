<?php

class Seminar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('seminar_model');
    }

    public function index()
    {
        $data['list_seminar'] = $this->seminar_model->getAll();
        $this->load->view('layout/header');
        $this->load->view('admin/seminar', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('semester', 'Semester', 'required');
        $validation->set_rules('tanggal', 'Tanggal', 'required');
        $validation->set_rules('jam', 'Jam', 'required');
        $validation->set_rules('kategori_seminar_id', 'Seminar', 'required');
        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $validation->set_rules('judul', 'Judul', 'required');
        $validation->set_rules('pembimbing_id', 'Pembimbing', 'required');
        $validation->set_rules('penguji1_id', 'Penguji 1', 'required');
        $validation->set_rules('penguji2_id', 'Penguji 2', 'required');
        $validation->set_rules('nilai_pembimbing', 'Nilai Pembimbing', 'required');
        $validation->set_rules('nilai_penguji1', 'Nilai Penguji 1', 'required');
        $validation->set_rules('nilai_penguji2', 'Nilai Penguji 2', 'required');
        $validation->set_rules('lokasi', 'Lokasi', 'required');
        $validation->set_rules('nilai_akhir', 'Nilai Akhir', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->model('dosen_model');
            $data['list_dosen'] = $this->dosen_model->getAll();

            $this->load->model('kategori_model');
            $data['list_kategori'] = $this->kategori_model->getAll();
            // $data['list_kategori'] = $this->seminar_model->joinSeminar();

            $this->load->view('layout/header');
            $this->load->view('admin/tambah', $data);
            $this->load->view('layout/footer');
        } else {
          $this->seminar_model->tambahSeminar();
          redirect('seminar');
        }
    }

    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['seminar'] = $this->seminar_model->getById($id);

        $validation->set_rules('semester', 'Semester', 'required');
        $validation->set_rules('tanggal', 'Tanggal', 'required');
        $validation->set_rules('jam', 'Jam', 'required');
        $validation->set_rules('kategori_seminar_id', 'Seminar', 'required');
        $validation->set_rules('nim', 'NIM', 'required');
        $validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $validation->set_rules('judul', 'Judul', 'required');
        $validation->set_rules('pembimbing_id', 'Pembimbing', 'required');
        $validation->set_rules('penguji1_id', 'Penguji 1', 'required');
        $validation->set_rules('penguji2_id', 'Penguji 2', 'required');
        $validation->set_rules('nilai_pembimbing', 'Nilai Pembimbing', 'required');
        $validation->set_rules('nilai_penguji1', 'Nilai Penguji 1', 'required');
        $validation->set_rules('nilai_penguji2', 'Nilai Penguji 2', 'required');
        $validation->set_rules('lokasi', 'Lokasi', 'required');
        $validation->set_rules('nilai_akhir', 'Nilai Akhir', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->model('dosen_model');
            $data['list_dosen'] = $this->dosen_model->getAll();

            $this->load->model('kategori_model');
            $data['list_kategori'] = $this->kategori_model->getAll();

            $this->load->view('layout/header');
            $this->load->view('admin/ubah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->seminar_model->ubahSeminar();
            redirect('seminar');
        }
    }

    public function hapus($id)
    {
        $this->seminar_model->hapus($id);
        redirect('seminar');
    }
}