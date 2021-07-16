<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_model');
    }

	public function index()
	{
        $data['list_dosen'] = $this->dosen_model->getAll();
		$this->load->view('layout/header');
		$this->load->view('dosen/dosen', $data);
		$this->load->view('layout/footer');
    }
    
    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('nidn', 'NIDN', 'required');
        $validation->set_rules('nama', 'Dosen', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('layout/header');
            $this->load->view('dosen/tambah');
            $this->load->view('layout/footer');
        } else {
          $this->dosen_model->tambahDosen();
          redirect('dosen');
        }
    }

    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['dosen'] = $this->dosen_model->getById($id);

        $validation->set_rules('nidn', 'NIDN', 'required');
        $validation->set_rules('nama', 'Dosen', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('layout/header');
            $this->load->view('dosen/ubah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->dosen_model->ubahDosen();
            redirect('dosen');
        }
    }

    public function hapus($id)
    {
        $this->dosen_model->hapus($id);
        redirect('dosen');
    }
}