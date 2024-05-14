<?php 
    class M_edit extends CI_model {   

        public function edit_data($where, $table)   {
            return $this->db->get_where($table,$where);
        }

        public function update_data($where, $data, $table)  {
            $this->db->where($where);
            $this->db->update($table,$data);
        }


        
    }
?>