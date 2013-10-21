<script>
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#offer_form").validationEngine();
    });
</script>
<?if(isset($success_msg)){ ?>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
	<?=$success_msg?>
</div>
<?}else if(isset($error_msg)){?>
<div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">×</button>
	<?=$error_msg?>
</div>
<?}?>
<form id="offer_form" class="form-horizontal" action="<?= site_url('video/create_link')?>" method="post">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Create Video</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="title">Title</label>
                            <div class="controls">
                                <input class="validate[required]" type="text" name="title" id="title" class="input-xlarge focused"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="url">Youtube Url</label>
                            <div class="controls">

                                <input class="validate[required,custom[url]]" type="text" name="url" id="url" />
                            </div>
                        </div>
                        <div id="sub_cat_td" class="control-group">
                            <label class="control-label" for="description">Description</label>
                            <div class="controls">
								<textarea name="description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="rank">Rank</label>
                            <div class="controls">
                                <select id="rank" name="rank" data-rel="chosen">
	                                <?
	                                    for($i=1;$i<=10;$i++){
		                                    ?>
		                                    <option value="<?=$i?>"><?=$i;?></option>
		                                    <?
	                                    }
	                                ?>
	                            </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="status">Status</label>
                            <div class="controls">
                                <select id="status" name="status" data-rel="chosen">
	                                <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>


            </div>
        </div><!--/span-->

    </div><!--/row-->
    <div class="form-actions">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>