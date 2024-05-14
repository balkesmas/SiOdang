<?php
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this ->session->userdata('status') !='admin') {
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Anda belum login </strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span sria-hidden="true">&times;</span></button></div>');
				redirect('Welcome');
		}
	}
	
	public function index()
	{

		$data['dipinjam']= $this->M_tampil->tampil_dipinjam()->result();
		$data['dikembalikan']= $this->M_tampil->tampil_dikembalikan()->result();
		$data['semua']= $this->M_tampil->tampil_semua()->result();
		$this->load->view('pinjam/header');
		$this->load->view('pinjam/v_dashboard', $data);
		$this->load->view('pinjam/footer');
		
	}

}

