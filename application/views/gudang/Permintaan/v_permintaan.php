<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Permintaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Permintaan</li>
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
                            <span class="card-title" style="font-size: 18px; font-weight: bold;">Transaksi Permintaan
                                Obat Unit</span>
                        </div>
                        <div class="card-body">
                            <form id="form-transaksi" method="POST"
                                action="https://balkesmassmg.id/permintaanBarangUnit/create" data-parsley-validate=""
                                novalidate="">
                                <input type="hidden" name="_token" value="B6epgrPD1p2BMCXFvN5Gnmo2VfgjXhUrJlszg3J1">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Tanggal</label>
                                            <div class="col-md-8">
                                                <input type="hidden" id="id_unit" name="id_unit_tujuan" value="22">
                                                <input type="date" id="tanggal_transaksi" name="tanggal_transaksi"
                                                    class="form-control tanggal readonly" value="<?php echo date('Y-m-d');?>"
                                                    placeholder="Tanggal" required=""
                                                    data-parsley-errors-messages-disabled="" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Unit</label>
                                            <div class="col-md-8">
                                                <select name="tabel-data_length" aria-controls="tabel-data" class=" form-control form-control-sm">
                                                    <option value="farmasi">Farmasi</option>
                                                    <option value="a">a</option>
                                                    <option value="b">b</option>
                                                    <option value="c">c</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label"
                                                style="white-space: nowrap;">Keterangan</label>
                                            <div class="col-md-8">
                                                <textarea type="text" id="keterangan" name="keterangan"
                                                    class="form-control" value="" placeholder="Keterangan"
                                                    style="height: 85px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <hr style="margin: 5px 0px 10px 0px;">
                                </div>
                                <div class="form-group row form-inline">
                                    <label class="col-md-2 col-12 col-form-label" style="justify-content: start;">Pilih
                                        Barang / Obat</label>
                                    <div class="col-md-10 col-12">
                                        <select id="select_cari_barang" class="form-control select2-hidden-accessible"
                                            style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <div class="table-responsive">
                                        <table id="tabel-trans" class="table table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Nama Barang / Obat</th>
                                                    <th style="width: 100px;">Satuan</th>
                                                    <th class="text-right" style="width: 70px;">Stock</th>
                                                    <th class="text-right" style="width: 70px;">Jumlah</th>
                                                    <th class="text-center" style="width: 50px;">
                                                        <i class="fas fa-th-large"></i>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="text-center" colspan="3">GrandTotal</th>
                                                    <th class="text-right">0</th>
                                                    <th class="text-center" style="width: 50px;">
                                                        <i class="fas fa-th-large"></i>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <input type="hidden" id="total_penerimaan" name="total_penerimaan" value="0">
                                    </div>
                                </div>
                                <div class="col-12 m-0 p-0">
                                    <hr style="margin: 5px 0px 10px 0px;">
                                    <div class="btn-group" style="width: 100%;">
                                        <button type="button" id="btn-batal" class="btn btn-secondary">Batal</button>
                                        <button type="button" id="btn-save" class="btn btn-success"
                                            disabled="disabled">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir isi Content -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>