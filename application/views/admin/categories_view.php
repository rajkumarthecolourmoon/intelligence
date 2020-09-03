<?php include "header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
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
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/services/categories_add">add category</a>

    <h1 class="h3 mb-4 text-gray-800">Categories </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categories</th>
                <th scope="col">Image</th>
                <th scope="col">Meta Keywords</th>
                <th scope="col">Meta Description</th>
                <th scope="col">Meta Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php //echo "<pre>" ;print_r( $this->data['categories']);die; 
            ?>
            <?php if (!empty($categories)) {
                $no = 1;

            ?>
                <?php if (is_array($categories)) { ?>
                    <?php foreach ($categories as $categ) { ?>
                        <tr>
                            <th scope="row"><?php echo $categ->id; ?></th>
                            <td><?php echo $categ->service_category; ?></td>
                            <td><img class="thumbnail" style="height: 50px; width: 100px;" src="<?php echo base_url(); ?>uploads/<?php echo $categ->image ?>" alt=""></td>
                            <td><?php echo $categ->meta_keywords; ?></td>
                            <td><?php echo $categ->meta_description; ?></td>
                            <td><?php echo $categ->meta_title; ?></td>
                            <td><a class="btn btn-info btn-sm" href="<?php echo base_url('admin/services/categories_edit/' . $categ->id) ?>"><i class="glyphicon glyphicon-pencil "></i>Update</a><br><br/> 
                                <a onclick="isconfirm();" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/services/categories_delete/' . $categ->id) ?>"> <i class="glyphicon glyphicon-trash"></i>Delete</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                } else { ?>
                    <tr id="row">
                        <td colspan="6" align="center">NO Records</td>

                <?php
                }
            }
                ?>

    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "footer.php"; ?>
<script>
    function isconfirm() {

        if (!confirm('Are you sure ?')) {
            event.preventDefault();
            return;
        }
        return true;
    }
</script>