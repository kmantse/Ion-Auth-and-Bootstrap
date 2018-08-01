<!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">User Group Table</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">

            <div class="btn-group">
                <a href="<?=site_url('auth/create_group')?>" id="editable_table_new" class="btn btn-info pull-right">
                    Add Group <i class="fa fa-plus"></i>
                </a>
            </div>

            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                    <th>Group Name</th>
                    <th>Description</th>
                    <th style="width: 150px;" class="text-right"><?php echo lang('index_action_th');?></th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($user_groups as $group):?>
                    <tr>
                        <td><?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?></td>
                        <td><?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?></td>
                        <td><?php echo anchor("auth/edit_group/".$group->id, 'Edit',['class'=>"btn btn-success btn-sm"]) ;?> <?php echo anchor("auth/delete_group/".$group->id, 'delete', ['class'=>"btn btn-danger btn-sm"]) ;?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>
<script>
    $("#view_users").addClass('active');
</script>
