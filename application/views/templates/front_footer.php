            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; LPK <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= base_url('assets/'); ?>js/jquery.js"></script>
            <script src="<?= base_url('assets/'); ?>datatable/jquery.datatables.js"></script>
            <script src="<?= base_url('assets/'); ?>datatable/datatables.js"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $("#table-datatable").dataTable();
                });
            </script>
            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>