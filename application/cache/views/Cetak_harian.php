<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $website[0]['nama'] ?></title>
    <!-- Favicons -->
    <link href="<?= base_url('assets/admin/img/') ?><?= $website[0]['logo'] ?>" rel="icon">
    <link href="<?= base_url('assets/admin/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->

    <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>summernote/summernote-bs4.min.css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-2">
                            <img style="max-width: 180px;" src="<?= base_url('assets/admin/img/') ?><?= $website[0]['logo'] ?>" alt="">
                        </div>
                        <div class="col-md-8 text-center">
                            <h3 class="font-weight-bold">DAFTAR KUNJUNGAN TAMU</h3>
                            <h3 class="font-weight-bold">PT PELINDO REGIONAL 4 CABANG AMBON</h3>
                            <p>Jl. Yos Sudarso No.16, Kel Wainitu, Kec. Nusaniwe, Kota Ambon, Maluku</p>

                        </div>
                        <div class="col-md-2">
                            <!-- <img style="max-width: 150px;" src="<?= base_url('assets/admin/img/') ?><?= $website[0]['logo'] ?>" alt=""> -->
                        </div>
                    </div>
                    <hr>




                    <div class="row">
                        <div class="col">

                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                        <th>No</th>
                                            <th>Hari/Tanggal</th>
                                            <th>Jam</th>
                                            <th>Nama tamu</th>
                                            <th>Nama instansi</th>
                                            <th>Perihal</th>
                                            <th>Nomor telepon</th>
                                            <th>Keperluan</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php if (empty($cetak_harian)) : ?>
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
                                        foreach ($cetak_harian as $ch) { ?>

                                            <tr>
                                            <td><?= $no++ ?></td>
                                                <td><?= $ch['hari'] ?>/<?= $ch['tgl'] ?>-<?= $ch['bln'] ?>-<?= $ch['thn'] ?></td>
                                                <td><?= $ch['jam'] ?></td>
                                                <td><?= $ch['nama_tamu'] ?></td>
                                                <td><?= $ch['instansi'] ?></td>
                                                <td><?= $ch['Perihal'] ?></td>
                                                <td><?= $ch['Nomor_telepon'] ?></td>
                                                <td><?= $ch['keperluan'] ?></td>
                                                <td><?= $ch['keterangan'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>



                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <script type="text/javascript">
        window.print();
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Page level plugins -->
    <script src="<?= base_url('assets/admin/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/admin/') ?>js/demo/datatables-demo.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>
    <!-- <script src="<?= base_url('assets/admin/') ?>summernote/summernote-bs4.min.js"></script> -->
    <script src="<?= base_url('assets/admin/') ?>dist/sweetalert2.all.min.js"></script>
    <!-- <script src="<?= base_url('assets/admin/') ?>dist/myscript.js"></script> -->

    <script src="<?= base_url('assets/admin/') ?>ckeditor/ckeditor.js"></script>