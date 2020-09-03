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
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/profile/create">add </a>

    <h1 class="h3 mb-4 text-gray-800">Profile </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Meta Keywords</th>
                <th scope="col">Meta Description</th>
                <th scope="col">Meta Title</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($logo)) {
                $no = 1;

            ?>
                <?php if (is_array($logo)) { ?>
                    <?php foreach ($logo as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $row->id; ?></th>
                            <td><img class="thumbnail" style="height: 50px; width: 100px;" src="<?php echo base_url(); ?>uploads/<?php echo $row->image ?>" alt=""></td>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->description; ?></td>
                            <td><?php echo $row->meta_keywords; ?></td>
                            <td><?php echo $row->meta_description; ?></td>
                            <td><?php echo $row->meta_title; ?></td>
                            <td><?php echo $row->forgot_pass_email; ?></td>
                            <td><a class="btn btn-info btn-sm" href="<?php echo base_url('admin/profile/edit/' . $row->id) ?>"></i>Update</a><br><br/>
                                <a onclick="isconfirm();" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/profile/delete/' . $row->id) ?>"> </i>Delete</a>
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

        </tbody>
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