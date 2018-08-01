<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Profile of <?php echo $admin->first_name; ?></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua-active">
                        <h3 class="widget-user-username"><?php echo $admin->first_name.' '.$admin->last_name; ?></h3>
                        <h5 class="widget-user-desc">Branch: <?php echo $admin->company;?></h5>
                    </div>
                    <div class="widget-user-image">
                        <img src="<?php echo $admin->profile_pic ? base_url('admin/uploads/images/'.$admin->profile_pic): base_url('assets/images/avatar.png'); ?>" alt="<?php echo $admin->first_name; ?>" class="img-circle" width='128' height='128' />
                    </div>
                    <div class="box-footer">
                        <ul class="nav nav-stacked">
                            <li><i class="fa fa-envelope"></i> <?php echo $admin->email; ?></li>
                            <li><i class="fa fa-phone"></i>  <?php echo $admin->phone; ?></li>
                            <li><strong>Joined: </strong><span class="text-green"><?php echo unix_to_human($admin->created_on); ?></span></li>
                            <li><strong>Last Login: </strong><span class="text-aqua"><?php echo unix_to_human($admin->last_login); ?></span></li>
                        </ul>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <?php
                if(isset($error)){
                    foreach ($error as $key => $value) {
                        echo $value;
                    }
                }
                ?>
                <!-- upload profile pix -->
                <?php echo form_open_multipart("dashboard/profile_pic");?>
                <div class="form-group">
                    <label>Select Image</label>
                    <input type="file" name="profile_pic" class="form-control">

                    <p class="help-block text-red">*Profile Picture Max size: 500kb. 200px by 200px*</p>
                    <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                </div>
                <?php echo form_close(); ?>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end box -->