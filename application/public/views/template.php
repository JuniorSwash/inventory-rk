<!DOCTYPE html>
<html lang="en">
<head>
	<script>
		var base_url = '<?= base_url()?>';
	</script>
    <!--
	Charisma v1.0.0

	Copyright 2012 Muhammad Usman
	Licensed under the Apache License v2.0
	http://www.apache.org/licenses/LICENSE-2.0

	http://usman.it
	http://twitter.com/halalit_usman
-->
    <meta charset="utf-8">
    <title>Inventory 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?=_ADMIN_CSS_PATH?>bootstrap-spacelab.css" rel="stylesheet">
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
    <link href='<?=_ADMIN_CSS_PATH?>validationEngine.jquery.css' rel='stylesheet'>
    <link href='<?=_ADMIN_CSS_PATH?>style.css' rel='stylesheet'>
    <link href='<?=_ADMIN_FANCYBOX_PATH?>source/jquery.fancybox.css' rel='stylesheet'>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="<?=_ADMIN_JS_PATH?>jquery-1.7.2.min.js"></script>
    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<!-- topbar starts -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html">
	            <span>Inventory 2.0</span></a>


            <div class="btn-group pull-right" >
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user"></i><span class="hidden-phone"> <?=$this->session->userdata('fname');?></span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('login/logout')?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <div class="top-nav nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" class="left"><i class="icon-home"></i> Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> Item <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-align-justify"></i> Item List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Add Item</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> Inventory <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-align-justify"></i> Add Store In</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Store In List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Add Store Out</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Store Out List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> Settings <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-align-justify"></i> User List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Change Password</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Add User</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> Article <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-align-justify"></i> Article List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Add Article</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> Order <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-align-justify"></i> Create Order</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Order List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Add Order Requirement</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Add Template</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Template List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Add Consumption</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Consumption List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> Other <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-align-justify"></i> Inventory List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Supplier List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Out Type List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Department List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Item Group List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Size List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Size Group</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Color List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Buyer List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Instruction List</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Bank List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> Report <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-align-justify"></i> Inventory</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Order Varience</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Purchase Order</a></li>
                            <li><a href="#"><i class="icon-edit"></i> Performa Invoice</a></li>
                            <li><a href="#"><i class="icon-edit"></i> StoreIn Challan</a></li>
                            <li><a href="#"><i class="icon-edit"></i> StoreOut Challan</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- topbar ends -->
<div class="container-fluid">
<div class="row-fluid">

<!-- left menu starts -->
<?//= $this->load->view('common/left_menu_view');?>
<!-- left menu ends -->

<noscript>
    <div class="alert alert-block span10">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
</noscript>

<div id="content" class="span10">
<!-- content starts -->
<?php
	$controller = $this->uri->segment(1,false);
	$router     = $this->uri->segment(2,false);
	//echo $controller.'/'.$router;

	if(!$controller){
		$url = 'dashboard/dashboard_view';
	}else if($router){
		$url = $controller.'/'.$router.'_view';
	}else{
		$url = $controller.'/'.$controller.'_view';
	}

	$this->load->view($url);
?>
<!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<hr>

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<footer>
</footer>

</div><!--/.fluid-container-->

<!-- external javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


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

<!-- application script for formvalidation -->
<script src="<?=_ADMIN_JS_PATH?>jquery.validationEngine.js"></script>
<script src="<?=_ADMIN_JS_PATH?>languages/jquery.validationEngine-en.js"></script>

<!-- application script for Charisma demo -->
<script src="<?=_ADMIN_JS_PATH?>charisma.js"></script>

<!-- common script -->
<script src="<?=_ADMIN_JS_PATH?>common.js?v=2"></script>

<script src="<?=_ADMIN_FANCYBOX_PATH?>source/jquery.fancybox.pack.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
</body>
</html>
