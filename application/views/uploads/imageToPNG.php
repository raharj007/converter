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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/compressor/main.css');?> ">

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
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Image Convertion</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="<?php echo site_url('/imageconverter/upload_image_to_png');?>"><i class="fa fa-circle-o"></i> Convert to PNG</a></li>
                        <li><a href="<?php echo site_url('/imageconverter/upload_image_to_jpg');?>"><i class="fa fa-circle-o"></i> Convert to JPG</a></li>
                        <li><a href="<?php echo site_url('/imageconverter/upload_image_to_gif');?>"><i class="fa fa-circle-o"></i> Convert to GIF</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-audio-o"></i> <span>Audio Converter</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('/audioconverter/upload_audio_to_mp3');?>"><i class="fa fa-circle-o"></i> Convert to MP3</a></li>
                        <li><a href="<?php echo site_url('/audioconverter/upload_audio_to_wav');?>"><i class="fa fa-circle-o"></i> Convert to WAV</a></li>
                        <li><a href="<?php echo site_url('/audioconverter/upload_audio_to_aac');?>"><i class="fa fa-circle-o"></i> Convert to AAC</a></li>
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
            <h1>
                Image Converter
                <small>convert to PNG</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Options</h3>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Image Quality</label>
                                <select class="form-control select2" name="speed" id="speed" style="width: 100%;">
                                    <option value="low">Low</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Color Depth</label>
                                <div class="form-control">
                                    <input type="radio" name="filter" id="none" value="none" checked><label for="none">None</label>
                                    <input type="radio" name="filter" id="grayscale" value="grayscale"><label for="grayscale">Grayscale</label>
                                    <input type="radio" name="filter" id="sepia" value="sepia"><label for="sepia">Sepia</label>
                                    <input type="radio" name="filter" id="threshold" value="sepia"><label for="threshold">Threshold</label>
                                    <input type="number" id="threshold-val" value="127" data-threshold maxlength="3" min="0" max="255" style="display: none">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image Resolution Width</label>
                                <input class="form-control" type="text" name="width" id="width"/>
                            </div>
                            <div class="form-group">
                                <label>Image Resolution Height</label>
                                <input class="form-control" type="text" name="height" id="height"/>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1">File</label>
                                <div class="row col-md-1">
                                    <button type="button" class="btn image-selector">Select Image</button>
                                    <input type="file" id="image" class="image-selector">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <div class="col-md-12" align="right">
                        <button type="button" class="btn" id="compress" onclick="myFunction()"> Compress </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Original Image</h3>
                        </div>
                        <div class="box-body" align="middle">
                            <img id="original" src="<?php echo base_url('/assets/img/placeholder.png');?>" alt="Original image to compress" title="Original image to compress" height="225px">
                        </div>
                        <div class="box-footer original-size" align="middle">
                            <span id="origin-width"></span>
                            <span id="origin-height"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Compressed Image</h3>
                        </div>
                        <div class="box-body" align="middle">
                            <img src="<?php echo base_url('/assets/img/placeholder.png');?>" alt="Compressed image" title="Compressed image" id="result" height="225px">
                        </div>
                        <div class="box-footer" align="middle" id="download">

                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    var divimg = document.getElementById("result"),
                        prevSrc;
                    setInterval(function() {
                        if (divimg.src != prevSrc) {
                            prevSrc = divimg.src;
                            onSrcChange();
                        }
                    }, 1000); // 1000ms = 1s

                    function onSrcChange() {
                        //alert(divimg.src);
                        if (divimg.src!="<?php echo base_url('/assets/img/placeholder.png');?>") {
                            var newresult = divimg.src;
                            var url = divimg.src.replace(/^data:image\/[^;]/, 'data:application/octet-stream');
                            //window.open(url);
                            $.ajax({
                                type : "POST",
                                url  : "<?php echo site_url('/imageconverter/save_temp_file_png'); ?>",
                                data : ({url : url}),
                                success : function(data) {
                                    var element = document.createElement("a");
                                    element.href = "<?php echo site_url('/imageconverter/download_png'); ?>";
                                    element.classList = "btn btn-sm";
                                    element.text = "Download Image";

                                    var foo = document.getElementById("download");
                                    foo.appendChild(element);
                                }
                            })
                        }
                    }

                </script>
            </div>
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
<script src="<?php echo base_url('/assets/compressor/image-compressor.js');?>"></script>
<script src="<?php echo base_url('/assets/compressor/index.js');?>"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-103168679-1', 'auto');
    ga('send', 'pageview');

</script>
<script src="<?php echo base_url('/assets/AdminLTE/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('/assets/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
    $(document).ready(function () {
        $('#speed').select2();
    })
</script>
<script src="<?php echo base_url('/assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/AdminLTE/dist/js/adminlte.min.js');?>"></script>
</body>
</html>
