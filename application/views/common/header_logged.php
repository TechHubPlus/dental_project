<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/style-default.css" rel="stylesheet" id="style_color"/>
    <link href="<?php echo base_url(); ?>assets/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/assets/uniform/css/uniform.default.css"/>
    <link href="<?php echo base_url(); ?>assets/assets/chosen-bootstrap/chosen/chosen.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/assets/jquery-tags-input/jquery.tagsinput.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/assets/clockface/css/clockface.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap-datepicker/css/datepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap-timepicker/compiled/timepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet"
          type="text/css"/>
    <link
        href="<?php echo base_url(); ?>assets/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css"
        rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/ assets/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!--BEGIN SIDEBAR TOGGLE-->
            <div class="sidebar-toggle-box hidden-phone">
                <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Menu"></div>
            </div>
            <!--END SIDEBAR TOGGLE-->
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo base_url(); ?>index.php">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="DentAssist"/>
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse"
               data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="arrow"></span>
            </a>
            <div class="top-nav ">
                <ul class="nav pull-right top-menu" >
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>assets/img/avatar1_small.jpg" alt="">
                            <span class="username"><?php echo $doc_name; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/home/logout"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">