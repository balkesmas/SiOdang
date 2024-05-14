<?php
class Laporan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // Load Controller_A sebagai library

    }

	public function kunjungan()	{
		//$data['pinjam']= $this->M_tampil->tampil_pinjaman()->result();
       // $this->cetakkunjungan();

		$this->load->view('laporan/header');
		$this->load->view('laporan/v_kunjungan');//,$data);
		$this->load->view('laporan/footer');
		
	}
	public function icd10()	{
		$data['pinjam']= $this->M_tampil->tampil_pinjaman()->result();

		$this->load->view('laporan/header');
		$this->load->view('laporan/v_icd10',$data);
		$this->load->view('laporan/footer');
		
	}

	public function cetakicd10(){
		$awal	= $this->input->post('awal');
		$akhir	= $this->input->post('akhir');
		$data['print']= $this->db->query("
				SELECT log_rekam_medis_icd10.id_rekam_medis, 
				log_rekam_medis_icd10.id_pendaftaran, 
				log_rekam_medis_icd10.id_icd10, 
				log_rekam_medis_icd10.kode_icd10, 
				log_rekam_medis_icd10.nama_icd10, 
				log_rekam_medis.id_rekam_medis, 
				log_rekam_medis.id_pasien, 
				log_rekam_medis.tanggal_rekam_medis,
				log_pendaftaran.id_pendaftaran, 
				log_pendaftaran.tipe_pasien 
				FROM log_rekam_medis_icd10, log_rekam_medis, log_pendaftaran 
				WHERE log_rekam_medis_icd10.id_rekam_medis=log_rekam_medis.id_rekam_medis 
				AND log_rekam_medis_icd10.id_pendaftaran=log_pendaftaran.id_pendaftaran
				AND tanggal_rekam_medis  BETWEEN '$awal' AND '$akhir' 
				ORDER BY log_rekam_medis_icd10.id_pendaftaran ASC")
				->result();

		$this->load->view('laporan/v_icd10_cetak',$data);

	}

	public function cetakkunjungan(){

		$awal	= $this->input->post('awal');
		$akhir	= $this->input->post('akhir');
		$data['print_rekap'] = $this->db->query("
                SELECT 
                    log_pendaftaran.tanggal_pendaftaran,
                    unit_pendaftaran.nama_unit AS unit,
                    users.name,
                    log_pendaftaran.tipe_pasien,
                    pasien.kode_pasien,
                    pasien.nama_pasien,
                    GROUP_CONCAT(unit_rekam_medis.nama_unit SEPARATOR '\n') AS proses
                FROM
                    log_pendaftaran
                    JOIN pasien ON log_pendaftaran.id_pasien = pasien.id_pasien
                    JOIN log_rekam_medis ON log_pendaftaran.id_pasien = log_rekam_medis.id_pasien
                    JOIN unit AS unit_pendaftaran ON log_pendaftaran.id_unit = unit_pendaftaran.id_unit
                    JOIN unit AS unit_rekam_medis ON log_rekam_medis.id_unit = unit_rekam_medis.id_unit
                    JOIN users ON log_pendaftaran.id_dokter = users.id
                WHERE
                    log_pendaftaran.status_pendaftaran = 'Aktif'
                    AND DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE()
                    AND DATE(log_pendaftaran.tanggal_pendaftaran) = CURDATE()
                GROUP BY
                    log_pendaftaran.tanggal_pendaftaran,
                    unit_pendaftaran.nama_unit,
                    users.name,
                    log_pendaftaran.tipe_pasien,
                    pasien.kode_pasien,
                    pasien.nama_pasien;")
                ->result();


		$data['print_dokter']= $this->db->query("
				SELECT 
				    users.name AS DPJP,
				    COUNT(log_pendaftaran.id_dokter) AS jumlah
				FROM 
				    log_pendaftaran
				    INNER JOIN users ON log_pendaftaran.id_dokter = users.id
				WHERE 
				    log_pendaftaran.status_pendaftaran = 'Aktif'
				    AND DATE(log_pendaftaran.tanggal_pendaftaran) = CURDATE() 
				GROUP BY 
				    users.id;")
				->result();


        $data['print_asesmen'] = $this->db->query('
            SELECT 
                MAX(users.name) AS Perawat,
                COUNT(*) AS jumlah 
            FROM 
                log_rekam_medis
            JOIN 
                users ON REPLACE(JSON_EXTRACT(log_rekam_medis.form_content, "$.asuhan_keperawatan_petugas"), "\"", "") = users.id
            WHERE 
                DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE() 
            GROUP BY 
                JSON_EXTRACT(log_rekam_medis.form_content, "$.asuhan_keperawatan_petugas") 
            LIMIT 0, 25;
        ')->result();


		$data['print_radiografer']= $this->db->query('
				SELECT 
				    MAX(users.name) AS Radiografer,
				    COUNT(*) AS jumlah 
				FROM 
				    log_rekam_medis
				JOIN 
				    users ON REPLACE(JSON_EXTRACT(log_rekam_medis.form_content, "$.radiografer"), "\"", "") = users.id
				WHERE 
				    DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE() 
				GROUP BY 
				    JSON_EXTRACT(log_rekam_medis.form_content, "$.radiografer") LIMIT 0, 25;')
				->result();


		$data['print_interpretasi']= $this->db->query('
				SELECT 
				    MAX(users.name) AS dokter_interpretasi,
				    COUNT(*) AS jumlah 
				FROM 
				    log_rekam_medis
				JOIN 
				    users ON REPLACE(JSON_EXTRACT(log_rekam_medis.form_content, "$.dokter_interpretasi"), "\"", "") = users.id
				WHERE 
				    DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE() 
				GROUP BY 
				    JSON_EXTRACT(log_rekam_medis.form_content, "$.dokter_interpretasi") LIMIT 0, 25;')
				->result();


		$data['print_penanggungjawab']= $this->db->query('
				SELECT 
				    MAX(users.name) AS lab_penanggung_jawab,
				    COUNT(*) AS jumlah 
				FROM 
				    log_rekam_medis
				JOIN 
				    users ON REPLACE(JSON_EXTRACT(log_rekam_medis.form_content, "$.lab_penanggung_jawab"), "\"", "") = users.id
				WHERE 
				    DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE()  
				GROUP BY 
				    JSON_EXTRACT(log_rekam_medis.form_content, "$.lab_penanggung_jawab") LIMIT 0, 25;')
				->result();


		$data['print_pemeriksa']= $this->db->query('
				SELECT 
				    MAX(users.name) AS lab_pemeriksa,
				    COUNT(*) AS jumlah 
				FROM 
				    log_rekam_medis
				JOIN 
				    users ON REPLACE(JSON_EXTRACT(log_rekam_medis.form_content, "$.lab_pemeriksa"), "\"", "") = users.id
				WHERE 
				    DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE() 
				GROUP BY 
				    JSON_EXTRACT(log_rekam_medis.form_content, "$.lab_pemeriksa") LIMIT 0, 25;')
				->result();


		$data['print_verifikator']= $this->db->query('
				SELECT 
				    MAX(users.name) AS lab_verifikator,
				    COUNT(*) AS jumlah 
				FROM 
				    log_rekam_medis
				JOIN 
				    users ON REPLACE(JSON_EXTRACT(log_rekam_medis.form_content, "$.lab_verifikator"), "\"", "") = users.id
				WHERE 
				    DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE()
				GROUP BY 
				    JSON_EXTRACT(log_rekam_medis.form_content, "$.lab_verifikator") LIMIT 0, 25;')
				->result();


		$data['print_unit']= $this->db->query("
				SELECT 
					unit.nama_unit,
					COUNT(log_pendaftaran.id_unit) AS jumlah
				FROM 
					log_pendaftaran, unit 
				WHERE 
					log_pendaftaran.status_pendaftaran='Aktif'
					AND log_pendaftaran.id_unit=unit.id_unit
					AND DATE(log_pendaftaran.tanggal_pendaftaran) = CURDATE() 
				GROUP BY 
					log_pendaftaran.id_unit;")
				->result();
				

		$data['print_fisioteraphi']= $this->db->query('
				SELECT 
				    MAX(users.name) AS fisioterapi_penanggung_jawab,
				    COUNT(*) AS jumlah 
				FROM 
				    log_rekam_medis
				JOIN 
				    users ON REPLACE(JSON_EXTRACT(log_rekam_medis.form_content, "$.fisioterapi_penanggung_jawab"), "\"", "") = users.id
				WHERE 
				    DATE(log_rekam_medis.tanggal_rekam_medis) = CURDATE()  
				GROUP BY 
				    JSON_EXTRACT(log_rekam_medis.form_content, "$.fisioterapi_penanggung_jawab") LIMIT 0, 25;')
				->result();
		

		$data['print_jumlah_pasien']= $this->db->query("
				SELECT 
                    COUNT(id_pendaftaran) AS jumlah_pasien
                FROM 
                    log_pendaftaran
                WHERE 
                    log_pendaftaran.status_pendaftaran = 'Aktif'
                    AND DATE(log_pendaftaran.tanggal_pendaftaran) = CURDATE();")
				->result();
		

		$data['print_jumlah_umum']= $this->db->query("
				SELECT 
                    COUNT(id_pendaftaran) AS jumlah_umum
                FROM 
                    log_pendaftaran
                WHERE 
                    log_pendaftaran.tipe_pasien = 'Umum'
                    AND log_pendaftaran.status_pendaftaran = 'Aktif'
                    AND DATE(log_pendaftaran.tanggal_pendaftaran) = CURDATE();")
				->result();
		

		$data['print_jumlah_bpjs']= $this->db->query("
				SELECT 
                    COUNT(id_pendaftaran) AS jumlah_bpjs
                FROM 
                    log_pendaftaran
                WHERE 
                    log_pendaftaran.tipe_pasien = 'BPJS'
                    AND log_pendaftaran.status_pendaftaran = 'Aktif'
                    AND DATE(log_pendaftaran.tanggal_pendaftaran) = CURDATE();")
				->result();
				

		$this->load->view('laporan/v_kunjungan_cetak',$data);

	}





}

