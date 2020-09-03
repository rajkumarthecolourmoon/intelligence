<?php include "header.php"; ?>

<?php //print_r($images->image);die(); ?> 
    

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>adminassests/css/sb-admin-2.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">

            <form method="post" method = "post" action="<?php echo base_url() ?>admin/profile/profile" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo base_url() ?>adminassests/img/<?php echo $images->image ?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="photo" id="photo" class="fa fa-upload" accept="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $images->fullname ?>
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a class="btn btn-info profile-edit-btn " href="<?php echo base_url('');?>admin/profile/editprofile">Edit Profile</a>
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">PHP</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <!-- <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                               <input type="text" name="userid" class="form-control">
                                            </div>
                                            <br><br> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                                
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" value="<?php echo $images->fullname ?>">
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="email" class="form-control" value="<?php echo $images->email ?>">
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="mobile" class="form-control" value="<?php echo $images->mobile ?>">
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="profession" class="form-control" value="<?php echo $images->profession ?>">
                                            </div>
                                        </div>
                                        <br><br>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
							   <button id="signupSubmit" type="submit" class="btn btn-info btn-block">submit</button>
					    	</div>
                    </div>
                </div>
            </form>           
        </div>

      <?php include "footer.php"; ?>    
<script type="text/javascript">

$("#photo").rules("add", {
        accept: "jpg|jpeg|png|ico|bmp"
    });

</script>