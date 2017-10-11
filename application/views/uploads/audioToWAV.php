<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Group2 Converter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css');?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css');?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css');?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/AdminLTE/dist/css/AdminLTE.min.css');?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/AdminLTE/dist/css/skins/_all-skins.min.css');?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?> ">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow-light sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo site_url('/welcome');?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>G</b>2</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>GROUP</b>2</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Image Convertion</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('/imageconverter/upload_image_to_png');?>"><i class="fa fa-circle-o"></i> Convert to PNG</a></li>
                        <li><a href="<?php echo site_url('/imageconverter/upload_image_to_jpg');?>"><i class="fa fa-circle-o"></i> Convert to JPG</a></li>
                        <li><a href="<?php echo site_url('/imageconverter/upload_image_to_gif');?>"><i class="fa fa-circle-o"></i> Convert to GIF</a></li>
                    </ul>
                </li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-file-audio-o"></i> <span>Audio Converter</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('/audioconverter/upload_audio_to_mp3');?>"><i class="fa fa-circle-o"></i> Convert to MP3</a></li>
                        <li class="active"><a href="<?php echo site_url('/audioconverter/upload_audio_to_wav');?>"><i class="fa fa-circle-o"></i> Convert to WAV</a></li>
                        <li><a href="<?php echo site_url('/audioconverter/upload_audio_to_aac');?>"><i class="fa fa-circle-o"></i> Convert to FLAC</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-video-o"></i> <span>Video Converter</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('/videoconverter/upload_video_to_WMV');?>"><i class="fa fa-circle-o"></i> Convert to WMV</a></li>
                        <li><a href="<?php echo site_url('/videoconverter/upload_video_to_MP4');?>"><i class="fa fa-circle-o"></i> Convert to MP4</a></li>
                        <li><a href="<?php echo site_url('/videoconverter/upload_video_to_MPEG');?>"><i class="fa fa-circle-o"></i> Convert to MPEG</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 align="center" style="padding: 10px">
                Audio Converter
                <small>convert to WAV</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form enctype="multipart/form-data" method="post" action="<?php echo site_url('/audioconverter/export_wav');?>" class="row-form">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Options</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Change Audio Bitrate</label>
                                    <select class="form-control select2" name="bitrate" id="bitrate" style="width: 100%;">
                                        <option value="24">24 kbps</option>
                                        <option value="128">128 kbps</option>
                                        <option value="320">320 kbps</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Change Sampling Rate</label>
                                    <select class="form-control select2" name="sampling" id="sampling" style="width: 100%;">
                                        <option value="8000">8000 Hz</option>
                                        <option value="24000">24000 Hz</option>
                                        <option value="48000">48000 Hz</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Change Audio Channels</label>
                                    <select class="form-control select2" name="channel" id="channel" style="width: 100%;">
                                        <option value="1">Mono</option>
                                        <option value="2">Stereo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-1">File</label>
                                    <div class="row col-md-1">
                                        <input type="file" id="file" name="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <div class="col-md-12" align="right">
                            <button type="submit" class="btn btn-warning" id="compress" > Compress </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('/assets/AdminLTE/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('/assets/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
    $(document).ready(function () {
        $('#bitrate').select2();
        $('#sampling').select2();
        $('#channel').select2();
    })
</script>
<script src="<?php echo base_url('/assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/AdminLTE/dist/js/adminlte.min.js');?>"></script>
</body>
</html>
