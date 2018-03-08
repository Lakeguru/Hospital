<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: Oreo Bootstrap4 Admin ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="assetss/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetss/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
    <link rel="stylesheet" href="assetss/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="assetss/plugins/bootstrap-select/css/bootstrap-select.css"/>
    <link rel="stylesheet" href="assetss/plugins/dropzone/dropzone.css">

    <link rel="stylesheet" href="assetss/css/main.css">
    <link rel="stylesheet" href="assetss/css/color_skins.css">
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assetss/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
@include('Dashboards.navbar')
<!-- Left Sidebar -->
@include('Dashboards.sidebar')
<!-- Right Sidebar -->

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">

        </div>
        <div class="body">

            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->

@yield('content')

<!-- Jquery Core Js -->
<script src="assetss/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="assetss/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assetss/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assetss/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assetss/bundles/knob.bundle.js"></script> <!-- Jquery Knob, Count To, Sparkline Js -->

<script src="assetss/bundles/mainscripts.bundle.js"></script>
<script src="assetss/js/pages/index.js"></script>



<script src="assetss/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->

</body>

<!-- Mirrored from thememakker.com/templates/oreo/hospital/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Mar 2018 14:37:08 GMT -->
</html>