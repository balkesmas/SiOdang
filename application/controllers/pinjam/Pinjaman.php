<?php
class Pinjaman extends CI_Controller {

	public function index()
	{
		$data['pinjaman']= $this->M_tampil->tampil_pinjaman()->result();

		$this->load->view('pinjam/header');
		$this->load->view('pinjam/v_pinjaman',$data);
		$this->load->view('pinjam/footer');
		
	}

		public function simpan(){
			$query 		= $this->db->query("SELECT * FROM tb_pinjaman order by id_data_pinjam desc");
			$row 		= $query->row_array();

			$no_rm			= $this->input->post('no_rm');
			$nama_pasien	= $this->input->post('nama_pasien');
			$nama_peminjam	= $this->input->post('nama_peminjam');
			$no_hp			= $this->input->post('no_hp');
			$tanggal_pinjam	= $this->input->post('tanggal_pinjam');
			$tanggal_kembali	= $this->input->post('tanggal_kembali');
			$waktu_peminjaman	= $this->input->post('waktu_peminjaman');
			$petugas			= $this->input->post('petugas');
			$status				= "Dipinjam";

			$data = array(
        				'no_rm'			=>$no_rm,
        				'nama_pasien'	=>$nama_pasien,
        				'nama_peminjam'	=>$nama_peminjam,
        				'no_hp'			=>$no_hp,
        				'tanggal_pinjam'	=>$tanggal_pinjam,
        				'tanggal_kembali'	=>$tanggal_kembali,
        				'waktu_peminjaman'	=>$waktu_peminjaman,
        				'petugas'		=>$petugas,
        				'status'		=>$status,
        				);
			
			$this->M_tambah->input_data($data, 'tb_pinjaman');

        	$this->session->set_flashdata('pesan', ' <div class="alert alert-warning alert-dismissible" role="alert">
        			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasil Disimpan!
        			</div> ');
        			
        	redirect('pinjam/Pinjaman/index');

		}


		public function edit($id_data_pinjam) {
			$where = array ('id_data_pinjam' =>$id_data_pinjam);
			$data['edit_pinjaman'] = $this->M_edit->edit_data($where, 'tb_pinjaman')->result();
			
			$this->load->view('pinjam/header');
			$this->load->view('pinjam/v_pinjaman_edit',$data);
			$this->load->view('pinjam/footer');
					
		}

		public function update(){
			$id_data_pinjam	= $this->input->post('id_data_pinjam');
			$no_rm			= $this->input->post('no_rm');
			$nama_pasien	= $this->input->post('nama_pasien');
			$nama_peminjam	= $this->input->post('nama_peminjam');
			$no_hp			= $this->input->post('no_hp');
			$tanggal_pinjam	= $this->input->post('tanggal_pinjam');
			$tanggal_kembali	= $this->input->post('tanggal_kembali');
			$waktu_peminjaman	= $this->input->post('waktu_peminjaman');
			$petugas			= $this->input->post('petugas');
			$status				= $this->input->post('status');
			
				$data = array(
					'id_data_pinjam'	=>$id_data_pinjam,
        				'no_rm'			=>$no_rm,
        				'nama_pasien'	=>$nama_pasien,
        				'nama_peminjam'	=>$nama_peminjam,
        				'no_hp'			=>$no_hp,
        				'tanggal_pinjam'	=>$tanggal_pinjam,
        				'tanggal_kembali'	=>$tanggal_kembali,
        				'waktu_peminjaman'	=>$waktu_peminjaman,
        				'petugas'		=>$petugas,
        				'status'		=>$status,
					);

				$where = array(
					'id_data_pinjam' => $id_data_pinjam
					);

			$this->M_edit->update_data($where,$data,'tb_pinjaman');
			$this->session->set_flashdata('pesan', ' <div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasil Diedit!
			</div> ');

			redirect('pinjam/Pinjaman/index');

		}

		public function hapus($id_data_pinjam) {
			$where = array  ('id_data_pinjam' =>$id_data_pinjam);
			$this->M_hapus->hapus_data($where, 'tb_pinjaman');
			$this->session->set_flashdata('pesan', ' <div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasil Dihapus!
			</div> ');

			redirect('pinjam/Pinjaman/index');

		}


		public function kembalikan($id_data_pinjam){
			$status	= "Dikembalikan";
			
				$data = array('status'	=>$status);

				$where = array('id_data_pinjam' => $id_data_pinjam);

			$this->M_edit->update_data($where,$data,'tb_pinjaman');
			$this->session->set_flashdata('pesan', ' <div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Data Berhasil Diedit!
			</div> ');

			redirect('pinjam/Pinjaman/index');

		}




}

