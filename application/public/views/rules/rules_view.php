<?
_flashMsg();
?>
<script type="text/javascript" src="<?= _ADMIN_JS_PATH?>tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#rule_id",
        height : 300,
        plugins: "textcolor",
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]

    });
</script>
<form action="<?= site_url('rules')?>" method="post">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Rules</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
			<textarea name="rule_id" id="rule_id"><?= $rules['system_text']?></textarea>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </div>
</div>
</form>