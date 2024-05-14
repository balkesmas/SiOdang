  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <form class="form-inline" method="post" action="<?php echo base_url().'pinjam/Laporan/cetak'; ?>">
                  <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="date" class="form-control" name="awal">
                      <div class="input-group-append">
                        <span class="input-group-text">-sampai dengan-</span>
                      </div>
                      <input type="date" class="form-control" name="akhir">
                      <!--<div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="button">Tampilkan</button>
                      </div>-->
                          <div class="col-sm-2">
                             <button class="btn btn-lg btn-outline-secondary" type="submit"><a target="_blank">Print</a></button>
                          </div>
                    </div>
                  </div>
                  </div>
                  </form>
            </div>
            <!-- /.card -->

            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Riwayat Peminjaman</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>No RM</th>
                      <th>Nama Pasien</th>
                      <th>No HP</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Kembali</th>
                      <th>Waktu Peminjaman</th>
                      <th>Peminjam</th>
                      <th>Status</th>
                      <th>Petugas</th>
                    </tr>
                  </thead>
                  <tbody>
                            <?php
                              $no =1;
                              foreach ($pinjam as $data) : ?>
                            <tr>
                              <td class="py-1"><?php echo $no++ ?></td>
                              <td><?php echo $data->no_rm ?></td>
                              <td><?php echo $data->nama_pasien ?></td>
                              <td><?php echo $data->no_hp ?></td>
                              <td><?php echo $data->tanggal_pinjam ?></td>
                              <td><?php echo $data->tanggal_kembali ?></td>
                              <td><?php echo $data->waktu_peminjaman ?></td>
                              <td><?php echo $data->nama_peminjam ?></td>
                              <td><?php echo $data->petugas ?></td>
                              <td>
                                  <?php if ( $data->status =="Dikembalikan") {
                                    echo  "<p class='badge bg-success'>Dikembalikan</p>";
                                    }else{ echo "<p class='badge bg-danger'>Dipinjam</p>"; } ?>
                              </td>
                              
                            </tr>
                            <?php  endforeach; ?>
                      </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>