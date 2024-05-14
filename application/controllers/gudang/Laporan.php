<?php
class Laporan extends CI_Controller {

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
		$this->load->view('gudang/v_dashboard');
		$this->load->view('gudang/footer');
		
	}

	public function laporanpenerimaan()
	{
		$this->load->view('gudang/header');
		$this->load->view('gudang/Laporan/Penerimaan/v_laporanpenerimaan');
		$this->load->view('gudang/footer');

	}

	public function laporanpengeluaran()
	{
		$this->load->view('gudang/header');
		$this->load->view('gudang/Laporan/Pengeluaran/v_laporanpengeluaran');
		$this->load->view('gudang/footer');

	}

}

