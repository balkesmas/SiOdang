<?php 

    class M_hapus extends CI_model {

        public function hapus_data($where, $table)  {
            $this->db->where($where);
            $this->db->delete($table);
        }

}
?>