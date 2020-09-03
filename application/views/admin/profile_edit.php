<?php include "header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">
<a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/profile/">Back</a>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update</h1>
    <div class="">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php } ?>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <input type="hidden" name="id" value="<?php echo $edit->id ?>">

            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/profile/update/<?php echo $edit->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="caption">Title</label>             
                    <span class="text-danger"><?php echo form_error('title'); ?></span>
                    <input type="text" id="title" class="form-control" name="title" placeholder="" value="<?php echo $edit->description; ?>">
                </div>
            <div class="form-group">
                    <label for="caption">Description</label>               
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                    <input type="text" id="description" class="form-control" name="description" placeholder="" value="<?php echo $edit->description; ?>">
                </div>
                <div class="form-group">
                    <label for="fname">Logo</label>
                    <span class="text-danger"></span>
                    <input type="file" id="logo" class="form-control" name="logo" placeholder="" value="">
                    <img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $edit->image ?>" alt="">

                </div>
                <div class="form-group">
                <label for="meta_keywords">Meta Keywords</label>
                <span class="text-danger"><?php echo form_error('meta_keywords'); ?></span>
                <input type="text" id="meta_keywords" class="form-control" name="meta_keywords" value="<?php echo $edit->meta_keywords; ?>" placeholder="">
                </div>
                <div class="form-group">
                <label for="meta_description">Meta Description</label>
                <span class="text-danger"><?php echo form_error('meta_description'); ?></span>
                <input type="text" id="meta_description" class="form-control" name="meta_description" value="<?php echo $edit->meta_description; ?>" placeholder="">
                </div>
                <div class="form-group">
                <label for="meta_title">Meta Title</label>
                <span class="text-danger"><?php echo form_error('meta_title'); ?></span>
                <input type="text" id="meta_title" class="form-control" name="meta_title" value="<?php echo $edit->meta_title; ?>" placeholder="">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <span class="text-danger"><?php echo form_error('email'); ?></span>
                <input type="text" id="email" class="form-control" name="email" value="<?php echo $edit->forgot_pass_email; ?>" placeholder="">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info float-left" id="submitbtn" name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "footer.php"; ?>