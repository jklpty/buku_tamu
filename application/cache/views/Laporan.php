<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Hari/Tanggal</th>
                                    <th>Jam</th>
                                    <th>Nama tamu</th>
                                    <th>Nama instansi</th>
                                    <th>Perihal</th>
                                    <th>Nomor telepon</th>
                                    <th>Keperluan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php if (empty($data_tamu)) : ?>
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <div class="alert alert-danger" role="alert">
                                                Data kosong!
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif ?>

                                <?php
                                $no = 1;
                                foreach ($data_tamu as $dt) { ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $dt['hari'] ?>/<?= $dt['tgl'] ?>-<?= $dt['bln'] ?>-<?= $dt['thn'] ?></td>
                                        <td><?= $dt['jam'] ?></td>
                                        <td><?= $dt['nama_tamu'] ?></td>
                                        <td><?= $dt['instansi'] ?></td>
                                        <td><?= $dt['Perihal'] ?></td>
                                        <td><?= $dt['Nomor_telepon'] ?></td>
                                        <td><?= $dt['keperluan'] ?></td>
                                        <td><?= $dt['keterangan'] ?></td>

                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Aksi
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                                    <a type="buuton" class="dropdown-item btn btn-sm btn-success" data-toggle="modal" data-target="#edit<?= $dt['id'] ?>"><i class="fas fa-edit" style="color: #2ecc71;"></i> Edit</a>
                                                    <a href="<?= base_url('laporan/hapus/' . $dt['id']) ?>" class="dropdown-item btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash" style="color: #d63031;"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>
<!-- /.container-fluid -->

<?php foreach ($data_tamu as $dt1) { ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit<?= $dt1['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDIT DATA TAMU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('Laporan/edit_data') ?>">

                    <div class="modal-body">

                        <input type="text" class="form-control" id="id" name="id" value="<?= $dt1['id'] ?>" hidden>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nama tamu</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $dt1['nama_tamu'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nama instansi</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" value="<?= $dt1['instansi'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Perihal</label>
                            <input type="text" class="form-control" id="Perihal" name="Perihal" value="<?= $dt1['Perihal'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nomor Telepon</label>
                            <input type="text" class="form-control" id="Nomor_telepon" name="Nomor_telepon" value="<?= $dt1['Nomor_telepon'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">keperluan</label>
                            <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $dt1['keperluan'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $dt1['keterangan'] ?>">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>