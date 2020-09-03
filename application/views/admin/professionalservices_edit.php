<?php include "header.php"; ?>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/professionalservices">Back</a>

    <h1 class="h3 mb-4 text-gray-800">Add Services</h1>
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

            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/professionalservices/update/<?php echo $edit->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fname">Image</label>
                    <span class="text-danger"></span>
                    <img class="thumbnail" style="height: 50px; width: 150px;" src="<?php echo base_url(); ?>uploads/<?php echo $edit->images ?>" alt="">
                    <input type="file" id="services" class="form-control" name="services1" placeholder="" value="">
                </div>
                <div class=" form-group">
                    <label for="name">Title</label>
                    <span class="text-danger"><?php echo form_error('title'); ?></span>
                    <input type="text" id="title" class="form-control" name="title" placeholder="" value="<?php echo $edit->title; ?>">
                </div>
                <div class=" form-group">
                    <label for="name">First Title</label>
                    <span class="text-danger"><?php echo form_error('first Title'); ?></span>
                    <input type="text" id="first_title" class="form-control" name="first_title" placeholder="" value="<?php echo $edit->first_title; ?>">
                </div>
                <div class="form-group">
                    <label for="dscription">Description</label>
                    <textarea id="description" name="description" cols="40" rows="5" class="form-control"><?php echo $edit->descriptions; ?></textarea>
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