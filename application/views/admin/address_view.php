<?php include "header.php"; ?>



<!-- Begin Page Content -->
<div class="container-fluid">
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/contacts/address_add">add address</a>

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
    <h1 class="h3 mb-4 text-gray-800"> Address </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>State</th>
                <th>Pincode</th>
                <th>Country</th>
                <th>Company Image</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($address)) {
                $no = 1;
            ?>
                <?php if (is_array($address)) { ?>
                    <?php foreach ($address as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $row->id; ?></th>
                            <td><?php echo $row->company; ?></td>
                            <td><?php echo $row->mobile_number; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td><?php echo $row->state; ?></td>
                            <td><?php echo $row->pin_code; ?></td>
                            <td><?php echo $row->country; ?></td>
                            <td><img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $row->image ?>" alt=""></td>

                            <td><a class="btn btn-info btn-sm" href="<?php echo base_url('admin/contacts/edit/' . $row->id) ?>">Update</i><br>
                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/contacts/delete/' . $row->id) ?>" onclick="isconfirm();">Delete</i>
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
            }  ?>

</div>

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