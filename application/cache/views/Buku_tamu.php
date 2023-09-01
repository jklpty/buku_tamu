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
    <link href="<?= base_url('assets/admin/') ?>fontawesome/css/all.css" rel="stylesheet">
    <!-- <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background-image:
                linear-gradient(to bottom, rgba(255, 255, 255, 0.110), rgba(255, 255, 255, 0.295)),
                url('<?= base_url('assets/admin/img/bg6.jpeg') ?>');
            background-size: cover;
        }
    </style>

</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="text-center my-4">
                    <img class="text-center" style="max-width: <?= $website[0]['ukuran_logo'] ?>px;" src="<?= base_url('assets/admin/') ?>img/<?= $website[0]['logo'] ?>" alt="">
                </div>
                <div class="card shadow-lg" style="box-shadow: 7px 10px 10px 10px;">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-4">
                                    <div class="text-center">

                                        <h4 class="text-gray-900 mt-1">Buku Tamu</h4>

                                        <?php
                                        date_default_timezone_set("Asia/Jayapura");
                                        ?>
                                        <p><?= $hari ?>: <b><span id="jam" style="font-size:24"></span></b></p>
                                    </div>
                                    <hr>
                                    <form class="user" action="<?= base_url('Buku_tamu/tambah') ?>" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2 col-form-label-sm" for="exampleInputEmail1">Nama Tamu</label>
                                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Tamu">

                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2 col-form-label-sm" for="exampleInputEmail1">Nama Instansi</label>
                                            <input type="text" class="form-control form-control-sm" id="instansi" name="instansi" placeholder="Nama Instansi">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2 col-form-label-sm" for="exampleInputEmail1">Perihal</label>
                                            <input type="text" class="form-control form-control-sm" id="Perihal" name="Perihal" placeholder="Perihal">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2 col-form-label-sm" for="exampleInputEmail1">Nomor Telepon</label>
                                            <input type="text" class="form-control form-control-sm" id="Nomor Telepon" name="Nomor Telepon" placeholder="Nomor Telepon">
                                        </div>


                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2 col-form-label-sm" for="exampleFormControlTextarea1">Keperluan</label>
                                            <textarea class="form-control" id="keperluan" name="keperluan" autocomplete="off" rows="2"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold ml-2 col-form-label-sm" for="exampleInputEmail1">Keterangan</label>
                                            <input type="text" class="form-control form-control-sm" id="keterangan" name="keterangan" placeholder="Keterangan">
                                        </div>

                                        <hr>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                <i class="fa-solid fa-arrow-right-to-arc"></i> Submit
                                            </button>
                                        </div>
                                    </form>

                                    <!-- Footer -->
                                    <footer class="sticky-footer bg-white">
                                        <div class="container my-auto">
                                            <div class="copyright text-center my-auto">
                                                <span>Copyright &copy; Pelindo Regional 4 Ambon 2022.</span>
                                            </div>
                                        </div>
                                    </footer>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="<?= base_url('assets/admin/') ?>js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>dist/sweetalert2.all.min.js"></script>

    <script>
        <?php if ($this->session->flashdata('pass_salah')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Password yang anda masukan salah'

            });
        <?php } ?>

        <?php if ($this->session->flashdata('pass_user_salah')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Password dan Username yang anda masukan salah'

            });
        <?php } ?>

        <?php if ($this->session->flashdata('ubah_pass')) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: 'Anda Berhasil Mengubah Password, silhkan login kembali'

            });
        <?php } ?>
    </script>

    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ':' + m + ':' + s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>

</body>

</html>