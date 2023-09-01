<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="section-title">

        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Ubah Password</h3>
                    </div>
                    <div class="card-body">

                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <form action="<?= base_url('Ubah_password/update_pass') ?>" method="POST">

                                    <div class="form-group">
                                        <label for="password_sekarang">Password saat ini</label>
                                        <input type="password" class="form-control" id="password_sekarang" name="password_sekarang" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password_baru1">Password Baru</label>
                                        <input type="password" class="form-control" id="password_baru1" name="password_baru1" autocomplete="off">
                                    </div>

                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Ubah Password</span>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->