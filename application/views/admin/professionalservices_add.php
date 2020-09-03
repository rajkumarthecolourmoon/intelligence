<?php include "header.php"; ?>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/professionalservices">Back</a>

    <h1 class="h3 mb-4 text-gray-800">Add Professionalservices</h1>
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
        <?php echo validation_errors(); ?>
        <form role="Form" method="post" action="<?php echo base_url(); ?>admin/professionalservices/add" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fname">Services</label>
                <span class="text-danger"></span>
                <input type="file" id="image" class="form-control" name="image" placeholder="">
            </div>
            <div class="form-group">
                <label for="name">Title</label>
                <span class="text-danger"><?php echo form_error('title'); ?></span>
                <input type="text" id="title" class="form-control" name="title" placeholder="">
            </div>
            <div class="form-group">
                <label for="dscription">First Title</label>
                <span class="text-danger"><?php echo form_error('first_title'); ?></span>
                <input type="text" id="first_title" class="form-control" name="first_title" placeholder="">
            </div>
            <div class="form-group">
                <label for="dscription">Description</label>
                <textarea id="description" name="description" cols="40" rows="5" class="form-control"></textarea>
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
<script>
    CKEDITOR.replace("description");
</script>