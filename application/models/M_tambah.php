<?php 

    class M_tambah extends CI_model {

        public function input_data($data,$tabel) {
            $this->db->insert($tabel, $data);
        }

}
?>