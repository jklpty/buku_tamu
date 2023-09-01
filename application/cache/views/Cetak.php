<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <p class="font-weight-bold">Cetak laporan harian</p>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Laporan/cetak_harian') ?>" method="POST" target="_blank">
                <div class="row">

                    <div class="col-md-1">
                        <button class="btn btn-primary mt-4" type="submit">Cetak</button>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="dd">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="bln">Bulan</label>
                            <input type="text" class="form-control" id="bulan" name="bulan" placeholder="mm">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="tgl">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="yyyy">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="card mt-2">
        <div class="card-header">
            <p class="font-weight-bold">Cetak laporan bulanan</p>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Laporan/cetak_bulanan') ?>" method="POST" target="_blank">
                <div class="row">

                    <div class="col-md-1">
                        <button class="btn btn-primary mt-4" type="submit">Cetak</button>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="bulan">Bulan</label>
                            <input type="text" class="form-control" id="bulan" name="bulan" placeholder="mm">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="yyyy">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="card mt-2">
        <div class="card-header">
            <p class="font-weight-bold">Cetak laporan tahunan</p>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Laporan/cetak_tahunan') ?>" method="POST" target="_blank">
                <div class="row">

                    <div class="col-md-1">
                        <button class="btn btn-primary mt-4" type="submit">Cetak</button>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="yyyy">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


</div>
<!-- /.container-fluid -->