<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.extension.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/sumoselect.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="img/favicon.ico" />
  	<title>Home</title>
</head>
<body class="fonts-1">

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">
        <!-- HEADER -->
        @include('web::layouts.header')

        <div class="header-empty-space"></div>

        @yield('content')


        <div class="empty-space col-xs-b15 col-sm-b45"></div>
        <div class="empty-space col-md-b70"></div>

        <!-- FOOTER -->
        @include('web::layouts.footer')

    </div>

    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/swiper.jquery.min.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>

    <!-- styled select -->
    <script src="{{ asset('js/jquery.sumoselect.min.js') }}"></script>

    <!-- counter -->
    <script src="{{ asset('js/jquery.classycountdown.js') }}"></script>
    <script src="{{ asset('js/jquery.knob.js') }}"></script>
    <script src="{{ asset('js/jquery.throttle.js') }}"></script>

    <!-- range slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            var minVal = parseInt($('.min-price').text());
            var maxVal = parseInt($('.max-price').text());
            $( "#prices-range" ).slider({
                range: true,
                min: minVal,
                max: maxVal,
                step: 100000,
                values: [ minVal, maxVal ],
                slide: function( event, ui ) {
                    $('.min-price').text(ui.values[ 0 ]);
                    $('.max-price').text(ui.values[ 1 ]);
                }
            });
        });
    </script>


</body>
</html>

