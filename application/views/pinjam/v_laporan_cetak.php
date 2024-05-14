<!DOCTYPE html>
<html>
<head>
	<title>Laporan Peminjaman RM</title>
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
            <th>NO RM</th>
            <th>Nama Pasien</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Dikembalikan</th>
            <th>Waktu Peminjaman</th>
            <th>Peminjam</th>
            <th>Petugas</th>
		</tr>
		  <?php
            $no =1;
            foreach ($print as $data) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->no_rm ?></td>
                <td><?php echo $data->nama_pasien ?></td>
                <td><?php echo $data->tanggal_pinjam ?></td>
                <td><?php echo $data->tanggal_kembali ?></td>
                <td><?php echo $data->waktu_peminjaman ?></td>
                <td><?php echo $data->nama_peminjam ?></td>
                <td><?php echo $data->petugas ?></td>
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
            Petugas RM <br><br><br><br>
            <b>Sri Wahyuningsih </b><br>
        </td>
    </table>
</center>
</body>
</html>
<script type="text/javascript">window.print();</script>