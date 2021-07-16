<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
        $this->load->helper('text');
        $this->load->model('user_model');
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('auth');
    }
}