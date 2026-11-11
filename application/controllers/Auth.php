<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        if ($this->input->post()) {
            $user = $this->db->get_where('user', [
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            ])->row();

            if ($user) {
                $this->session->set_userdata('login', TRUE);
                redirect('barang');
            }
        }
        $this->load->view('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}