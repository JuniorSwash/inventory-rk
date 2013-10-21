<!DOCTYPE html>
<html lang="en">
<head>
    <!--
	Charisma v1.0.0

	Copyright 2012 Muhammad Usman
	Licensed under the Apache License v2.0
	http://www.apache.org/licenses/LICENSE-2.0

	http://usman.it
	http://twitter.com/halalit_usman
-->
    <meta charset="utf-8">
    <title>Inventory Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?=_ADMIN_CSS_PATH?>bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href="<?=_ADMIN_CSS_PATH?>bootstrap-responsive.css" rel="stylesheet">
    <link href="<?=_ADMIN_CSS_PATH?>charisma-app.css" rel="stylesheet">
    <link href="<?=_ADMIN_CSS_PATH?>jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href='<?=_ADMIN_CSS_PATH?>fullcalendar.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>fullcalendar.print.css' rel='stylesheet'  media='print'>
    <link href='<?=_ADMIN_CSS_PATH?>chosen.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>uniform.default.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>colorbox.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>jquery.cleditor.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>jquery.noty.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>noty_theme_default.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>elfinder.min.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>elfinder.theme.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>opa-icons.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>uploadify.css' rel='stylesheet'>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<div class="container-fluid">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="span12 center login-header">
                <h2>Welcome to Inventory Management System</h2>
            </div><!--/span-->
        </div><!--/row-->

        <div class="row-fluid">
            <div class="well span5 center login-box">
                <div class="alert alert-info">
                    <?= isset($error) ? $error : "Please login with your Email and Password.";?>
                </div>
                <form class="form-horizontal" action="<?= site_url('login');?>" method="post">
                    <fieldset>
                        <div class="input-prepend" title="Username" data-rel="tooltip">
                            <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="" />
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password" data-rel="tooltip">
                            <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
                        </div>
                        <div class="clearfix"></div>


                        <div class="clearfix"></div>

                        <p class="center span5">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </p>
                    </fieldset>
                </form>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery -->
<script src="<?=_ADMIN_JS_PATH?>jquery-1.7.2.min.js"></script>
<!-- jQuery UI -->
<script src="<?=_ADMIN_JS_PATH?>jquery-ui-1.8.21.custom.min.js"></script>
<!-- transition / effect library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-transition.js"></script>
<!-- alert enhancer library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-alert.js"></script>
<!-- modal / dialog library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-modal.js"></script>
<!-- custom dropdown library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-dropdown.js"></script>
<!-- scrolspy library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-scrollspy.js"></script>
<!-- library for creating tabs -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-tab.js"></script>
<!-- library for advanced tooltip -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-tooltip.js"></script>
<!-- popover effect library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-popover.js"></script>
<!-- button enhancer library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-button.js"></script>
<!-- accordion library (optional, not used in demo) -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-collapse.js"></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-carousel.js"></script>
<!-- autocomplete library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-typeahead.js"></script>
<!-- tour library -->
<script src="<?=_ADMIN_JS_PATH?>bootstrap-tour.js"></script>
<!-- library for cookie management -->
<script src="<?=_ADMIN_JS_PATH?>jquery.cookie.js"></script>
<!-- calander plugin -->
<script src='<?=_ADMIN_JS_PATH?>fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?=_ADMIN_JS_PATH?>jquery.dataTables.min.js'></script>

<!-- chart libraries start -->
<script src="<?=_ADMIN_JS_PATH?>excanvas.js"></script>
<script src="<?=_ADMIN_JS_PATH?>jquery.flot.min.js"></script>
<script src="<?=_ADMIN_JS_PATH?>jquery.flot.pie.min.js"></script>
<script src="<?=_ADMIN_JS_PATH?>jquery.flot.stack.js"></script>
<script src="<?=_ADMIN_JS_PATH?>jquery.flot.resize.min.js"></script>
<!-- chart libraries end -->

<!-- select or dropdown enhancer -->
<script src="<?=_ADMIN_JS_PATH?>jquery.chosen.min.js"></script>
<!-- checkbox, radio, and file input styler -->
<script src="<?=_ADMIN_JS_PATH?>jquery.uniform.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?=_ADMIN_JS_PATH?>jquery.colorbox.min.js"></script>
<!-- rich text editor library -->
<script src="<?=_ADMIN_JS_PATH?>jquery.cleditor.min.js"></script>
<!-- notification plugin -->
<script src="<?=_ADMIN_JS_PATH?>jquery.noty.js"></script>
<!-- file manager library -->
<script src="<?=_ADMIN_JS_PATH?>jquery.elfinder.min.js"></script>
<!-- star rating plugin -->
<script src="<?=_ADMIN_JS_PATH?>jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?=_ADMIN_JS_PATH?>jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?=_ADMIN_JS_PATH?>jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?=_ADMIN_JS_PATH?>jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?=_ADMIN_JS_PATH?>jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?=_ADMIN_JS_PATH?>charisma.js"></script>


</body>
</html>
