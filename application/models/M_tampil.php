<?php 
    class M_tampil extends CI_model {       

        public function tampil_pinjaman() {
            return $this->db->get('tb_pinjaman');

        }

        public function tampil_dikembalikan() {
            return $this->db->query("SELECT COUNT(id_data_pinjam) as total FROM `tb_pinjaman` WHERE status='Dikembalikan'");

        }

        public function tampil_dipinjam() {
            return $this->db->query("SELECT COUNT(id_data_pinjam) as total FROM `tb_pinjaman` WHERE status='Dipinjam'");

        }

        public function tampil_semua() {
            return $this->db->query("SELECT COUNT(id_data_pinjam) as total FROM `tb_pinjaman` ");

        }


}
?>