<?php include "header.php"; ?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>


<!-- Begin Page Content -->
<div class="container-fluid">
<a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/about/about_core_competencies">Back</a>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Update</h1>
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
            <input type="hidden" name="id" value="<?php echo $core->id ?>">
            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/about/about_core_competencies_update/<?php echo $core->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fname">Silder Image</label>
                    <span class="text-danger"></span>

                    <input type="file" id="image" class="form-control" name="image" placeholder="" value="">
                    <img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $core->image ?>" alt="">
                </div>
                <div class="form-group">
                    <label for="text">Text Line </label>
                    <span class="text-danger"><?php echo form_error('text'); ?></span>
                    <input type="text" id="text" name="text" class="form-control" value="<?php echo $core->text_line ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <span class="text-danger"><?php echo form_error('description'); ?></span>
                    <textarea id="description" name="description" cols="40" rows="10" class="form-control" value="<? echo $core->description ?>"></textarea>
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
<script>
    CKEDITOR.replace('description');
</script>