<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>adminassests/favicon1.png">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
}
.login-form form {        
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.input-group-addon .fa {
    font-size: 18px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
.bottom-action {
  	font-size: 14px;
}
.error {
        color: red;
    }
</style>
</head>
<body>
<div class="login-form">
<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-info">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong><?php echo $this->session->flashdata('error'); ?></strong>
   </div>
    <?php } ?>
<?php if ($this->session->flashdata('email_check')) { ?>
    <div class="alert alert-danger">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong><?php echo $this->session->flashdata('email_check'); ?></strong>
   </div>
    <?php } elseif ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
    </div>
<?php } ?>
<form id="form" class="user" action="<?php echo base_url(); ?>admin/forgotpassword/resetPassword" method="post">
        <h2 class="text-center">Reset Password</h2>   
        <div class="form-group">
                <label for="fname">Email</label>
                <span class="text-danger"><?php echo form_error('email'); ?></span>
                <input type="text" id="email" class="form-control" name="email" placeholder="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
		     
        <div class="form-group">
            <button type="submit" class="btn btn-primary ">ResetPassword</button>
        </div>
             
        
    </form>
   
</div>
</body>
</html>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

    $('#form').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,

            }
        },
        // Specify the validation error messages
        messages: {
            district: "*Please enter login deatils",
        },
    });

});
</script>