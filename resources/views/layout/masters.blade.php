<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" href="{{asset('homepage/assets/images/jp-logo.png')}}" type="image/icon type">
    <title>Japan Vitta | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('homepage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('homepage/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/assets/css/lightbox.css')}}">

    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        a:hover{
            color: #f5a425;
        }



    </style>

</head>

<body>
<!--header-->
<header class="main-header clearfix" role="header">
    <div class="logo">
        <img src="{{asset('homepage/assets/images/jp-logo.png')}}" style="width: 80px; height: 70px;" alt="japan vitta">
        <a href="{{url('/')}}"><em>JAPAN</em> VITTA</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="has-submenu"><a href="#">Lessons</a>
                <ul class="sub-menu">
                    <li><a href="{{route('view-level-5')}}">N5</a></li>
                    <li><a href="{{route('view-level-4')}}">N4</a></li>
                    <li><a href="{{route('view-level-3')}}">N3</a></li>
                    <li><a href="{{route('view-level-2')}}">N2</a></li>
                    <li><a href="{{route('view-level-1')}}">N1</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#">Past Papers</a>
                <ul class="sub-menu">
                    <li><a href="{{route('view-paper-5')}}">N5</a></li>
                    <li><a href="{{route('view-paper-4')}}">N4</a></li>
                    <li><a href="{{route('view-paper-3')}}">N3</a></li>
                    <li><a href="{{route('view-paper-2')}}">N2</a></li>
                    <li><a href="{{route('view-paper-1')}}">N1</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#">SSW</a>
                <ul class="sub-menu">
                    <li><a href="{{route('view-jft')}}">JFT</a></li>
                    <li><a href="{{url('ssw-jobs')}}">SSW JOBS</a></li>
                </ul>
            </li>
{{--            <li><a href="#">News</a></li>--}}
            <li><a href="{{url('contact-us')}}">Contact Us</a></li>
            <li><a href="{{url('about-us')}}">About Us</a></li>

        </ul>
    </nav>
</header>

        @yield('content')

<footer>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="first-item">

                    <ul>
                        <div class="logo">
                            <img src="{{asset('homepage/assets/images/jp-logo.png')}}" style="width: 80px; height: 70px;" alt="japan vitta">
                            <h4 style="color: white;">Japan Vitta</h4>
                        </div>
                        <li><a style="color: lightgray;" href="#">Colombo, Western Province, Sri Lanka</a></li>
                        <li><a style="color: lightgray;" href="#">info@japanvitta.com</a></li>
                        <li><a style="color: lightgray;" href="#">+94 70 308 73 13</a></li>
{{--                        <li><a style="color: lightgray;" href="#">+94 76 414 96 30</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">

                <ul>
                    <h4 style="color: white;">Useful Links</h4>
                    <li><a style="color: lightgray;" href="{{url('/')}}">Home</a></li>
                    <li><a style="color: lightgray;" href="#levels">Levels</a></li>
                    <li><a style="color: lightgray;" href="{{url('contact-us')}}">Contact Us</a></li>
                    <li><a style="color: lightgray;" href="{{url('about-us')}}">About Us</a></li>
                </ul>
            </div>
            <div class="col-lg-4">

                <ul>
                        <h4 style="color: white;">Useful Links</h4>
                    <li><a style="color: lightgray;" href="{{url('/')}}">Terms & Condition</a></li>
                    <li><a style="color: lightgray;" href="{{url('/')}}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <div id="google_translate_element"></div>
                    <p>Copyright © 2023 Japan Vitta All Rights Reserved.
                        <br>Powered By: <a href="#" target="_blank" title="Cervus Technologies">Cervus Technologies</a></p>
                </div>
            </div>
        </div>

    </div>

</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('homepage/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('homepage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('homepage/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('homepage/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('homepage/assets/js/lightbox.js')}}"></script>
<script src="{{asset('homepage/assets/js/tabs.js')}}"></script>
<script src="{{asset('homepage/assets/js/video.js')}}"></script>
<script src="{{asset('homepage/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('homepage/assets/js/custom.js')}}"></script>

<!-- This social media links -->
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>

