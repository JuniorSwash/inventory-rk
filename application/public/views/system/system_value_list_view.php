<div class="box span12">
    <div class="box-header well" data-original-title>
        <h2><i class="icon-user"></i> System Value</h2>
        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
            <tr>
                <th>Name</th>
	            <th>Value</th>
                <th>Description</th>
<!--                <th style="width: 170px">Actions</th>-->
            </tr>
            </thead>
            <tbody>
			<?
			if($systems){
				foreach($systems as $item):
					?>
                <tr>
                    <td><?= $item['id_system_value']?></td>
                    <td><?= $item['value']?></td>
                    <td><?= $item['description']?></td>
<!--                    <td class="center">-->
<!--                        <a class="btn btn-info" href="#">-->
<!--                            <i class="icon-edit icon-white"></i>-->
<!--                            Edit-->
<!--                        </a>-->
<!--                        <a class="btn btn-danger" href="#">-->
<!--                            <i class="icon-trash icon-white"></i>-->
<!--                            Delete-->
<!--                        </a>-->
<!--                    </td>-->
                </tr>
					<?
				endforeach;
			}
			?>
            </tbody>
        </table>
    </div>
</div>