
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('titulo','tienda') | Tienda</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{asset("plantilla/$tema/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset("plantilla/$tema/bower_components/font-awesome/css/font-awesome.min.css")}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset("plantilla/$tema/bower_components/Ionicons/css/ionicons.min.css")}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset("plantilla/$tema/dist/css/AdminLTE.min.css")}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset("plantilla/$tema/dist/css/skins/_all-skins.min.css")}}">
<link rel="stylesheet" href="{{asset("plantilla/css/custom.css")}}">

@yield("styles")

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
        <!-- Site wrapper -->
    <div class="wrapper">
        <!--- Inicio Header-->
        @include("tema/$tema/header")
        <!-- Fin Header --->
        <!--- Inicio Aside-->
        @include("tema/$tema/menu")
        <!-- Fin Aside --->
        <div class="content-wrapper">
                <!-- Content Header (Page header) -->
            <section class="content">                       
                @yield("contenido") 
            </section>
        </div>
       <!-- /.Inicio Footer -->
        @include("tema/$tema/footer")
        <!-- / Fin footer-->
    </div> 
    <script src="{{asset("plantilla/$tema/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset("plantilla/$tema/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset("plantilla/$tema/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("plantilla/$tema/bower_components/fastclick/lib/fastclick.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("plantilla/$tema/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("plantilla/$tema/dist/js/demo.js")}}"></script> 

    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script> 
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    
    @yield("scripts")

</body>
</html>