<?php include "header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/services/categories">Back</a>

  <h1 class="h3 mb-4 text-gray-800">Add Category</h1>
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
      <form role="Form" method="post" action="<?php echo base_url(); ?>admin/services/categories_add" accept-charset="UTF-8" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Category</label>
          <span class="text-danger"><?php echo form_error('category'); ?></span>
          <input type="text" id="category" class="form-control" name="category" placeholder="">
        </div>
        <div class="form-group">
          <label for="name">category Image</label>
          <span class="text-danger"><?php echo form_error('image'); ?></span>
          <input type="file" id="image" class="form-control" name="image" placeholder="">
        </div>
        <div class="form-group">
          <label for="short_description">Short_Description</label>
          <span class="text-danger"><?php echo form_error('category'); ?></span>
          <input type="text" id="short_description" class="form-control" name="short_description" placeholder="">
        </div>


        <div class="form-group">
          <label for="meta_keywords">Meta Keywords</label>
          <span class="text-danger"><?php echo form_error('meta_keywords'); ?></span>
          <input type="text" id="meta_keywords" class="form-control" name="meta_keywords" placeholder="">
        </div>
        <div class="form-group">
          <label for="meta_description">Meta Description</label>
          <span class="text-danger"><?php echo form_error('meta_description'); ?></span>
          <input type="text" id="meta_description" class="form-control" name="meta_description" placeholder="">
        </div>
        <div class="form-group">
          <label for="meta_title">Meta Title</label>
          <span class="text-danger"><?php echo form_error('meta_title'); ?></span>
          <input type="text" id="meta_title" class="form-control" name="meta_title" placeholder="">
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-info  float-left" id="submitbtn" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "footer.php"; ?>