<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img style="width: 200px;" src="<?= base_url('assets/admin/img/') ?><?= $website[0]['logo'] ?>" alt="">
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 mt-3">
            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">STATISTIK DATA TAMU TAHUNAN</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myChart" width="1000" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->