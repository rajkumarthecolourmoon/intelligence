<?php include "header.php"; ?>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>adminassests/ckdeitor/ckdeitor.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/services">Back</a>

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

            <form role="Form" method="post" action="<?php echo base_url(); ?>admin/services/update/<?php echo $edit->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">
               
               
            <div class="form-group">
                <label for="fname"> Services</label>
                <select id="inputState" class="form-control" name="services">
                    
                  
                    <?php foreach($categories as $item){ ?>

                        <option value="<?php echo $item->id ;?>" <?php if($item->id==$edit->services_categories_id) { echo "selected"; }?>><?php echo $item->service_category ;?></option>
                    <?php } ?>
                   
                  </select>
              </div>
                <div class="form-group">
                    <label for="fname">Image</label>
                    <span class="text-danger"></span>
                    <input type="file" id="image" class="form-control" name="image" placeholder="" value="">
                    <img class="thumbnail" style="height: 50px; width: 150px;" src="<?php echo base_url(); ?>uploads/<?php echo $edit->image ?>" alt="">

                </div>
                <div class=" form-group">
                    <label for="name">Titles</label>
                    <span class="text-danger"><?php echo form_error('tittle'); ?></span>
                    <input type="text" id="tittle" class="form-control" name="tittle" placeholder="" value="<?php echo $edit->tittle; ?>">
                </div>
                <div class=" form-group">
                    <label for="name">First Title</label>
                    <span class="text-danger"><?php echo form_error('tittle'); ?></span>
                    <input type="text" id="first_title" class="form-control" name="first_title" placeholder="" value="<?php echo $edit->first_title; ?>">
                </div>
                <div class="form-group">
                    <label for="dscription">Description</label>
                    <textarea id="description" name="description" cols="40" rows="5" class="form-control"><?php echo $edit->description; ?></textarea>
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