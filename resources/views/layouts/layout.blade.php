<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clothing Line</title>

    <link rel="stylesheet" href="{{ url ('css/w3v4.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/fontawesome/css/fontawesome-all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/animate.css/animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/gfonts.css') }}" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="{{ url ('js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ url ('js/pageloader.js') }}"></script>
    <script src="{{ url ('js/totop.js') }}"></script>


    <style>
        .jura {
            font-family: Jura;
            font-weight: bolder;
        }

        .gothic {
            font-family: NanumGothic-Regular;
        }

        .bg {
            background: linear-gradient(153deg, rgba(186, 155, 233, 0.83) 0%, rgba(243, 198, 212, 0.83) 100%) no-repeat 50% 50% / 100% 100%;
        }

        .bgg {
            background: linear-gradient(146deg, #EBE4E1 0%, #f3b6c9 100%) no-repeat 50% 50% / 100% 100%;
        }

        .nicescroller {
            overflow-y: hidden;
        }

        .nicescroller:hover, .nicescroller:focus {
            overflow-y: visible;
        }

        /* width */
        .nicescroller::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        .nicescroller::-webkit-scrollbar-track {
            /*background: #f1f1f1;*/
        }

        /* Handle */
        .nicescroller::-webkit-scrollbar-thumb {
            background: #888;
            border: 0px;
            background-clip: padding-box;
            border-radius: 8px;
            width: 10px;
        }

        /* Handle on hover */
        .nicescroller::-webkit-scrollbar-thumb:hover {
            background: #555;
            animation: fading 10s infinite;
        }

        .w3-dashboard {
            background-color: #2e2e2e;
            color: #fff;
        }

        .w3-dashboard .w3-bar-item {
            background-color: #2e2e2e;
            color: #757575;
        }

        .w3-dashboard .w3-dropdown-click {
            background-color: #2e2e2e;
            color: #757575;
            border-bottom: 1px solid #595959;
        }

        .w3-dashboard .w3-bar-item:hover, .w3-dashboard .w3-dropdown-click:hover {
            background-color: #141414;
            color: #fff;
            border-bottom: 1px solid #595959;
        }

        .w3-invalid {
            background-color: #ffd6cc;
        }

        .blackdiamond {
            font-family: 'Black Diamond';
        }

        .mySlides {
            display: none;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<div class="w3-row w3-light-blue">
    <div class="w3-col l3">
        <a href="{{ url('/')}}" class="w3-btn w3-xxlarge"><i class="fa fa-home"></i> </a>
    </div>
    <div class="w3-col l6 w3-center"><h1 class="text-center text-white">Clothing Line</h1></div>
    <div class="w3-col l3">&nbsp;</div>
</div>
<div style="min-height: 34em">
    @include('incs.messages')
    @yield('content')
</div>
@include('incs.footer')
</body>
</html>
