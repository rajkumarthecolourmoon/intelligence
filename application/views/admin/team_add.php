<?php include "header.php"; ?>




<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/slider/team">Back</a>

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Team</h1>
  <div class="">
    <?php if ($this->session->flashdata('success')) { ?>
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
      </div>
    <?php } elseif ($this->session->flashdata('error')) { ?>
      <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php echo $this->session->flashdata('error'); ?></strong>
      </div>
    <?php } ?>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <form role="Form" method="post" action="<?php echo base_url(); ?>admin/slider/add_team" accept-charset="UTF-8" enctype="multipart/form-data">
      <div class="form-group">
        <label for="fname">Image</label>

        <input type="file" id="team" class="form-control" name="team" placeholder="">
      </div>
      <div class="form-group">
        <label for="name">Full Name</label>
        <span class="text-danger"><?php echo form_error('name'); ?></span>
        <input type="text" id="name" class="form-control" name="name" placeholder="">
      </div>
      <div class="form-group">
        <label for="designation">Designation</label>
        <span class="text-danger"><?php echo form_error('designation'); ?></span>
        <input type="text" id="designation" class="form-control" name="designation" placeholder="">
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-success float-left" id="submitbtn" name="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->