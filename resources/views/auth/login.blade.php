<!DOCTYPE html>
<html lang="en">

{{-- Start Template Head --}}

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/custom-assets/backend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/custom-assets/backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/custom-assets/backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/custom-assets/backend/css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        .logo img {
            height: 40px !important;
            width: 40px !important;
        }
    </style>
</head>
{{-- / End Template Head --}}

{{-- Start Template Body --}}

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ session()->get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        
                                        <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                        <p class="text-center small">Login to Your Account</p>
                                    </div>
                                    @php 
                                    $segment = request()->segment('1');
                                    if($segment == 'admin') {
                                        $type = 1;
                                    }elseif($segment == 'staff'){
                                        $type = 2;
                                    }elseif($segment == 'developers') {
                                        $type = 3;
                                    }else {
                                        $type = 0;
                                    }                                                                      
                                    @endphp
                                   
                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{route('login.submit')}}">
                                        @csrf
                                        <input type="hidden" name="type" id="type" value="{{$type}}">
                                        <input type="hidden" name="user" id="user" value="{{$segment}}">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="username" class="form-control"
                                                    id="username" required value="">
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required value="">
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/custom-assets/backend/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/custom-assets/backend/js/main.js') }}"></script>

</body>
{{-- / End Template Body --}}

</html>
