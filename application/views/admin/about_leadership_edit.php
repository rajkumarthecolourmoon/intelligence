<?php include "header.php"; ?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>


<!-- Begin Page Content -->
<div class="container-fluid">
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/about/leadership">Back</a>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Leadership Update</h1>
    <div class="">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php } ?>
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
            <input type="hidden" name="id" value="<?php echo $leadership_edit->id ?>">

            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/about/leadership_update/<?php echo $leadership_edit->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fname">Silder Image</label>
                    <span class="text-danger"></span>

                    <input type="file" id="image" class="form-control" name="image" placeholder="" value="">
                    <img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $leadership_edit->image ?>" alt="">
                </div>

                <div class="form-group">
                    <label for="	description_one">Description Text</label>
                    <span class="text-danger"><?php echo form_error('description_one'); ?></span>
                    <textarea id="description_one" name="description_one" cols="40" rows="10" class="form-control" value="<? echo $leadership_edit->description_one ?>"></textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description </label>
                    <span class="text-danger"><?php echo form_error('description'); ?></span>
                    <textarea id="description" name="description" cols="20" rows="10" class="form-control" value="<?php echo $leadership_edit->description ?>"></textarea>

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
    CKEDITOR.replace('description_one');
</script>
<script>
    CKEDITOR.replace('description');
</script>