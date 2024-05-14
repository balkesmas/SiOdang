  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Kunjungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">

        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Form</h3>
          </div>
          <form class="form-inline" method="post" action="<?php echo base_url().'laporan/Laporan/cetakkunjungan'; ?>">
            <div class="card-body">
              <div class="form-group">
                <div class="input-group">
                  <input type="date" class="form-control" name="awal">
                  <div class="input-group-append">
                    <span class="input-group-text">-sampai dengan-</span>
                  </div>
                  <input type="date" class="form-control" name="akhir">
                  <div class="col-sm-2">
                    <button class="btn btn-lg btn-outline-secondary" type="submit"><a target="_blank">Print</a></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
            <!-- /.card -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Form</h3>
          </div>
          
          <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
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
                  </thead>
                  <tbody>
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
                      </tbody>
                </table>
              </div>

        </div>

      </div>
  </section>
</div>