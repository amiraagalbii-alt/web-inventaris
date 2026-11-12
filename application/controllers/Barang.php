<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('login')) redirect('auth/login');
        $this->load->model('Barang_model', 'm');
    }

    public function index()
    {
        $data['barang'] = $this->m->semua();
        $this->load->view('index', $data);
    }

    public function form($id = null)
    {
        if ($this->input->post()) {
            $id ? $this->m->ubah($id, $this->input->post())
                : $this->m->tambah($this->input->post());
            redirect('barang');
        }
        $data['b'] = $this->m->satu($id);
        $this->load->view('form', $data);
    }

    public function hapus($id)
    {
        $this->m->hapus($id);
        redirect('barang');
    }
}