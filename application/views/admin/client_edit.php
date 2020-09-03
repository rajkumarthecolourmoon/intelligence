<?php include "header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Clients</h1>
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
            <input type="hidden" name="id" value="<?php echo $client->id ?>">

            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/dashboard/update/<?php echo $client->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="caption">Name</label>
                    <?php //print_r($this->data['client']);die; 
                    ?>
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                    <input type="text" id="name" class="form-control" name="name" placeholder="" value="<?php echo $client->name; ?>">


                </div>
                <div class="form-group">
                    <label for="fname">Silder Image</label>
                    <span class="text-danger"></span>
                    <img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $client->client_images ?>" alt="">
                    <input type="file" id="image_desti" class="form-control" name="image_desti" placeholder="" value="">
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