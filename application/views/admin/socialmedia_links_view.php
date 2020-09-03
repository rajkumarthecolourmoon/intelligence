<?php include "header.php"; ?>



<div class="container-fluid">
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/dashboard/add_links">add links</a>
    <div class="">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php } elseif ($this->session->flashdata('delete')) { ?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('delete'); ?></strong>
            </div>
        <?php } ?>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Team</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Linkden</th>
                <th scope="col">Facebook</th>
                <th scope="col">Twitter</th>

            </tr>
        </thead>
        <tbody>
        <?php if (!empty($socialmedia_links)) {
                        $no = 1;   

                ?>
            <?php foreach ($socialmedia_links as $row) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->linkden_links; ?></td>
                    <td><?php echo $row->facebook_links; ?></td>
                    <td><?php echo $row->twitter_links; ?></td>

                </tr>
                <?php  
                     $no++;  
                    }  
                   } else { ?>  
                                <tr id="row">  
                                <td colspan="6" align="center">NO Records</td>  
                            
                            <?php  
                   }  ?>

            </tbody>
        </table>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "footer.php"; ?>