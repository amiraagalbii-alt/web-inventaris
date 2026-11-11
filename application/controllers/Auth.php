<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
  
    public function login()
    {
        $this->load->model('auth_model');
        $this->load->library('form_validation');

        $rules = $this->auth_model->rules();
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() == FALSE){
            return $this->load->view('login_form');
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->auth_model->login($username, $password)){
            redirect('admin');
        } else {
            $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
        }

        $this->load->view('login_form');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
}