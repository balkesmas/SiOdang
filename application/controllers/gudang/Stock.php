<?php
class Stock extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Barang_model');
		if ($this ->session->userdata('status') !='gudang') {
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Anda belum login </strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span sria-hidden="true">&times;</span></button></div>');
				redirect('Welcome');
		}
	}
	
	public function index()
	{

		$data['barang'] = $this->Barang_model->get_all_barang();



		$this->load->view('gudang/header');
		$this->load->view('gudang/Stock/v_stock', $data);
		$this->load->view('gudang/footer');
		
	}



}

