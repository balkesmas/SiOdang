<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Stock</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Stock</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Stok Obat Opname</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Obat</th>
                                        <th>Nama Paten</th>
                                        <th>Nama Generik</th>
                                        <th>Satuan</th>
                                        <th>Pabrikan</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>10192</td>
                                        <td>Asam Mefenamat tablet 500 mg</td>
                                        <td>Asam Mefenamat tablet 500 mg</td>
                                        <td>TABLET</td>
                                        <td>PT Kalbe Farma</td>
                                        <td>100</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#modal-kartu"
                                                class="btn btn-secondary"><i class="fas fa-scroll"></i> Kartu</button>
                                            <button data-toggle="modal" data-target="#modal-detail"
                                                class="btn btn-info"><i class="fas fa-info"></i> Detail</button>
                                            <button data-toggle="modal" data-target="#modal-barcode"
                                                class="btn btn-success"><i class="fas fa-barcode"></i>
                                                Barcode</button>
                                            <button data-toggle="modal" data-target="#modal-edit"
                                                class="btn btn-warning"><i class="fas fa-edit"></i>Edit</button>
                                            <button data-toggle="modal" data-target="#modal-delete"
                                                class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                        </td>
                                    </tr>

                                    <!-- Modal Detail -->
                                    <div class="modal fade" id="modal-detail" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Detail Obat</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Kode Obat</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="10192" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Kelompok</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="Obat" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama Paten</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="Asam Mefenamat tablet 500 mg" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama Generik</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="Asam Mefenamat tablet 500 mg" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Aktif</label>
                                                        <div class="col-sm-10">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="aktif" checked onclick="return false;">
                                                                <label class="form-check-label"
                                                                    for="aktif">Aktif</label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Satuan</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="TABLET" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Qty</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="100" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Diproduksi Oleh</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="PT Kalbe Farma" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Exp Date</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="20 Desember 2024" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Lokasi</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder=""
                                                                value="B3" readonly>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="modal-edit" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Detail Obat</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Kode Obat</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="" value="10192">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Kelompok</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="" value="Obat">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nama Paten</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="" value="Asam Mefenamat tablet 500 mg">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nama Generik</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="" value="Asam Mefenamat tablet 500 mg">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Aktif</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="aktif" checked>
                                                                    <label class="form-check-label"
                                                                        for="aktif">Aktif</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Satuan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="" value="TABLET">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Qty</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="" value="100">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Diproduksi
                                                                Oleh</label>
                                                            <div class="col-sm-10">
                                                                <select id="id_supplier" name="id_supplier"
                                                                    class="form-control select2 select2-hidden-accessible"
                                                                    style="width: 100%;" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <option value="">-- Pilih Supplier --
                                                                    </option>
                                                                    <option value="15">PT .TEMPO SCAN PASIFIC</option>
                                                                    <option value="10">PT COMBI PUTRA MANDIRI</option>
                                                                    <option value="14">PT. ANTAR MITRA SEMBADA</option>
                                                                    <option value="6">PT. ANUGRAH ARGON MEDIKA</option>
                                                                    <option value="7">PT. ANUGRAH FARMINDO LESTARI
                                                                    </option>
                                                                    <option value="9">PT. ENSEVAL PUTRA MEGA TRADING
                                                                    </option>
                                                                    <option value="5">PT. INDOFARMA GLOBAL MEDIKA
                                                                    </option>
                                                                    <option value="1">PT. KIMIA FARMA</option>
                                                                    <option value="13">PT. MENSA BINA SUKSES</option>
                                                                    <option value="11">PT. MILLENIUM PHARMACON INDONESIA
                                                                    </option>
                                                                    <option value="8">PT. PARIT PADANG</option>
                                                                    <option value="2">PT. RAJAWALI NUSINDO</option>
                                                                    <option value="12">PT. SAPTA SARI TAMA</option>
                                                                    <option value="4">PT. TEMPO SCAN PASIFIK</option>
                                                                    <option value="3">PT. TIARA KENCANA</option>
                                                                    <option value="23" selected="">PT. KALBE FARMA
                                                                    </option>
                                                                    <option value="16">STOK AWAL</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Exp Date</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id=""
                                                                    placeholder=""
                                                                    value="<?php echo date('2024-05-13'); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Lokasi</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="" value="B3">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Modal Barcode -->
                                    <div class="modal fade" id="modal-barcode" style="display: none;"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <img src="<?php echo base_url('assets/images/barcode.png') ?>"
                                                        alt="">
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Kartu -->

                                    <div class="modal fade" id="modal-kartu" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Kartu Stock Barang</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">

                                                    <h3>Kartu Stock Barang Balkesmas Wilayah Semarang</h3>
                                                    <div class="d-flex align-items-end">
                                                        <div class="d-flex">
                                                            <div class="mr-2">
                                                                <label class="">Tanggal Awal</label>
                                                                <input type="date" id="tanggal_awal" name="tanggal_awal"
                                                                    class="form-control tanggal"
                                                                    value="<?php echo date('Y-m-d'); ?>"
                                                                    placeholder="Tanggal">
                                                            </div>
                                                            <div class="mx-2">
                                                                <label class="">Tanggal Akhir</label>
                                                                <input type="date" id="tanggal_akhir"
                                                                    name="tanggal_akhir" class="form-control tanggal"
                                                                    value="<?php echo date('Y-m-d'); ?>"
                                                                    placeholder="Tanggal">
                                                            </div>
                                                        </div>
                                                        <div class="mx-2 d-flex">
                                                            <button type="button" id="btn-cari"
                                                                class="btn btn-info">Cari Data</button>
                                                            <button type="button" id="btn-export-excel"
                                                                class="btn btn-success">Export Excel</button>
                                                            <button type="button" id="btn-export-excel-detail"
                                                                class="btn btn-success" disabled>Export Excel
                                                                Detail</button>
                                                        </div>
                                                    </div>
\
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Modal Delete -->

                                    <div class="modal fade" id="modal-delete" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">

                                                    <h4>Apakah anda yakin ingin menghapus data ini ?</h4>

                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Hapus</button>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- Akhir isi Content -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>