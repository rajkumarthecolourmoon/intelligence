<?php include "header.php"; ?>



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->       
          <h1 class="h3 mb-4 text-gray-800">Update Password</h1>
          <div class="">
           <?php  if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
           <?php } ?>
          </div>
         <div class="row">
            <div class="col-lg-12">
            <form role="Form" method="post" action="<?php echo base_url();?>admin/login/password_update" accept-charset="UTF-8" enctype="multipart/form-data">
              <div class="form-group">
                <label for="fname">Old Password</label>
                <span class="text-danger"><?php echo form_error('oldpass'); ?></span>
                <input type="password" id="oldpass" class="form-control" name="oldpass" placeholder="">
              </div>
              <div class="form-group">
                  <label for="caption">New Password</label>
                  <span class="text-danger"><?php echo form_error('new_password'); ?></span>
				 <input type="password" id="new_password" class="form-control" name="new_password" placeholder="">
             </div>	
             <!-- <div class="form-group">
                  <label for="caption">Confirm Password</label>
                  <span class="text-danger"><?php echo form_error('c_password'); ?></span>
				 <input type="password" id="c_password" class="form-control" name="c_password" placeholder="">
             </div> -->
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

  