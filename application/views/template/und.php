
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin.min.js') ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/demo/datatables2.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.buttons.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/buttons.flash.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/buttons.print.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/buttons.html5.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/jszip.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/pdfmake.min.js') ?>"></script>

  <script>
  // Disable form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
</body>

</html>
