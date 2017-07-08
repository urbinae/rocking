<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>titulo</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Timeline CSS -->
    <link href="{{ asset('/dist/css/timeline.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/sb-admin-2.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custom Fonts -->
    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        @include('layouts.includes.header')

        <div id="page-wrapper">
            <div class="container-fluid">
                    @yield('contenido')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
    <!-- Morris Charts JavaScript -->
    <script type="text/javascript" src="{{ asset('/bower_components/raphael/raphael-min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="{{ asset('/dist/js/sb-admin-2.js') }}"></script>

    <!-- custom-->
    <script type="text/javascript" src="{{ asset('/customjs/reservas.js') }}"></script>
    <!-- Validación-->
    <script type="text/javascript" src="{{ asset('/bower_components/jquery-validation/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/jquery-validation/localization/messages_es.min.js') }}"></script>

</body>

</html>
