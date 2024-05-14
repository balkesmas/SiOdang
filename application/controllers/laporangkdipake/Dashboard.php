<?php
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this ->session->userdata('status') !='laporan') {
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Anda belum login </strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span sria-hidden="true">&times;</span></button></div>');
				redirect('Welcome');
		}
	}
	
	public function index()
	{

		$this->load->view('laporan/header');
		$this->load->view('laporan/v_dashboard');
		$this->load->view('laporan/footer');
		
	}

}

