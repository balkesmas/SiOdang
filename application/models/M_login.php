<?php 

class M_login extends CI_model {
	
	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$result = $this->db->where('username',$username)
						   ->where('password',$password)
						   ->limit(1)
						   ->get('tb_user');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return FALSE;
		}
	}

}

?>