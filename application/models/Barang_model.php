<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_barang()
    {
        $query = $this->db->get('barang');  // 'barang' adalah nama tabel Anda
        return $query->result_array();  // Mengembalikan hasil sebagai array asosiatif
    }
}