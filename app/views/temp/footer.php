    <!-- Footer -->
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sing Up!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE ?>/signup/tambah" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input hidden type="text" name='id' id="id" class="form-control form-control-user" id="exampleInputEmail">
                        </div>
                        <div class="form-group">
                            <input type="text" name='nama' id="nama" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="nama" placeholder="Nama ...">
                        </div>
                        <div class="form-group">
                            <input type="email" name='email' id="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="file" name="gambar" id="gambar" class="form-control form-control-user" id="exampleInputPassword">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Sign up now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= BASE ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= BASE ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= BASE ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= BASE ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= BASE ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= BASE ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= BASE ?>/js/demo/chart-pie-demo.js"></script>

    <script src="<?= BASE ?>/js/demo/datatables-demo.js"></script>

    <script src="<?= BASE ?>/js/wkwk.js"></script>

    </body>

    </html>