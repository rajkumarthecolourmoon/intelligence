<?php include "header.php"; ?>



<div class="container-fluid">
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
    <!-- <a class="btn btn-success float-right" href="<?php echo base_url(); ?>admin/slider/create">add Image</a> -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Slider Images</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Technology</th>
                <th scope="col">Caption</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($slider)) {
                $no = 1;

            ?>
                <?php foreach ($slider as $row) { ?>
                    <tr>
                        <th scope="row"><?php echo $row->id; ?></th>
                        <td><img class="thumbnail" style="height: 50px; width: 50px;" src="<?php echo base_url(); ?>uploads/<?php echo $row->slider_image ?>" alt=""></td>
                        <td><?php echo $row->technology; ?></td>
                        <td><?php echo $row->caption; ?></td>
                        <td><a class="btn btn-info btn-sm" href="<?php echo base_url('admin/slider/edit/' . $row->id) ?>"><i class="glyphicon glyphicon-pencil "></i>Update</a><br><br/>
                            <a onclick="isconfirm();" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/slider/delete/' . $row->id) ?>"> <i class="glyphicon glyphicon-trash"></i>Delete</a>
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