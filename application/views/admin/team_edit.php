<?php include "header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">
<a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/slider/team">Back</a>

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
            <input type="hidden" name="id" value="<?php echo $team_list->id ?>">
            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/slider/team_update/<?php echo $team_list->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="caption">Name</label>
                    <?php //print_r($this->data['team_list']);die; 
                    ?>
                    <span class="text-danger"><?php echo form_error('technology'); ?></span>
                    <input type="text" id="name" class="form-control" name="name" placeholder="" value="<?php echo $team_list->fullname; ?>">
                </div>
                <div class="form-group">
                    <label for="fname">Image</label>
                    <span class="text-danger"></span>
                    <input type="file" id="team" class="form-control" name="team" placeholder="" value="">
                    <img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $team_list->image ?>" alt="">

                </div>
                <div class="form-group">
                    <label for="caption"> Designation</label>
                    <span class="text-danger"><?php echo form_error('technology'); ?></span>
                    <input type="text" id="designation" class="form-control" name="designation" placeholder="" value="<?php echo $team_list->designation   ?>">
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