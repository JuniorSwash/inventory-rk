<?
_flashMsg();
?>
<script type="text/javascript" src="<?= _ADMIN_JS_PATH?>tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#home",
        height : 300
    });
</script>
<form action="<?= site_url('home')?>" method="post">
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-user"></i> Home</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <textarea name="home" id="home"><?= $home['system_text']?></textarea>
            </div>
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>