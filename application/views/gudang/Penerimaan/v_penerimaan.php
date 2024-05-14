<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Penerimaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Penerimaan</li>
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
                            <span class="card-title" style="font-size: 18px; font-weight: bold;">Transaksi Penerimaan
                                Obat</span>
                        </div>
                        <div class="card-body">
                            <form id="form-transaksi" method="POST"
                                action="https://balkesmassmg.id/penerimaanBarang/create" data-parsley-validate=""
                                novalidate="">
                                <input type="hidden" name="_token" value="YMPxp9m2QdUcueGvKXG2MCq9TmbVtJBi4ZXc4hXe">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Tanggal</label>
                                            <div class="col-md-8">
                                                <input type="date" id="tanggal_transaksi" name="tanggal_transaksi"
                                                    class="form-control tanggal readonly" value="<?php echo date('Y-m-d');?>"
                                                    placeholder="Tanggal" required=""
                                                    data-parsley-errors-messages-disabled="" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Tgl Dok Luar</label>
                                            <div class="col-md-8">
                                                <input type="date" value="<?php echo date('Y-m-d');?>"
                                                    id="tanggal_dokumen" name="tanggal_dokumen"
                                                    class="form-control tanggal" value="<?php echo date('Y-m-d');?>"
                                                    placeholder="Tgl Dok Luar" required=""
                                                    data-parsley-errors-messages-disabled="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Sumber Dana</label>
                                            <div class="col-md-8">
                                                <select id="id_sumber_dana" name="id_sumber_dana"
                                                    class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected="">-- Pilih Sumber Dana --</option>
                                                    <option value="1">APBD</option>
                                                    <option value="3">APBN</option>
                                                    <option value="5">DROPING</option>
                                                    <option value="6">HIBAH</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Tahun Anggaran</label>
                                            <div class="col-md-8">
                                                <input type="text" id="tahun_anggaran" name="tahun_anggaran"
                                                    class="form-control" value="2024" placeholder="Tahun Anggaran"
                                                    required="" data-parsley-errors-messages-disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Supplier</label>
                                            <div class="col-md-8">
                                                <select id="id_supplier" name="id_supplier"
                                                    class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected="">-- Pilih Supplier --</option>
                                                    <option value="15">PT .TEMPO SCAN PASIFIC</option>
                                                    <option value="10">PT COMBI PUTRA MANDIRI</option>
                                                    <option value="14">PT. ANTAR MITRA SEMBADA</option>
                                                    <option value="6">PT. ANUGRAH ARGON MEDIKA</option>
                                                    <option value="7">PT. ANUGRAH FARMINDO LESTARI</option>
                                                    <option value="9">PT. ENSEVAL PUTRA MEGA TRADING</option>
                                                    <option value="5">PT. INDOFARMA GLOBAL MEDIKA</option>
                                                    <option value="1">PT. KIMIA FARMA</option>
                                                    <option value="13">PT. MENSA BINA SUKSES</option>
                                                    <option value="11">PT. MILLENIUM PHARMACON INDONESIA</option>
                                                    <option value="8">PT. PARIT PADANG</option>
                                                    <option value="2">PT. RAJAWALI NUSINDO</option>
                                                    <option value="12">PT. SAPTA SARI TAMA</option>
                                                    <option value="4">PT. TEMPO SCAN PASIFIK</option>
                                                    <option value="3">PT. TIARA KENCANA</option>
                                                    <option value="16">STOK AWAL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Pengirim</label>
                                            <div class="col-md-8">
                                                <input type="text" id="nama_pengirim" name="nama_pengirim"
                                                    class="form-control" value="" placeholder="Pengirim" required=""
                                                    data-parsley-errors-messages-disabled="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label"
                                                style="white-space: nowrap;">Keterangan</label>
                                            <div class="col-md-8">
                                                <textarea type="text" id="keterangan" name="keterangan"
                                                    class="form-control" value="" placeholder="Keterangan"
                                                    style="height: 84px;"></textarea>
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
                                        <table id="tabel-trans" class="table table-striped table-hover"
                                            style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Nama Barang / Obat</th>
                                                    <th style="width: 150px;">Batch</th>
                                                    <th style="width: 150px;">Expired Date</th>
                                                    <th style="width: 150px;">Satuan</th>
                                                    <th class="text-right" style="width: 100px;">Harga</th>
                                                    <th class="text-right" style="width: 70px;">Jumlah</th>
                                                    <th class="text-right" style="width: 120px;">SubTotal</th>
                                                    <th class="text-center" style="width: 50px;">
                                                        <i class="fas fa-th-large"></i>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="text-center" colspan="6">GrandTotal</th>
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