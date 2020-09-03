<?php include "header.php"; ?>



        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->       
          <h1 class="h3 mb-4 text-gray-800">Contacts</h1>
          
         <div class="row">
            <div class="col-lg-12">
            <table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>


    </tr>
  </thead>
  <tbody>
      <?php foreach ($contact as $contacts){?>
        <?php //echo "<pre/>";print_r($contact);die();?>
    <tr>
      <th scope="row"><?php echo $contacts->id?></th>
      <td><?php echo $contacts->name ?></td>
      <td><?php echo $contacts->email ?></td>
      <td><?php echo $contacts->subject ?></td>
      <td><?php echo $contacts->message ?></td>
    </tr>
      <?php }?>
  </tbody>
</table>
              
          </div>
       </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php include "footer.php"; ?>

  