<div class="row-fluid sortable">
        <div class="box span12">
        <div class="box-header well" data-original-title>
        <h2><i class="icon-user"></i> Filter</h2>
<div class="box-icon">
        <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
        </div>
        </div>
<div class="box-content">
        <form id="offer_form" class="form-inline" action="<?= site_url('logo/logo_list')?>" method="post">
        <div class="box-content">
        <fieldset>
        <div class="control-group" style="float: left">
        <label class="control-label" for="user_id">User</label>
        <div class="controls">
        <select id="user_id" name="user_id" data-rel="chosen">
        <option value="-1">All User</option>
<?
if($users){
    foreach($users as $row=>$user){
        $selected = "";
        if(isset($config['user_id'])){
            if($config['user_id'] == $user['user_id']){
                $selected = 'selected="selected"';
            }
        }
        ?>
    <option <?= $selected;?> value="<?=$user['user_id']?>"><?= $user['user_name']?></option>
        <?
    }
}
?>
        </select>
        </div>
        </div>
        <div class="control-group" style="float: left; margin-left: 10px">
        <label class="control-label" for="logo_status">Status</label>
        <div class="controls">
        <select name="logo_status" id="logo_status" data-rel="chosen">
        <option value="-1">All</option>
        <option <? if(isset($config['logo_status']) && ($config['logo_status']==1)){echo 'selected="selected"';}?> value="1">Approved</option>
        <option <? if(isset($config['logo_status']) && ($config['logo_status']==2)){echo 'selected="selected"';}?> value="2">Approved Pending</option>
        </select>
        </div>
        </div>
<div class="control-group" style="float: left; margin-left: 10px">
        <label class="control-label" for="submit">&nbsp;</label>
<div class="controls">
        <button class="btn btn-primary" type="submit">Filter</button>
        </div>
        </div>
        <div  style="float: left; margin-left: 20px">

        </div>
        </fieldset>
        </div>
        </form>
        </div>
        </div><!--/span-->

</div><!--/row-->
<div class="row-fluid sortable">
        <div class="box span12">
        <div class="box-header well" data-original-title>
        <h2><i class="icon-user"></i> Logo</h2>
<div class="box-icon">
        <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
        </div>
        </div>
<div class="box-content">
        <table id="logo-list" class="table table-striped table-bordered bootstrap-datatable" style="width: 100%;">
        <thead>
        <tr>
        <th>Logo</th>
        <th style="width: 20px">Caption</th>
        <th>User FB id</th>
        <th>User Name</th>
        <th>Profile Picture</th>
        <th>User Email</th>
        <th>#of Vote</th>
        <th>Upload Date</th>
        <th>Approved Date</th>
        <th>Status</th>
        <th style="width: 150px">Actions</th>
        </tr>
        </thead>
        <tbody>
<?
if($logos){
    $i = 0;
    foreach ($logos as $logo)
    {
        ?>
            <tr>
            <td>
            <a href="<?= base_url()?>/resources/images/<?=$logo['logo_url']?>" class="fancybox"  >
                <img src="<?= base_url()?>/resources/images/thumb/<?=$logo['logo_url']?>" style="width: 80px" />
            </a>
            </td>
            <td class="center">
        <?= $logo['logo_caption']==""?"N/A":$logo['logo_caption'];?>
            </td>
            <td class="center">
            <a href="https://www.facebook.com/profile.php?id=<?=$logo['user_fb_id']?>">
        <?= $logo['user_fb_id'];?>
            </a>
            </td>
            <td class="center">
            <a target="_blank" href="https://www.facebook.com/profile.php?id=<?=$logo['user_fb_id']?>"><?=$logo['user_name']?></a>
            </td>
            <td>
            <img src="http://graph.facebook.com/<?=$logo['user_fb_id']?>/picture" width="60px" />
            </td>
            <td class="center">
            <a href="mailto:<?=$logo['user_email']?>" target="_blank">
        <?=$logo['user_email']?>
            </a>
            </td>
            <td class="center">
        <?= $logo['logo_like']?>
            </td>
            <td><?= date('dS M, Y',($logo['logo_upload_date']))?></td>
            <td><?= $logo['logo_approved_date']?(date('dS M,Y',$logo['logo_approved_date'])):"Not Approved yet";?></td>
            <td class="center">
        <?= ($logo['logo_status']==1)?'<span class="label label-success">Active</span>':'<span class="label label-important">Pending</span>';?>
            </td>
            <td class="center">
	                        <? if($logo['logo_status']==1){?>
            <a class="btn btn-danger" onclick="logo_update_status(this, <?=$logo['logo_id']?>, 0 );">
            <i class="icon-ok icon-white"></i>
                                Delete
                                        </a>
							<?
                            }elseif($logo['logo_status']==2){
        ?>
            <a class="btn  btn-info" onclick="logo_update_status(this, <?=$logo['logo_id']?>, 1 );" style="margin-bottom: 8px;">
                <i class="icon-refresh icon-white"></i>
                    Make Public
            </a>
            <a class="btn btn-danger" onclick="logo_update_status(this, <?=$logo['logo_id']?>, 0 );">
                <i class="icon-ok icon-white"></i>
                    Delete
            </a>
	                        <?}?>
                        </td>
                    </tr>
						<?
                        $i++;
					}
}
?>
        </tbody>
        </table>
        </div>
</div><!--/span-->

</div><!--/row-->

<script type="text/javascript">
    function logo_update_status(item, logo_id, logo_status){
        $.ajax({
            type: "POST",
            url: "<?=site_url('logo/logo_update_status')?>",
            data: { logo_id: logo_id, logo_status: logo_status}
        }).done(function( msg ) {
                var result = $.parseJSON(msg);
                alert(result.msg);
                if(logo_status == 0) {
                    $(item).parents('tr').hide();
                }
                else if(logo_status == 1){
                    $(item).hide();
                    $(item).closest('td').prev('td').html('<span class="label label-success">Active</span>');
                }
           });

        return false;
    }

    $(document).ready(function() {
        $('#logo-list').dataTable({
            "aoColumns": [
                { "sWidth": "2%" },
                { "sWidth": "2%" },
                { "sWidth": "5%" },
                { "sWidth": "5%" },
                { "sWidth": "5%" },
                { "sWidth": "5%" },
                { "sWidth": "5%" },
                { "sWidth": "5%" },
                { "sWidth": "5%" },
                { "sWidth": "5%" },
                { "sWidth": "15%" }
            ],
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            }
        });
    });

</script>