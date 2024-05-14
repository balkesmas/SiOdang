<!DOCTYPE html>
<html>
<head>
    <title>Laporan ICD 10</title>
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
            <th>ID RM</th>
            <th>ID Pasien</th>
            <th>ID Pendaftaran</th>
            <th>Kode icd10 </th>
            <th>Nama Icd10</th>
            <th>Tanggal RM</th>
            <th>Status</th>
        </tr>
          <?php
            $no =1;
            foreach ($print as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->id_rekam_medis ?></td>
                <td><?php echo $data->id_pasien ?></td>
                <td><?php echo $data->id_pendaftaran ?></td>
                <td><?php echo $data->kode_icd10 ?></td>
                <td><?php echo $data->nama_icd10 ?></td>
                <td><?php echo $data->tanggal_rekam_medis ?></td>
                <td><?php echo $data->tipe_pasien ?></td>
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