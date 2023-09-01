 </div>
 <!-- End of Main Content -->

 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Pelindo Regional 4 Ambon 2022.</span>
         </div>
     </div>
 </footer>

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Anda yakin akan keluar?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Pilih "logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?= base_url('Login/logout') ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>

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


 <script>
     var ctx = document.getElementById("myChart").getContext('2d');
     var myChart = // Bar chart
         new Chart(document.getElementById("myChart"), {
             type: 'bar',
             data: {
                 labels: [
                     <?php foreach ($bln as $dt) { ?>

                         "<?= $dt['bln'] ?>",
                     <?php } ?>
                 ],
                 datasets: [{
                     label: "Jumlah Tamu",
                     backgroundColor: ["#3e95cd", "#f9ca24", "#eb4d4b", "#6ab04c", "#e056fd", "#686de0", "#30336b", "#4834d4", "#130f40", "#22a6b3", "#cd6133", "#ff9ff3"],
                     data: [

                                                <?php
                            if ($hitungtamu2) {
                                foreach ($hitungtamu2 as $d) {
                            ?>
                                 <?php echo $d->total ?>,
                         <?php
                                }
                            }
                            ?>
                     ]
                 }]
             },
             options: {
                 legend: {
                     display: false
                 },
                 title: {
                     display: true,
                     text: 'Data Tamu Tahunan'
                 }
             }
         });
 </script>