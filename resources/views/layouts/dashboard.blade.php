<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ url ('css/w3v4.css') }}" type="text/css" >
        <link rel="stylesheet" href="{{ url ('css/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" >
        <link rel="stylesheet" href="{{ url ('css/animate.css/animate.min.css') }}" type="text/css" >
        <link rel="stylesheet" href="{{ url ('css/theme/w3-theme-light-green.css') }}" type="text/css" >
        <link rel="stylesheet" href="{{ url ('css/gfonts.css') }}" type="text/css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <script src="{{ url ('js/jquery-1.9.1.min.js') }}"></script>
        <script src="{{ url ('js/pageloader.js') }}"></script>
        <script src="{{ url ('js/totop.js') }}"></script>
    


        <style>
        	.w3-theme{
        		background-color: #23A80C !important; 
        	}
        	.w3-text-theme{
        		color: #23A80C !important; 
        	}
        	.w3-border-theme{
        		border-color: #23A80C !important; 
        	}
        	.w3-hover-theme:hover{
        		background-color: #23A80C !important; 
        	}
        	.jura{
        		font-family: Jura;
        		font-weight: bolder;
        	}
        	.gothic{
        		font-family: NanumGothic-Regular;
        	}
        	.bg{
        		background : linear-gradient(153deg, rgba(186,155,233,0.83) 0%, rgba(243,198,212,0.83) 100%) no-repeat 50% 50% / 100% 100%;
        	}
        	.bgg{
        		background : linear-gradient(146deg, #EBE4E1 0%, #f3b6c9 100%) no-repeat 50% 50% / 100% 100%;
        	}
        	.nicescroller{
        		overflow-y: hidden;
        	}
        	.nicescroller:hover,.nicescroller:focus{
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
        	  animation:fading 10s infinite;
        	}
        	.w3-dashboard{
        		background-color: #2e2e2e;
        		color: #fff;
        	}
        	.w3-dashboard .w3-bar-item{
        		background-color: #2e2e2e;
        		color: #757575;
        	}
        	.w3-dashboard .w3-dropdown-click{
        		background-color: #2e2e2e;
        		color: #757575;
        		border-bottom: 1px solid #595959;
        	}
        	.w3-dashboard .w3-bar-item:hover,.w3-dashboard .w3-dropdown-click:hover{
        		background-color: #141414;
        		color: #fff;
        		border-bottom: 1px solid #595959;
        	}
        	.w3-invalid{
        		background-color: #ffd6cc;
        	}
        	.blackdiamond{
        		font-family: 'Black Diamond';
        	}
        	.mySlides {display:none;}
        </style>
        <style type="text/css">
            .w3-sidebar {
                height: 100%;
                min-height: 100%;
                z-index: 51;
                overflow-x: hidden;
                transition: 0.5s; 
            }
            .centered{
                align-items: center;
                justify-content: center;
                display: flex;
            }
            #main {
              transition: margin-left .5s;
            }
            @media screen and (max-height: 450px) {
              /*.sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
              */
            }
        </style>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

        <title id="title">Easy Certs - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

            
    </head>
    <body style="background: linear-gradient(167deg, #95bdf1 0%, #81cfee 47%) no-repeat -100% -100% / 100% 100%">
        <div id="mySidenav" class="w3-dashboard w3-sidebar w3-collapse" style="width:250px">
            <span onclick="closeNav()" class="w3-btn w3-right  w3-hover-text-red w3-xlarge"><i class="fa fa-times"></i></span>
            <div class="w3-center">
                <img class="w3-image w3-round w3-card-4 w3-margin-left" style="height:100px;" src="{{ asset('images/logo1.jpg') }}" />
            </div>
            <hr>
            <div class="w3-bar-block">
                @include('admin.menu.menu'.session('logged_user')->usertype)
            </div>
        </div>
        <div id="main" class="w3-main" style="margin-left: 250px">
            <div class="w3-row w3-light-blue">
                <div class="w3-col l2 m3 s3" style="">
                    <button class="w3-button w3-hover-blue w3-card-4 w3-padding w3-xlarge" onclick="openNav()">☰</button>
                </div>
                <div class="w3-col l10 m9 s9" style="padding-left: 10px;">
                    <div class="w3-dropdown-hover w3-right w3-hover-blue w3-light-blue">
                        <div class="w3-btn w3-block w3-left-align w3-padding-16">
                            <b>{{session('logged_user')->fullname}}</b>
                         <i class="fa fa-angle-down"></i></div>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom" id="m_access" style="width:200px;right:0">
                            <a class="w3-bar-item w3-button w3-hover-blue" href="{{ url('admin/dashboard') }}">Dashboard<i class="w3-right fa fa-bars"></i></a>
                            <a class="w3-bar-item w3-button w3-hover-blue" href="{{ url('admin/updateprofile') }}"><i class="w3-right fa fa-user"></i> Update Profile</a>
                            <a class="w3-bar-item w3-button w3-hover-blue" href="{{ url('admin/logout') }}">Logout<i class="w3-right fa fa-sign-out-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="min-height: 37em">
                @include('incs.messages')
                @yield('content')
            </div>
            @include('incs.footer')
        </div>
    </body>
    <script>
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else { 
                x.className = x.className.replace(" w3-show", "");
            }
        }

        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</html>