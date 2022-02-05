<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>IV BUD - www.ifbudfloo.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->
    <link rel="icon" href="{{ asset('/images/logo_fa.png') }}">
    @yield('script_header')
    <link href="{{asset('Skote/dist/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('Skote/dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('Skote/dist/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>
<div style="width: 100%;">
    <img src="{{asset('images/в.png')}}" alt="" style="width: auto; height: 100%; opacity: 0.2; position: fixed; margin-top: 5%;">
    <img src="{{asset('images/u.png')}}" alt="" style="width: auto; height: 100%; opacity: 0.2; position: fixed; margin-left: 80%">
</div>
@yield('content')
<!-- JAVASCRIPT -->
<script src="{{asset('Skote/dist/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Skote/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Skote/dist/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('Skote/dist/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('Skote/dist/assets/libs/node-waves/waves.min.js')}}"></script>
@yield('script')
<script src="{{asset('Skote/dist/assets/js/app.js')}}"></script>

</body>
</html>


