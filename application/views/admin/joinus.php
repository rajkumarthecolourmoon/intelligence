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
    <h1 class="h3 mb-4 text-gray-800"> Message </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php if (!empty($joinus)) { ?>
                <?php if (is_array($joinus)) { ?>
                    <?php foreach ($joinus as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $row->id; ?></th>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->mobile_number; ?></td>
                            <td><?php echo $row->message; ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/joinus/delete/' . $row->id) ?>" onclick="isconfirm();"> <i class="glyphicon glyphicon-trash"></i>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>

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