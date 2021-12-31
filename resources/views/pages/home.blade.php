<!DOCTYPE html>
<html>
<head>
<title>magExpress</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/animate.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/slick.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/theme.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
    @include('home._header')
    <section id="mainContent">
        <div class="content_top">
            <div class="row">
               @yield('body')
               
            </div>
        </div>
    </section>
    @include('home._footer')
</body>
</html>