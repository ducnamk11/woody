<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Wooody')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>{{--    bs 3--}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="admin/css/style.css" type="text/css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('layouts.header')
    @include('layouts.sidebar')
    @include('layouts.content-header')

    <section class="content">
        @yield('content')
    </section>
    @include('layouts.footer')
</div>
<script src="admin/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin/dist/js/app.min.js" type="text/javascript"></script>

</body>
</html>
