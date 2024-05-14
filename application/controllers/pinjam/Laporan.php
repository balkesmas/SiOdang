<?php
class Laporan extends CI_Controller {

	public function index()
	{
		$data['pinjam']= $this->M_tampil->tampil_pinjaman()->result();

		$this->load->view('pinjam/header');
		$this->load->view('pinjam/v_laporan',$data);
		$this->load->view('pinjam/footer');
		
	}


	public function cetak(){
		$awal	= $this->input->post('awal');
		$akhir	= $this->input->post('akhir');
		$data['print']= $this->db->query("SELECT * FROM tb_pinjaman WHERE (tanggal_pinjam BETWEEN '$awal' AND '$akhir') ")->result();
		$this->load->view('pinjam/v_laporan_cetak',$data);

	}






}

