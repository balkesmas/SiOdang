<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Laporan Penerimaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Penerimaan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Isi Content -->
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" style="font-size: 18px; font-weight: bold;">Laporan Penerimaan
                                Barang</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="table-responsive">
                                        <div id="tabel-data_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="d-flex align-items-end d-flex justify-content-between">
                                                <div class="d-flex align-items-end">
                                                    <div class="d-flex">
                                                        <div class="mr-2">
                                                            <label class="">Tanggal Awal</label>
                                                            <input type="date" id="tanggal_awal" name="tanggal_awal"
                                                                class="form-control tanggal" value="<?php echo date('Y-m-d'); ?>"
                                                                placeholder="Tanggal">
                                                        </div>
                                                        <div class="mx-2">
                                                            <label class="">Tanggal Akhir</label>
                                                            <input type="date" id="tanggal_akhir" name="tanggal_akhir"
                                                                class="form-control tanggal" value="<?php echo date('Y-m-d');?>" placeholder="Tanggal">
                                                        </div>
                                                    </div>
                                                    <div class="mx-2 d-flex">
                                                        <button type="button" id="btn-cari" class="btn btn-info">Cari Data</button>
                                                        <button type="button" id="btn-export-excel" class="btn btn-success">Export Excel</button>
                                                        <button type="button" id="btn-export-excel-detail" class="btn btn-success"disabled>Export Excel Detail</button>
                                                    </div>
                                                </div>
                                                <div id="tabel-data_filter" class="dataTables_filter mx-2">
                                                    <label>Search:</label>
                                                        <input style="width: 400px" type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="tabel-data">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="tabel-data_length">
                                                        <label>Show</label>
                                                            <select name="tabel-data_length" aria-controls="tabel-data"
                                                                class="custom-select custom-select-sm form-control form-control-sm" style="width: 60px;">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="tabel-data"
                                                        class="table table-striped table-hover dataTable"
                                                        style="width: 100%;" role="grid"
                                                        aria-describedby="tabel-data_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="text-center sorting_disabled" rowspan="1"
                                                                    colspan="1" style="width: 30.4px;" aria-label="No.">
                                                                    No.</th>
                                                                <th class="text-center sorting_asc" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 110.2px;" aria-sort="ascending"
                                                                    aria-label="No.Trans: activate to sort column descending">
                                                                    Tgl.Dok</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 103.2px;"
                                                                    aria-label="Tanggal: activate to sort column ascending">
                                                                    Nama</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 124.2px;"
                                                                    aria-label="Karyawan: activate to sort column ascending">
                                                                    Jumlah</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 107.2px;"
                                                                    aria-label="Supplier: activate to sort column ascending">
                                                                    Satuan</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Nilai</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Expired</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Batch</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Asal</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Suplier</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Pengirim</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Lokasi</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Kode Luar</th>
                                                                <th class="text-right sorting" tabindex="0"
                                                                    aria-controls="tabel-data" rowspan="1" colspan="1"
                                                                    style="width: 72.2px;"
                                                                    aria-label="Total: activate to sort column ascending">
                                                                    Keterangan</th>
                                                                <th class="text-center sorting_disabled" rowspan="1"
                                                                    colspan="1" style="width: 30.4px;" aria-label="">
                                                                    <i class="fas fa-th-large"></i>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- value here -->
                                                            <tr class="">
                                                                <td valign="top" colspan="15" class="dataTables_empty">No
                                                                    data available in table</td>
                                                            </tr>
                                                        </tbody>
                                                        
                                                    </table>
                                                    <div id="tabel-data_processing" class="dataTables_processing card"
                                                        style="display: none;">Processing...</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="tabel-data_info" role="status"
                                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="tabel-data_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"
                                                                id="tabel-data_previous"><a href="#"
                                                                    aria-controls="tabel-data" data-dt-idx="0"
                                                                    tabindex="0" class="page-link">Previous</a></li>
                                                            <li class="paginate_button page-item next disabled"
                                                                id="tabel-data_next"><a href="#"
                                                                    aria-controls="tabel-data" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir isi Content -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>