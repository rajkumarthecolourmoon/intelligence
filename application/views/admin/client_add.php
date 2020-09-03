<?php include "header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/dashboard/clients">Back</a>

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Add Clients</h1>
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
  <div class="row">
    <div class="col-lg-12">
      <form role="Form" method="post" action="<?php echo base_url(); ?>admin/dashboard/add" accept-charset="UTF-8" enctype="multipart/form-data">
        <div class="form-group">
          <label for="fname">Client Image</label>
          <span class="text-danger"></span>
          <input type="file" id="image_desti" class="form-control" name="image_desti" placeholder="">
        </div>
        <div class="form-group">
          <label for="caption">Name</label>
          <span class="text-danger"><?php echo form_error('name'); ?></span>
          <input type="text" id="name" class="form-control" name="name" placeholder="">
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-info float-left" id="submitbtn" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "footer.php"; ?>