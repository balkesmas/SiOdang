<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->_rules();

		if($this->form_validation->run()==FALSE) {
			$this->load->view('v_login');

		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('M_login');
			$cek = $this->M_login->cek_login($username, $password);
			
			if($cek == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Username atau Password Salah </strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span sria-hidden="true">&times;</span></button></div>');

				redirect('Welcome');

			} else {
				$this->session->set_userdata('status',$cek->status);
				$this->session->set_userdata('username',$cek->username);

				switch ($cek->status) {
					case 'laporan' :	redirect('laporan/dashboard');
									break;
					case 'admin':	redirect('pinjam/dashboard');
									break;				
					case 'gudang':	redirect('gudang/dashboard');
									break;				
					default 	 :	break;
				}
			}

		}
		
	}

	public function _rules() {
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}



}
