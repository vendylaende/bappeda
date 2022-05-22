<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center"> 2021 © Ample Admin brought to you by <a href="https://www.wrappixel.com/">wrappixel.com</a>
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url(); ?>/backassets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url(); ?>/backassets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/backassets/js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="<?= base_url(); ?>/backassets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url(); ?>/backassets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>/backassets/js/custom.js"></script>
<script>
    function previewImg() {
        const sampul = document.querySelector('#sampul');
        const sampulLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');
        sampulLabel.textContent = sampul.files[0].name;

        const fileSampul = new FileReader();

        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

</body>

</html>