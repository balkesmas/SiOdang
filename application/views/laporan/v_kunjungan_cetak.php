<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kunjungan</title>
    <style type="text/css">
        body{
            font-family: Arial;
            color: black;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>

<center>
    <table>
        <tr>
            <td width="75" align="center">
                <img src="<?php echo base_url() ?>assets/images/logojateng320.png" alt="logo">
            </td>
            <td align="center">
                <b>BALKESMAS Wil. SEMARANG</b><br>
                Jl. Kh Ahmad Dahlan No.39, Karangkidul, Kec. Semarang Tengah, <br>Kota Semarang, Jawa Tengah 50221
            </td>
        </tr>
    </table>
</center>
<br>
<br>
<center>
    
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Tangal Pendaftaran</th>
            <th>Unit</th>
            <th>Nama Dokter</th>
            <th>Tipe Pasien</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Proses</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_rekap as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->tanggal_pendaftaran ?></td>
                <td><?php echo $data->unit ?></td>
                <td><?php echo $data->name ?></td>
                <td><?php echo $data->tipe_pasien ?></td>
                <td><?php echo $data->kode_pasien ?></td>
                <td><?php echo $data->nama_pasien ?></td>
                <td><?php echo str_replace("\n", "<br>", $data->proses) ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
</center>
<br>
<br>
<center>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>DPJP</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_dokter as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->DPJP ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Perawat</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_asesmen as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->Perawat ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Radiografer</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_radiografer as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->Radiografer ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Dokter Interpretasi</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_interpretasi as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->dokter_interpretasi ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Penanggungjawab Lab.</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_penanggungjawab as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->lab_penanggung_jawab ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Pemeriksa Lab.</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_pemeriksa as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->lab_pemeriksa ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Verifikator Lab.</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_verifikator as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->lab_verifikator ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Fisioteraphi</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_fisioteraphi as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->fisioterapi_penanggung_jawab ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>No</th>
            <th>Unit</th>
            <th>Jumlah</th>
        </tr>
          <?php
            $no =1;
            foreach ($print_unit as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->nama_unit ?></td>
                <td><?php echo $data->jumlah ?></td>

            </tr>
        <?php  endforeach; ?>
    </table>
    
    <br><br><br>
    <table border="1" width="1000">
        <tr>
            <th>Jumlah Pasien</th>
            <th>Umum</th>
            <th>BPJS</th>
            <!--<th>Baru</th>
            <th>Lama</th>-->
        </tr>
         <?php
            foreach ($print_jumlah_pasien as $key => $data) :
                    $data2 = $print_jumlah_umum[$key];
                    $data3 = $print_jumlah_bpjs[$key];
            ?>
            <tr>
                <td><?php echo $data->jumlah_pasien ?></td>
                <td><?php echo $data2->jumlah_umum ?></td>
                <td><?php echo $data3->jumlah_bpjs ?></td>
            </tr>
        <?php  endforeach; ?>

    </table>
    <br><br><br>
</center>
<center>
    <table width="1100">
       <!-- <td align="center"><br>Kepala <br><br><br><br>
            <b>Monica </b><br>
        </td>-->
        <td align="center">Semarang, <?php echo date('d M Y') ?> <br>
            Admin<br><br><br><br>
            <b>Admin </b><br>
        </td>
    </table>
</center>
</body>
</html>
<script type="text/javascript">window.print();</script>