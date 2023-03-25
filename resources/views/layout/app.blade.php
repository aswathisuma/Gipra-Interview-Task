<!DOCTYPE html>
<html lang="en">

 {{-- Start Template Head--}}
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicons -->
    <link href="{{ asset('/custom-assets/backend/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('/custom-assets/backend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{ asset('/custom-assets/backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/custom-assets/backend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')
  </head>
 
    <body>

        @include('layout.header')
        @include('layout.sidebar')
        @yield('page_content')
        @include('layout.footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" ></script>
        <script src="{{ asset('/custom-assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('/custom-assets/backend/vendor/simple-datatables/simple-datatables.js')}}"></script>

        <script src="{{ asset('/custom-assets/backend/vendor/php-email-form/validate.js')}}"></script>

        <script src="{{ asset('/custom-assets/backend/js/main.js')}}"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @yield('script')

    </body>


</html>