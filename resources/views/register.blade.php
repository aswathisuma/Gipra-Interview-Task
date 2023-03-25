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
    <link href="{{ asset('/custom-assets/backend/vendor/jquery/css/jquery-ui.css') }}" rel="stylesheet">
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
                        <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">
                            @if (session()->has('error'))
                                <div class=" col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ session()->get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('success'))
                                <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">                                    
                                    {{ session()->get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Sign Up</h5>
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{ route('do_sign_up') }}" id="sign-up" enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-6">
                                            <label for="type" class="form-label">Type</label>
                                            <div class="input-group has-validation">
                                                <select name="type" class="form-select" id="type">
                                                    <option value=""> Choose</option>
                                                    <option value="2" {{(old('type')==2)? 'selected':''}}> Staff</option>
                                                    <option value="3" {{(old('type')==3)? 'selected':''}}> Developer</option>
                                                </select>
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('type'))
                                                <div class="errors">{{ $errors->first('type') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <label for="name" class="form-label">Name</label>
                                            <div class="input-group has-validation">
                                                <input type="input" name="name" class="form-control" id="name"
                                                    value="{{ old('name') }}">
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('name'))
                                                <div class="errors">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="input" name="email" class="form-control" id="email"
                                                    value="{{ old('email') }}">
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('email'))
                                                <div class="errors">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                       
                                        <div class="col-6">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <div class="input-group has-validation">
                                                <input type="input" name="dob" class="form-control" id="dob"
                                                    value="{{ old('dob') }}" autocomplete="off">
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('dob'))
                                                <div class="errors">{{ $errors->first('dob') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Address</label>
                                            <div class="input-group has-validation">
                                                <textarea name="address" class="form-control" id="address">{{ old('address') }}</textarea>
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('address'))
                                                <div class="errors">{{ $errors->first('address') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <label for="photo" class="form-label">Photo</label>
                                            <div class="input-group has-validation">
                                                <input type="file" name="photo" class="form-control"
                                                    id="photo">
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('photo'))
                                                <div class="errors">{{ $errors->first('photo') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <label for="gender" class="form-label">Gender</label>
                                            <div class="input-group has-validation">
                                                <select name="gender" class="form-select" id="gender">
                                                    <option value=""> Choose</option>
                                                    <option value="Female" {{(old('type')=='Female')? 'selected':''}}> Female</option>
                                                    <option value="Male" {{(old('type')=='Male')? 'selected':''}}> Male</option>
                                                    <option value="Others" {{(old('type')=='Others')? 'selected':''}}> Others</option>
                                                </select>
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('gender'))
                                                <div class="errors">{{ $errors->first('gender') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <div class="input-group has-validation">
                                                <input type="input" name="mobile" class="form-control"
                                                    id="mobile" value="{{ old('mobile') }}">
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('mobile'))
                                                <div class="errors">{{ $errors->first('mobile') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                            <input type="password" name="password" class="form-control"
                                                id="password">
                                            </div>
                                            <div class="errorTxt"></div>
                                            @if ($errors->has('password'))
                                                <div class="errors">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-2">
                                            <button class="btn btn-primary w-100" type="submit">Save</button>
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
    <script src="{{ asset('/custom-assets/backend/vendor/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/jquery/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/jquery/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/custom-assets/backend/vendor/jquery/js/additional-methods.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('/custom-assets/backend/js/main.js') }}"></script>
    <script>
        $("#dob").datepicker({
            maxDate: new Date(),
            dateFormat: "dd-mm-yy",
        });
    </script>

    <script>
        $("#sign-up").validate({
            rules: {
                type: "required",
                name: "required",
                email: {
                    required:true,
                    email: true
                },
                address: "required",
                dob: "required",
                photo:{
                    required: true,
                    extension: "jpg|jpeg|png"
                },
                gender:"required",
                mobile: {
                    required:true,
                    number:true,
                    minlength:10,
                    maxlength:10,
                },
                password :{
                    required:true,
                }
            },
            messages: {
                type: {
                    required: " Please enter your type",
                },
                name: {
                    required: " Please enter your firstname",
                },
                email:{
                    required:"Please enter your email",
                    email : "Please enter a valid email address."
                },
                address: {
                    required: " Please enter your address",
                },
                dob: {
                    required: " Please choose your date of birth",
                },
                photo: {
                    required: "Please upload file.",
                    extension: "Please upload file in these format only (jpg, jpeg, png)."
                },
                mobile: {
                    required: " Please enter your mobile",
                    number : "Enter a 10 digit number",
                    minlength: "Enter a 10 digit number",
                    maxlength: "Enter a 10 digit number"
                },
                gender: {
                    required: " Please choose your gender",
                },
                password:{
                    required:"Please enter your password",
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.input-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    </script>
</body>
{{-- / End Template Body --}}

</html>
