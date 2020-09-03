<?php include "header.php"; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/dashboard/socialmedialinks">Back</a>

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Social Media Links</h1>
  <?php echo $this->session->flashdata('msg'); ?>
  <div class="row">
    <div class="col-lg-12">
      <form role="Form" method="post" action="<?php echo base_url(); ?>admin/dashboard/links" accept-charset="UTF-8" enctype="multipart/form-data">
        <div class="form-group">

        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="text-danger"><?php echo form_error('linkedin'); ?></span>
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-linkedin"></i>
              </span>
            </div>
            <input type="text" class="form-control" name="linkedin" placeholder="linkedin link">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="text-danger"><?php echo form_error('facebook'); ?></span>
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-facebook"></i>
              </span>
            </div>
            <input type="text" class="form-control" name="facebook" placeholder="facebook link">
          </div>
        </div>
        <div class="form-group">

        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="text-danger"><?php echo form_error('twitter'); ?></span>
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-twitter"></i>
              </span>
            </div>
            <input type="text" class="form-control" name="twitter" placeholder="twitter link">
          </div>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-success float-left" id="submitbtn" name="submit">Submit</button>

      </form>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->