</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/plantilla/lib/chart/chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plantilla/lib/easing/easing.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plantilla/lib/waypoints/waypoints.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plantilla/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plantilla/lib/tempusdominus/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plantilla/lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plantilla/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url('assets/plantilla/js/main.js') ?>"></script>
<script>
    //read flashdata and alert
    <?php if ($this->session->flashdata('mensaje')): ?>
        alert('<?php echo $this->session->flashdata('mensaje'); ?>');
    <?php endif; ?>
</script>
</body>

</html>