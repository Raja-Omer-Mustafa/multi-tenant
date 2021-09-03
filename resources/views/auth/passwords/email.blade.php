<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">

        <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

        <!--(remove-empty-lines-end)-->

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('css/theme.css')}}" />


        <!--(remove-empty-lines-end)-->



        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{asset('css/skins/default.css')}}" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <!-- Head Libs -->
        <script src="{{asset('vendor/modernizr/modernizr.js')}}"></script>

    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign">
            <div class="center-sign">
                <a href="/" class="logo float-left">
                    <img src="{{asset('img/logo.png')}}" height="54" alt="Porto Admin" />
                </a>

                <div class="panel card-sign">
                    <div class="card-title-sign mt-3 text-right">
                        <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Recover Password</h2>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <p class="m-0">Enter your e-mail below and we will send you reset instructions!</p>
                        </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
</div>
                </div>

                <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
            </div>
        </section>
        <!-- end: page -->

        <!-- Vendor -->
        <script src="vendor/jquery/jquery.js"></script>
        <script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="vendor/popper/umd/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="vendor/common/common.js"></script>
        <script src="vendor/nanoscroller/nanoscroller.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
        <!-- Specific Page Vendor -->


        <!--(remove-empty-lines-end)-->
        
        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="js/custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>

    </body>
</html>