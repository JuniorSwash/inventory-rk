<div class="row-fluid ui-sortable">
    <a href="<?= site_url('admin/create_admin');?>" class="well span3 top-block">
        <span class="icon32 icon-color icon-add" title=".icon32  .icon-color  .icon-add "></span>
	    <div>Add Admin User</div>
    </a>
</div>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> Introduction</h2>
            <div class="box-icon">
                <a class="btn btn-setting btn-round" href="#"><i class="icon-cog"></i></a>
                <a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
                <a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th style="width: 70px">Actions</th>
                </tr>
                </thead>
                <tbody>
		        <?
		        if($admin_users){
			        foreach($admin_users as $item):
				        ?>
                    <tr>
                        <td><?= $item['admin_user_name']?></td>
                        <td><?= $item['admin_user_email']?></td>
                        <td><?= $item['status']?></td>
                        <td class="center">
                            <a class="btn btn-info" href="<?= site_url('admin/edit/'.$item['_id'])?>">
                                <i class="icon-edit icon-white"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
				        <?
			        endforeach;
		        }
		        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>