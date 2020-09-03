<?php include "header.php"; ?>

<?php //print_r($images->image);die(); ?> 
    

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>adminassests/css/sb-admin-2.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">

            
  <table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
      <?php foreach ($user_view as $user){?>
    <tr>
      <th scope="row"><?php echo $user->id?></th>
      <td><?php echo $user->firstname ?></td>
      <td><?php echo $user->lastname ?></td>
      <td><?php echo $user->email ?></td>
      <td>
   <?php    if ($user->status == 1) { ?>
    <button type="button" class="btn btn-success btn-sm"><span class="cil-contrast btn-icon mr-2"></span> Active</button>
   <?php  } elseif ($user->status == 0) { ?>
    <button type="button" class="btn btn-danger btn-sm"><span class="cil-contrast btn-icon mr-2"></span> Inactive</button>
  <?php  }  ?>
  
        </td>
        <td>
            <a href="<?php echo base_url('admin/register/edit/'.$user->id)?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

            <a href="<?php echo base_url('admin/register/delete/'.$user->id)?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
    </tr>
      <?php }?>
  </tbody>
</table>
            </form>           
        </div>

      <?php include "footer.php"; ?>    
