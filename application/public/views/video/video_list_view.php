<div class="row-fluid ui-sortable">
    <a class="well span3 top-block" href="<?= site_url('video/create_link')?>">
        <span title=".icon32  .icon-color  .icon-add " class="icon32 icon-color icon-add"></span>
        <div>Create Video Link</div>
    </a>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Video</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Video Url</th>
                    <th>Description</th>
                    <th>Rank</th>
                    <th>Status</th>
                    <th style="width: 150px">Actions</th>
                </tr>
                </thead>
                <tbody>
				<?
				if($videos){
					foreach ($videos as $video)
					{
						?>
                    <tr>
                        <td>
							<?=$video['title']?>
                        </td>
                        <td class="center">
                            <a href="<?=$video['url']?>" target="_blank"><?= $video['url']?></a>
                        </td>
                        <td class="center">
							<?= $video['description'];?>
                        </td>
                        <td class="center">
							<?=$video['rank']?>
                        </td>
                        <td class="center">
		                    <?= $video['status']?'active':'Inactive';?>
                        </td>

                        <td class="center">
                            <a class="btn btn-info" href="<?=site_url('video/edit_video')?>/<?=$video['video_id']?>">
                                <i class="icon-edit icon-white"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" onclick="video_delete(this, <?=$video['video_id']?>)">
                                <i class="icon-trash icon-white"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
						<?
					}
				}
				?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->

<script type="text/javascript">
    function video_delete(item, video_id){
        $.ajax({
            type: "POST",
            url: "<?=site_url('video/delete')?>",
            data: { video_id: video_id }
        }).done(function( msg ) {
                    var result = $.parseJSON(msg);
                    alert(result.msg);
                    $(item).parents('tr').hide();
                });
        return false;
    }
</script>