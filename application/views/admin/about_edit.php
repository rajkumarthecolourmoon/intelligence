<?php include "header.php"; ?>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/about/index">Back</a>

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
            <?php //print_r( $about_services->description);die; 
            ?>
            <input type="hidden" name="id" value="<?php echo $about_services->id ?>">

            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/about/update/<?php echo $about_services->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fname">Image</label>
                    <input type="file" id="image" class="form-control" name="image" placeholder="">
                    <img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $about_services->image ?>" alt="">

                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <span class="text-danger"><?php echo form_error('title'); ?></span>
                    <input type="text" id="title" class="form-control" name="title" placeholder="" value="<?php echo $about_services->title; ?>">
                </div>
                <div class="form-group">
                    <label for="first_title">First Title</label>
                    <span class="text-danger"><?php echo form_error('first_title'); ?></span>
                    <input type="text" id="first_title" class="form-control" name="first_title" placeholder="" value="<?php echo $about_services->first_title; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Second Title</label>
                    <span class="text-danger"><?php echo form_error('description'); ?></span>
                    <input type="text" id="first_title" class="form-control" name="description" placeholder="" value="<?php echo $about_services->description;  ?>">


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
    CKEDITOR.replace("description");
</script>