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

    <section class="content">
      <div class="container-fluid">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <?php foreach ($edit_pinjaman as $data) { ?>
              <?php echo form_open_multipart('pinjam/Pinjaman/update'); ?>
                <div class="card-body">
                <input type="hidden" class="form-control" name="id_data_pinjam" value="<?php echo $data->id_data_pinjam ?>" >
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No RM</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="no_rm" value="<?php echo $data->no_rm ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_pasien" value="<?php echo $data->nama_pasien ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Peminjam</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_peminjam" value="<?php echo $data->nama_peminjam ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No HP Peminjam</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" name="no_hp" value="<?php echo $data->no_hp ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Mulai Pinjam</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control" name="tanggal_pinjam" value="<?php echo $data->tanggal_pinjam ?>" >
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control" name="tanggal_kembali" value="<?php echo $data->tanggal_kembali ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Peminjaman</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="waktu_peminjaman" value="<?php echo $data->waktu_peminjaman ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Petugas</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="petugas" value="<?php echo $data->petugas ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label form-control-sm">Status</label>
                      <div class="col-sm-3">
                        <select class="form-control form-control-sm" name="status" >
                        <option <?php if($data->status=='Dipinjam'){echo 'selected';}?> value="Dipinjam">Dipinjam</option>
                        <option <?php if($data->status=='Dikembalikan'){echo 'selected';}?> value="Dikembalikan">Dikembalikan</option>
                        </select>
                      </div>
                      </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <a href="<?php echo base_url().'pinjam/Pinjaman/index/' ?>" class="btn btn-light">Batal</a>
                </div>
                <?php echo form_close(); ?>
               <?php } ?>
            </div>
            <!-- /.card -->




      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>