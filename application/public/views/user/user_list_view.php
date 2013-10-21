<a class="btn btn-large right" href="<?= site_url('user/user_list_csv')?>"><i class="icon-download-alt"></i>Download User List</a>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> User List</h2>
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
                    <th>Profile Picture</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>FBID</th>
	                <th>Registration Date</th>
                    <th>#of upload</th>
	                <th>Logo Upload Date</th>
                </tr>
                </thead>
                <tbody>
				<?
				if($users){
					foreach($users as $user):
						?>
                    <tr>
                        <td><img src="http://graph.facebook.com/<?=$user['user_fb_id']?>/picture" width="60px" /></td>
                        <td>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=<?=$user['user_fb_id']?>">
	                            <?= $user['user_name']?>
	                         </a>
                        </td>
                        <td><a target="_blank" href="mailto:<?= $user['user_email']?>"><?= $user['user_email']?></a></td>
                        <td><?= $user['user_fb_id']?></td>
                        <td><?= date('dS M, Y',($user['user_insert_date']))?></td>
	                    <td><?= $user['num_of_post']?></td>
	                    <td><?= ($user['logo_upload_date']!='0')?date('dS M, Y',($user['logo_upload_date'])):'Not Uploaded Yet';?></td>
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