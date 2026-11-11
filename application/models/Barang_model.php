<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function semua()      { return $this->db->get('barang')->result(); }
    public function satu($id)    { return $this->db->get_where('barang', ['id_barang' => $id])->row(); }
    public function tambah($d)   { $this->db->insert('barang', $d); }
    public function ubah($id, $d){ $this->db->update('barang', $d, ['id_barang' => $id]); }
    public function hapus($id)   { $this->db->delete('barang', ['id_barang' => $id]); }
}
