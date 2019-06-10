
<!DOCTYPE html>
<html lang="en-us" id="extr-page">
<head>
    <meta charset="utf-8">
    <title> SmartAdmin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- #CSS Links -->
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- #APP SCREEN / ICONS -->
    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

</head>
<style>

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;


    }
    *:focus {
        outline: 0;
    }

    html {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);

    }
    .fondo{
        background-color: red;
    }

    .form {
        background: url('https://i0.imgpile.com/2016/09/14/7861aab59aa07c9499278339f41522c3.jpg') rgba(15, 15, 15, 0.9) left top / cover no-repeat scroll;
        border-radius: 5px;
        box-shadow: 0 0 15px #1c1c1c;
        margin: 1.5em auto 0 auto;
        max-width: 400px;
        padding: 2em;
        width: 90%;
    }

    .ctn-img-title-login {
        text-align: center;
    }

    .img-login {
        max-width: 7em;
        pointer-events: none;
        width: 90%;
    }

    .title-form-login {
        color: #cdcdcd;
        font: bold 2em 'Dancing Script', sans-serif;
        margin-top: 25px;
    }

    .ctn-input {
        margin-top: 50px;
        position: relative;
    }

    .support-text {
        color: #cdcdcd;
        font: normal 15px 'Quicksand', sans-serif;
        left: 2px;
        pointer-events: none;
        position: absolute;
        top: 2px;
        transition: 0.3s ease all;
    }

    .support-text.active-input {
        color: #ffffff;
        font-size: 13px;
        transform: translateY(-125%);
    }

    .effect-input {
        background-color: rgba(0, 0, 0, 0);
        border-style: none;
        border-bottom: 1px solid #cdcdcd;
        color: #ffffff;
        display: block;
        font: normal 15px 'Quicksand', sans-serif;
        height: 30px;
        letter-spacing: 1px;
        max-width: 400px;
        padding: 1em 1.5em 1em 2px;
        width: 100%;
    }

    .validate-input:invalid {
        border-bottom-color: #ff807c;
    }

    .bar:before,
    .bar:after {
        background-color: #ffffff;
        border-radius: 50%;
        bottom: 0;
        content: '';
        height: 2px;
        position: absolute;
        transition: 0.5s ease all;
        width: 0;
    }

    .bar {
        display: block;
        position: relative;
    }

    .bar:before {
        left: auto;
        right: 0;
    }

    .bar.active-input:before,
    .bar.active-input:after {
        width: 75%;
    }

    .validate-input:invalid + .bar:before,
    .validate-input:invalid + .bar:after {
        background-color: #ff807c;
    }

    .clear-input,
    .eye {
        bottom: 10px;
        color: #ffffff;
        cursor: pointer;
        display: none;
        font-size: 12px;
        position: absolute;
    }

    .clear-input {
        right: 5px;
    }

    .eye {
        right: 20px;
    }

    .validate-input:invalid + .bar .clear-input,
    .validate-input:invalid + .bar .eye {
        color: #ff807c;
    }

    .ctn-btns {
        display: flex;
        justify-content: space-around;
        margin-top: 50px;
    }

    .btns {
        background-color: #1d7566;
        border-radius: 2px;
        border-style: none;
        box-shadow: 1px 0px #202020,
        0px 1px #202020,
        2px 1px #202020,
        1px 2px #202020,
        3px 2px #202020,
        2px 3px #202020,
        4px 3px #202020,
        3px 4px #202020,
        5px 4px #202020,
        4px 5px #202020,
        6px 5px #202020,
        5px 6px #202020;
        color: #ffffff;
        cursor: pointer;
        font: normal 13px 'Quicksand', sans-serif;
        letter-spacing: 1px;
        margin: 0 5px;
        padding: 10px 20px;
        transition: 0.3s ease all;
    }

    .btns:hover,
    .btns:focus {
        background-color: #20806f;
    }

    .btns:active {
        box-shadow: 1px 0px #202020,
        0px 1px #202020,
        2px 1px #202020,
        3px 2px #202020,
        2px 3px #202020,
        4px 3px #202020,
        3px 4px #202020;
        transform: translate(2px);
    }
</style>
<body class="fondo">

<header id="header">

    <div id="logo-group">
        <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
    </div>

</header>

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <form  method="POST" action="{{ route('login') }}" class="form">
        @csrf
        <div class="ctn-img-title-login">
            <img src="https://cdn4.iconfinder.com/data/icons/ios-web-user-interface-multi-circle-flat-vol-7/512/Lock_protected_safe_privacy_password_security-512.png" alt="Login" title="Login" class="img-login">
            <h1 class="title-form-login">
              SYSCONTA
            </h1>
        </div>

        <div class="ctn-input">
            <label for="user" class="support-text">
                Usuario
            </label>
            <input type="text" id="user" class="effect-input @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" >
            @error('usuario')
            <span class="invalid-feedback" role="alert">
                <strong style="color: red" >{{ $message }}</strong></span>
            @enderror
            <span class="bar">
      <i class="fa fa-times clear-input" aria-hidden="true"></i>
    </span>
        </div>

        <div class="ctn-input">
            <label for="pass" class="support-text">
                Contraseña
            </label>
            <input type="password" name="password" class="effect-input password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
            @enderror
            <span class="bar">
      <i class="fa fa-times clear-input" aria-hidden="true"></i>
      <i class="fa fa-eye-slash eye" aria-hidden="true"></i>
    </span>
        </div>

        <div class="ctn-btns">
            <input type="submit" id="reset-inputs" class="btns"   {{ __('Ingresar') }}>
        </div>

    </form>
</div>

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script src="js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');} </script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

<!-- IMPORTANT: APP CONFIG -->
<script src="js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!--[if IE 8]>


<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="js/app.min.js"></script>

<script type="text/javascript">
    runAllForms();

    $(function() {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

    });
    $(document).ready(function() {

        $('.effect-input').on('focus', function() {
            $(this).siblings('.support-text, .bar').addClass('active-input');
        });

        $('.effect-input').on('keydown keyup', function() {
            $(this).addClass('validate-input');
            if ( $(this).val().length >= 1 ) {
                $(this).siblings('.bar').children('.clear-input').fadeIn();
            } else {
                $(this).siblings('.bar').children('.clear-input').fadeOut();
            }
        });

        $('.password').on('keydown keyup', function() {
            if ( $(this).val().length >= 1 ) {
                $(this).siblings('.bar').children('.eye').fadeIn();
            } else {
                $(this).siblings('.bar').children('.eye').fadeOut();
            }
        });

        $('.effect-input').on('focusout', function() {
            $(this).addClass('validate-input');
            if ( $(this).val() == '' ) {
                $(this).siblings('.support-text, .bar').removeClass('active-input');
            }
        });

        $('.clear-input').on('click', function() {
            $(this).fadeOut();
            $(this).siblings('.eye').fadeOut();
            $(this).parent('.bar').siblings('.effect-input').val('');
            $(this).siblings('.eye').addClass('fa-eye-slash').removeClass('fa-eye view-pass');
            $(this).parent('.bar').siblings('.password').attr('type', 'password');
            $(this).parent('.bar').siblings('.effect-input').focusout();
            $(this).parent('.bar').siblings('.effect-input').removeClass('validate-input');
        });

        $('.eye').on('click', function() {
            $(this).toggleClass('fa-eye-slash fa-eye view-pass');
            if ( $(this).hasClass('view-pass') ) {
                $(this).parent('.bar').siblings('.password').attr('type', 'text');
            } else {
                $(this).parent('.bar').siblings('.password').attr('type', 'password');
            }
        });



    });
</script>

</body>
</html>
