
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> Sys Contable </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!-- Basic Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/smartadmin-production-plugins.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/smartadmin-production.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/smartadmin-skins.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css">
    <!-- SmartAdmin RTL Support  -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/smartadmin-rtl.min.css')}}">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/demo.min.css')}}">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{asset('img/favicon/favicon.ico" type="image/x-icon')}}">
    <link rel="icon" href="{{asset('img/favicon/favicon.ico" type="image/x-icon')}}">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{asset('img/splash/sptouch-icon-iphone.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/splash/touch-icon-ipad.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/splash/touch-icon-iphone-retina.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/splash/touch-icon-ipad-retina.png')}}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{asset('img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)')}}">
    <link rel="apple-touch-startup-image" href="{{asset('img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)')}}">
    <link rel="apple-touch-startup-image" href="{{asset('img/splash/iphone.png" media="screen and (max-device-width: 320px)')}}">


</head>

<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  01. #CSS Links                |  all CSS links and file paths  |
|  02. #FAVICONS                 |  Favicon links and file paths  |
|  03. #GOOGLE FONT              |  Google font link              |
|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
|  05. #BODY                     |  body tag                      |
|  06. #HEADER                   |  header tag                    |
|  07. #PROJECTS                 |  project lists                 |
|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
|  09. #MOBILE                   |  mobile view dropdown          |
|  10. #SEARCH                   |  search field                  |
|  11. #NAVIGATION               |  left panel & navigation       |
|  12. #RIGHT PANEL              |  right panel userlist          |
|  13. #MAIN PANEL               |  main panel                    |
|  14. #MAIN CONTENT             |  content holder                |
|  15. #PAGE FOOTER              |  page footer                   |
|  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
|  17. #PLUGINS                  |  all scripts and plugins       |

===================================================================

-->

<!-- #BODY -->
<!-- Possible Classes

    * 'smart-style-{SKIN#}'
    * 'smart-rtl'         - Switch theme mode to RTL
    * 'menu-on-top'       - Switch to top navigation (no DOM change required)
    * 'no-menu'			  - Hides the menu completely
    * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
    * 'fixed-header'      - Fixes the header
    * 'fixed-navigation'  - Fixes the main menu
    * 'fixed-ribbon'      - Fixes breadcrumb
    * 'fixed-page-footer' - Fixes footer
    * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
-->
<body class="">

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- end notification content -->

            <!-- footer: refresh area -->
            <span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button>
					</span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->

    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="img/avatars/sunny.png" alt="John Doe" class="online" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a  title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i></a> </span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->

        <!-- end input: search field -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

        <!-- #Voice Command: Start Speech -->
        <div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
            <div>
                <a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a>
                <div class="popover bottom"><div class="arrow"></div>
                    <div class="popover-content">
                        <h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
                        <h4 class="vc-title-error text-center">
                            <i class="fa fa-microphone-slash"></i> Voice command failed
                            <br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
                            <br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
                        </h4>
                        <a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a>
                        <a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end voice command -->

        <!-- multiple lang dropdown : find all flags in the flags page -->

        <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/avatars/sunny.png" alt="me" class="online" />
						<span>
                            {{Auth::user()->usuario}}<br>

						</span>
                        <span>
                        </span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="active">
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>

            </li>

            @if(Auth::user()->Rol_idRol==1)
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">ADMINISTRACION</span></a>
                <ul>

                    <li>
                        <a href="{{url('Trabajador')}}">TRABAJADOR</a>
                    </li>

                    <li>
                        <a href="{{url('Empresa')}}">EMPRESA</a>
                    </li>
                    <li>
                        <a href="{{url('Usuarios')}}">USUARIO</a>
                    </li>
                </ul>
            </li>

            @endif
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Planilla</span></a>
                <ul>
                    <li>
                        <a href="{{url('Planilla')}}">Listar Planilla</a>
                    </li>
                    <li>
                        <a href="{{url('PlanillaRegistro')}}">RegistrarPlanilla</a>
                    </li>
                    <li>
                        <a href="{{url('Seguros')}}">Seguros</a>
                    </li>

                    <li>
                        <a href="{{url('Asiento')}}">Asientos Contables</a>
                    </li>
                </ul>
            </li>





        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Dashboard</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        @yield('content')

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">SYS CONTA <span class="hidden-xs"> - Desarrollado Por Deyvis Garcia Cercado</span> © 2019</span>
        </div>
    </div>
</div>
<!-- END PAGE FOOTER -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="https://www.youtube.com/channel/UCcZAL5gjsh4dSS_xXa92xvQ" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fas fa-chart-line fa-4x"></i> <span>Guia Contable</span> </span> </a>
        </li>
        <li>
            <a href="https://docs.google.com/document/d/1RAas6wm8yv8zT0TDbPCDxH2sKJjzMKbbBB1rWabZ-iM/edit" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fas fa-chart-line fa-4x"></i> <span>Calculos Contables</span> </span> </a>
        </li>
        <li>
            <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
            <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
            <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script src="{{asset('js/libs/jquery-2.1.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/app.config.js')}}"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->


<!-- BOOTSTRAP JS -->


<!-- CUSTOM NOTIFICATION -->
<script src="{{asset('js/notification/SmartNotification.min.js')}}"></script>

<!-- JARVIS WIDGETS -->


<!-- EASY PIE CHARTS -->
<script src="{{asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

<!-- SPARKLINES -->
<script src="{{asset('js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- JQUERY VALIDATE -->
<script src="{{asset('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{asset('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="{{asset('js/plugin/select2/select2.min.js')}}"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="{{asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

<!-- browser msie issue fix -->
<script src="{{asset('js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>

<!-- FastClick: For mobile devices -->
<script src="{{asset('js/plugin/fastclick/fastclick.min.js')}}"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->


<!-- MAIN APP JS FILE -->
<script src="{{asset('js/app.min.js')}}"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="{{asset('js/speech/voicecommand.min.js')}}"></script>

<!-- SmartChat UI : plugin -->

<script src="{{asset('js/smart-chat-ui/smart.chat.manager.min.js')}}"></script>

<!-- PAGE RELATED PLUGIN(S) -->

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->



<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="{{asset('js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('js/plugin/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<!-- Full Calendar -->
<script src="{{asset('js/plugin/moment/moment.min.js')}}"></script>

<script src="{{asset('js/plugin/fullcalendar/jquery.fullcalendar.min.js')}}"></script>

<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->



@yield('scripts')


<script>
    function get_fhoy() {
        // FORMATO DE HTML5 input[date] >> 'aaaa-mm-dd'
        var texto = '';
        var fecha = new Date();
        var anho = fecha.getFullYear().toString();
        var mes = ("0" + (fecha.getMonth() + 1)).slice(-2);
        var dia = ("0" + fecha.getDate()).slice(-2);
        texto = anho+'-'+mes+'-'+dia;
        return texto;
    }

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->


</body>

</html>
