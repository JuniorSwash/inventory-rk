<script type="text/javascript" src="<?= _ADMIN_JS_PATH?>tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#about",
        height : 300,
        plugins: "textcolor",
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });
</script>
<form action="<?= site_url('about')?>" method="post">
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-user"></i> About</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <textarea name="about" id="about"><?= $about['system_text']?></textarea>
            </div>
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>