<?php
class Auth extends CI_Controller{
    public function index()
	{
        $this->load->view('login/login');
    }
    public function cek_login() {
        $data = array('username' => $this->input->post('username', TRUE),
        'password' => md5($this->input->post('password', TRUE)));
        $this->load->model('user_model'); 
        $hasil = $this->user_model->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
            $sess_data['logged_in'] = 'Sudah Loggin';
            $sess_data['uid'] = $sess->uid;
            $sess_data['username'] = $sess->username;
            $sess_data['level'] = $sess->level;
            $this->session->set_userdata($sess_data);
            }

            if ($this->session->userdata('level')=='admin') {
                redirect('seminar');
            }
            elseif ($this->session->userdata('level')=='member') {
                redirect('member/c_member');
            }
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

}
?>