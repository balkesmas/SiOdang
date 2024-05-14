<?php
class Stock extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this ->session->userdata('status') !='gudang') {
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Anda belum login </strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span sria-hidden="true">&times;</span></button></div>');
				redirect('Welcome');
		}
	}
	
	public function index()
	{
		$this->load->view('gudang/header');
		$this->load->view('gudang/Stock/v_stock');
		$this->load->view('gudang/footer');
		
	}



}

