<?php include "header.php"; ?>


<!-- Content Wrapper -->
<!-- <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php //echo $this->session->flashdata('success'); 
                ?></strong>
    </div>
    <div id="content-wrapper" class="d-flex flex-column"> -->

<!-- Main Content -->
<div id="content">


  <!-- Topbar -->
  <section class="testimonial py-5" id="testimonial">
    <div class="Container-fluid">

      <div class="col-md-12 py-5 border">
        <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/contacts/address_list">Back</a>
        <div class="">
          <?php if ($this->session->flashdata('file_check')) { ?>
            <div class="alert alert-danger">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong><?php echo $this->session->flashdata('file_check'); ?></strong>
            </div>
          <?php } elseif ($this->session->flashdata('file_check1')) { ?>
            <div class="alert alert-primary">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong><?php echo $this->session->flashdata('file_check1'); ?></strong>
            </div>
          <?php } ?>
        </div>
        <h4 class="pb-4"> Add address</h4>
        <form id="form" method="post" action="<?php echo base_url(); ?>admin/contacts/address" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <?php echo form_error('company'); ?>
              <input id="company" name="company" placeholder="Company name" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
              <?php echo form_error('mobile'); ?>
              <input type="text" name="mobile" class="form-control" id="phonenumber" placeholder="Mobile number">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <?php echo form_error('address'); ?>
              <input id="address" name="address" placeholder="Address" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
              <?php echo form_error('state'); ?>
              <input type="text" name="state" class="form-control" id="state" placeholder="State">
            </div>
            <div class="form-group col-md-6">
              <?php echo form_error('email'); ?>
              <input id="email" name="email" placeholder="Email" class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
              <?php echo form_error('pincode'); ?>
              <input type="text" name="pincode" class="form-control   " placeholder="Pin Code" id="pincode">
            </div>
            <div class="form-check col-md-6">
              <?php echo form_error('country'); ?>
              <input id="country" name="country" placeholder="Country" class="form-control" type="text">
            </div>
            <div class="form-check col-md-6">
              <?php echo form_error('country'); ?>
              <input id="image" name="image" placeholder="" class="form-control" type="file">
              <label for="fname">Company Image</label>

            </div>
          </div>
          <div class="form-group">
            <br>
            <button id="signupSubmit" type="submit" class="btn btn-primary ">Add</button>
          </div>
        </form>
      </div>
    </div>
</div>
</section>
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2020</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

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
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?php echo base_url(''); ?>admin/login/logout">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>adminassests/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>adminassests/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>adminassests/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>adminassests/js/sb-admin-2.min.js"></script>

</body>

</html>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<script type="text/javascript">
  $("#phonenumber").change(function() {
    var a = $("#phonenumber").val();
    var filter = /^[7-9][0-9]{9}$/;

    if (filter.test(a)) {
      alert("valid");
    } else {
      alert("Enter Valide mobile number");
    }
  });
</script>