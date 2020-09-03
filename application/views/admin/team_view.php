<?php include "header.php"; ?>



<div class="container-fluid">
    <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/slider/create_team">add Team</a>
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
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Designation</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($team)) {
                $no = 1;

            ?>
                <?php foreach ($team as $row) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row->id; ?></th>
                        <td><?php echo $row->fullname; ?></td>
                        <td><img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $row->image ?>" alt=""></td>
                        <td><?php echo $row->designation; ?></td>
                        <td><a class="btn btn-info btn-sm" href="<?php echo base_url('admin/slider/team_edit/' . $row->id) ?>"><i class="glyphicon glyphicon-pencil "></i>Update</a>
                            <a onclick="isconfirm();" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/slider/team_delete/' . $row->id) ?>"> <i class="glyphicon glyphicon-trash"></i>Delete</a>
                        </td>
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