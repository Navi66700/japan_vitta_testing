<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Japan Vitta | Login</title>
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

<body style="background-image: url('{{asset('backend/assets/img/japan-b-i.jpeg')}}'); background-size: cover;">
<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            {{-- <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{asset('homepage/assets/images/jp-logo.png')}}" alt="">
                                <span >Japan Vitta</span>
                            </a> --}}
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">
                                <br>
                                @if(session()->get('msg'))
                                    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                                        <span><b> Invalid - </b> {{session()->get('msg')}}</span>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="pt-4 pb-2">
                                    <center>
                                    <img src="{{asset('homepage/assets/images/jp-logo.png')}}" alt="" style="height:100px; width:100px;"><br>
                                    <h3>Japan Vitta</h3>
                                </center>
                                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                </div>

                                <form class="row g-3 needs-validation" novalidate method="post" action="{{route('login')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="email" class="form-control" id="yourUsername" placeholder="Email" required>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                </form>
                                <div class="credits">
                                    <br>
                                    <center>
                                    Powered by <a href="https://bootstrapmade.com/">Cervus Technologies</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->

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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
</script>

</body>

</html>
