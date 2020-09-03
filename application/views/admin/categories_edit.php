<?php include "header.php"; ?>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/services/categories">Back</a>

    <h1 class="h3 mb-4 text-gray-800">Update Categories</h1>
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
            <input type="hidden" name="id" value="<?php echo $cat_edit->id ?>">

            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/services/categories_update/<?php echo $cat_edit->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fname">Categories</label>
                    <span class="text-danger"></span>
                    <input type="text" id="Categories" class="form-control" name="Categories" placeholder="" value="<?php echo $cat_edit->service_category; ?>">
                </div>
                <div class="form-group">
                    <label for="fname"> Image</label>
                    <span class="text-danger"></span>
                    <input type="file" id="image" class="form-control" name="image" placeholder="" value="">
                    <img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $cat_edit->image ?>" alt="">

                </div>
                <div class="form-group">
                    <label for="short_description">Short_Description</label>
                    <span class="text-danger"></span>
                    <input type="text" id="short_description" class="form-control" name="short_description"  placeholder="" value="<?php echo $cat_edit->short_description; ?>">
                </div>
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <span class="text-danger"><?php echo form_error('meta_keywords'); ?></span>
                    <input type="text" id="meta_keywords" class="form-control" name="meta_keywords" value="<?php echo $cat_edit->meta_keywords; ?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <span class="text-danger"><?php echo form_error('meta_description'); ?></span>
                    <input type="text" id="meta_description" class="form-control" name="meta_description" value="<?php echo $cat_edit->meta_description; ?>" placeholder="">
                </div>
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <span class="text-danger"><?php echo form_error('meta_title'); ?></span>
                    <input type="text" id="meta_title" class="form-control" name="meta_title" value="<?php echo $cat_edit->meta_title; ?>" placeholder="">
                    </div>
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
    CKEDITOR.replace("comment");
</script>