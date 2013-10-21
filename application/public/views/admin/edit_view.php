<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?= site_url('admin/user_list')?>">Admin User</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit Admin User</a>
        </li>
    </ul>
</div>
<?
if(isset($error_msg)){
	_error_msg($error_msg);
}
if(isset($success_msg)){
	_success_msg($success_msg);
}
?>
<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div data-original-title="" class="box-header well">
            <h2><i class="icon-edit"></i> Edit Admin User </h2>
            <div class="box-icon">
                <a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form method="post" action="<?= site_url('admin/edit/'.$user_info['_id'])?>" id="form_validation"
                  class="form-horizontal">
                <fieldset>
                    <div class="control-group">
                        <label for="name" class="control-label">User Name</label>
                        <div class="controls">
                            <input type="text" value="<?= $user_info['admin_user_name']?>" id="name" name="name"
                                   class="input-xlarge
                            focused validate[required]">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="email" class="control-label">Email</label>
                        <div class="controls">
                            <input type="text" readonly="readonly" value="<?= $user_info['admin_user_email']?>" id="email"
                                   name="email" class="input-xlarge focused" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="status">Status</label>
                        <div class="controls">
                            <select id="status" name="status">
                                <option value="1">Active</option>
                                <option <?= ($user_info['status']==0) ? "selected='selected'" : "";?>
		                                value="0">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div>

<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div data-original-title="" class="box-header well">
            <h2><i class="icon-edit"></i> Change Password </h2>
            <div class="box-icon">
                <a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form method="post" action="<?= site_url('admin/edit/'.$user_info['_id'])?>"
                  id="form_validation_alt"
                  class="form-horizontal">
                <fieldset>
                    <div class="control-group">
                        <label for="password" class="control-label">Password</label>
                        <div class="controls">
                            <input type="password" value="" id="password" name="password" class="input-xlarge focused
                            validate[required]">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="repassword" class="control-label">Retype Password</label>
                        <div class="controls">
                            <input type="password" value="" id="repassword" name="repassword" class="input-xlarge focused
                             validate[required,equals[password]]">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div>