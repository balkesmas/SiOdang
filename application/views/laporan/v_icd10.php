  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan ICD10</h1>
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
          <form class="form-inline" method="post" action="<?php echo base_url().'laporan/Laporan/cetakicd10'; ?>">
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
        

      </div>
  </section>
</div>