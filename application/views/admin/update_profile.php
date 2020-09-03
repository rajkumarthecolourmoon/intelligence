<?php include "header.php"; ?>

<?php //print_r($images->image);die();
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>adminassests/css/sb-admin-2.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
<h3><strong>Update Profile</strong></h3>
<div class="container emp-profile">


    <form action="<?php echo base_url() ?>admin/register/slider_update" method="post">
        <div class="form-group">
            <label for="firstname">Id</label>
            <input type="text" class="form-control" name="id" value="<?php echo $user_view->id; ?>" id="firstname" aria-describedby="firstname" placeholder="">

        </div>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $user_view->firstname; ?>" id="firstname" aria-describedby="firstname" placeholder="">

        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user_view->lastname; ?>" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $user_view->email; ?>" id="email" placeholder="">
        </div>

        <button type="submit" class="btn btn-info">Upadte</button>
    </form>

</div>

<?php include "footer.php"; ?>