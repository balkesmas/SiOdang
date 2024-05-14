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
              <li class="breadcrumb-item active">Pinjaman</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <section class="content">
      <div class="container-fluid">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <?php echo form_open_multipart('pinjam/Pinjaman/simpan'); ?>
                <div class="card-body">
                  <!--<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Cari Data</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="" placeholder="Masukkan No RM atau Nama Pasien">
                    </div>
                  </div>-->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No RM</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="no_rm"  placeholder="Masukkan No RM" required="" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_pasien"  placeholder="Masukkan Nama Pasien" required="">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Peminjam</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_peminjam" placeholder="Nama Peminjam" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No HP Peminjam</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" name="no_hp" placeholder="Masukkan nomor" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control" name="tanggal_pinjam" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control" name="tanggal_kembali" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Peminjaman</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="waktu_peminjaman" required="" >
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Petugas</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="petugas" required="" >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan </button>
                  <button type="submit" class="btn btn-default float-right">Batal</button>
                </div>
                <!-- /.card-footer -->
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
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                            <?php
                              $no =1;
                              foreach ($pinjaman as $data) : ?>
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
                              <td><?php echo anchor('pinjam/Pinjaman/edit/'.$data->id_data_pinjam,'<i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i>') ?>
                              </td>
                              <td onclick="javascript: return confirm('Anda Yakin Menghapus?')"><?php echo anchor('pinjam/Pinjaman/hapus/'.$data->id_data_pinjam, '<i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i>') ?>
                              </td>
                              <td onclick="javascript: return confirm('Anda Yakin Data Sudah di Kembalikan?')"><?php echo anchor('pinjam/Pinjaman/kembalikan/'.$data->id_data_pinjam, '<p class="badge bg-warning">Kembalikan</p>') ?>
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