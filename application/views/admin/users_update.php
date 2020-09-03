<?php include "header.php"; ?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>

    <!-- Content Wrapper -->
    <!-- <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php //echo $this->session->flashdata('success'); ?></strong>
    </div>
    <div id="content-wrapper" class="d-flex flex-column"> -->
   
      <!-- Main Content -->
      <div id="content">
      <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>

    <?php } else if($this->session->flashdata('error')){  ?>

        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>

    <?php } ?>
       
           <?php  //echo "<pre/>"; print_r($employee);die; ?>
          
<section class="testimonial py-5" id="testimonial">
    
    <div class="container">
 
        <form action="<?php echo base_url()?>admin/register/update" method ="post">
        
               <div class="form-group">
                    <label for="id">Id</label>
                    <input id="id" name="id" placeholder="Full Name" value="<?php echo $employee->id; ?>" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="firstname">Full Name</label>
                    <input id="Full Name" name="name" placeholder="Full Name" value="<?php echo $employee->name; ?>"  class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $employee->email; ?>"   id="inputEmail4" placeholder="Email">
                
                </div>
                <div class="form-group">
                    <label for="lastname">Mobile</label>
                    <input id="Mobile No." name="mobile" placeholder="Mobile No." value="<?php echo $employee->phone; ?>"  class="form-control"  type="text">
                </div>
                <div class="form-group">
                    <label for="lastname">Mobile</label>
                    <input id="Mobile No." name="mobile" placeholder="Mobile No." value="<?php echo $employee->state; ?>"  class="form-control"  type="text">
                </div>
                <div class="form-group">
                    <label for="file">File Upload</label>
                    <input type="file" name="file" class="form-control-file" value="<img class="thumbnail style="height: 100px; width: 100px;" 
                                src="<?php echo base_url() ?>adminassests/img/<?php echo $author->image ?>"  id="exampleFormControlFile1">
                
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" value="<?php echo $employee->gender; ?>"  class="form-control-file" id="exampleFormControlFile1">        
                </div>
                <div class="form-group">
                <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" cols="40" rows="5" value="<?php echo $employee->message; ?>"  class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Upadte</button>
        </form>  
     
     </div>
</section>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('');?>admin/login/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>adminassests/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>adminassests/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>adminassests/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>adminassests/js/sb-admin-2.min.js"></script>

</body>

</html>
<script>
CKEDITOR.replace("comment");
</script>