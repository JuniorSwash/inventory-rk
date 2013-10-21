
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
            <form id="offer_form" class="form-inline" action="<?= site_url('user/user_stat')?>" method="post">
                <div class="box-content">
                    <fieldset>
                        <div class="control-group" style="float: left">
                            <label class="control-label" for="dateFrom">Date From</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="dateTo" name="dateFrom" value="<?=$dateFrom?>">
                            </div>
                        </div>
                        <div class="control-group" style="float: left; margin-left: 10px">
                            <label class="control-label" for="dateTo">Date To</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="dateFrom" name="dateTo" value="<?=$dateTo?>">
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
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> User Stat List</h2>
            <div class="box-icon">
                <a class="btn btn-setting btn-round" href="#"><i class="icon-cog"></i></a>
                <a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
                <a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table id="user-stat-table" class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Total Users</th>
                    <th>Total Logo</th>
                </tr>
                </thead>
                <tbody>
                <?
                if($user_stat){
                    foreach($user_stat as $user):
                        ?>
                    <tr>
                        <td><?= date('d-m-Y', strtotime($user['date']))?></td>
                        <td><?= $user['total_user']?></td>
                        <td><?= $user['total_logo']?></td>
                    </tr>
                        <?
                    endforeach;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->

<script type="text/javascript">
</script>