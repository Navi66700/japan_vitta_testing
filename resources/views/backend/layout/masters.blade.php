<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('homepage/assets/images/jp-logo.png')}}" rel="icon">
    <link href="{{asset('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{asset('homepage/assets/images/jp-logo.png')}}" alt="">
            <span class="d-none d-lg-block">Japan Vitta</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->


            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
{{--                    <img src="{{asset('backend/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">--}}
                    <span class="d-none d-md-block dropdown-toggle ps-2">Hi {{session()->get('name')}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ 'admin-dashboard' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('admin-dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Lessons/Past Papers</li>

        <li class="nav-item">
            <a class="nav-link {{ 'lesson' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('lesson')}}">
                <i class="bi bi-book"></i>
                <span>Lessons</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'past-papers' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('past-papers')}}">
                <i class="bi bi-card-checklist"></i>
                <span>Past Papers</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-heading">SSW</li>


        <li class="nav-item">
            <a class="nav-link {{ 'jft' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('jft')}}">
                <i class="bi bi-card-checklist"></i>
                <span>JFT</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'foods' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('foods')}}">
                <i class="bi bi-card-checklist"></i>
                <span>Food</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'agri' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('agri')}}">
                <i class="bi bi-card-checklist"></i>
                <span>Agriculture</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'caregiver' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('caregiver')}}">
                <i class="bi bi-card-checklist"></i>
                <span>Caregiver</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-heading">Contacts</li>

        <li class="nav-item">
            <a class="nav-link {{ 'view-contact' == request()->path() ? 'active' : 'collapsed'}}" href="{{route('view-contact')}}">
                <i class="bi bi-envelope"></i>
                <span>Contacts</span>
            </a>
        </li><!-- End Contact Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
    @if(session()->has("user_type") == "admin")
        @yield('content')
    @endif
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="footer">
    <div class=" container-fluid ">
        <div class="copyright" id="copyright">
            &copy; <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> &nbsp<a href="https://www.storehub.lk" target="_blank">Japan Vitta</a> | Powered by <a href="https://www.cervustechnologies.com" target="_blank">Cervus Technologies</a>.
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('backend/assets/js/main.js')}}"></script>

</body>

</html>
