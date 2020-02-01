

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{--        new link for template--}}
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="theme-switch" href="css/style.css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'b yekan','Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <style>
        /* For demo purpose only */

        /* For Demo Purposes Only ( You can delete this anytime :-) */
        #colour-variations {
            padding: 10px;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            width: 140px;
            position: fixed;
            left: 0;
            top: 100px;
            z-index: 999999;
            background: #fff;
            /*border-radius: 4px;*/
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        }
        #colour-variations.sleep {
            margin-left: -140px;
        }
        #colour-variations h3 {
            text-align: center;;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #777;
            margin: 0 0 10px 0;
            padding: 0;;
        }
        #colour-variations ul,
        #colour-variations ul li {
            padding: 0;
            margin: 0;
        }
        #colour-variations li {
            list-style: none;
            display: block;
            margin-bottom: 5px!important;
            float: left;
            width: 100%;
        }
        #colour-variations li a {
            width: 100%;
            position: relative;
            display: block;
            overflow: hidden;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            border-radius: 4px;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }
        #colour-variations li a:hover {
            opacity: .9;
        }
        #colour-variations li a > span {
            width: 33.33%;
            height: 20px;
            float: left;
            display: -moz-inline-stack;
            display: inline-block;
            zoom: 1;
            *display: inline;
        }


        .option-toggle {
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 5px;
            margin-right: -30px;
            width: 30px;
            height: 30px;
            background: #f64662;
            text-align: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            color: #fff;
            cursor: pointer;
            -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        }
        .option-toggle i {
            top: 2px;
            position: relative;
        }
        .option-toggle:hover, .option-toggle:focus, .option-toggle:active {
            color:  #fff;
            text-decoration: none;
            outline: none;
        }
    </style>




</head>
<body style="direction: rtl; font-family: 'B Yekan' ">


    @yield('mainContent')




<!-- For demo purposes Only ( You may delete this anytime :-) -->
<div id="colour-variations">
    <a class="option-toggle"><i class="icon-gear"></i></a>
    <h3>Preset Colors</h3>
    <ul>
        <li>
            <a href="javascript: void(0);" data-theme="style">
                <span style="background: #3f95ea;"></span>
                <span style="background: #52d3aa;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style2">
                <span style="background: #329998;"></span>
                <span style="background: #6cc99c;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style3">
                <span style="background: #9f466e;"></span>
                <span style="background: #c24d67;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" data-theme="style4">
                <span style="background: #21825C;"></span>
                <span style="background: #A4D792;"></span>
                <span style="background: #f2f2f2;"></span>
            </a>
        </li>

    </ul>
</div>
<!-- End demo purposes only -->


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Counter -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
<script src="js/jquery.style.switcher.js"></script>
<script>
    $(function(){
        $('#colour-variations ul').styleSwitcher({
            defaultThemeId: 'theme-switch',
            hasPreview: false,
            cookie: {
                expires: 30,
                isManagingLoad: true
            }
        });
        $('.option-toggle').click(function() {
            $('#colour-variations').toggleClass('sleep');
        });
    });
</script>
<!-- End demo purposes only -->

<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>

</body>
</html>
