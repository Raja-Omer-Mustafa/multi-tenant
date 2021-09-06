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
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="vendor/animate/animate.css">

        <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

        <!--(remove-empty-lines-end)-->

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css" />


        <!--(remove-empty-lines-end)-->



        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.js"></script>

    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign">
            <div class="center-sign">
                <a href="/" class="logo float-left">
                    <img src="img/logo.png" height="54" alt="Porto Admin" />
                </a>

                <div class="panel card-sign">
                    <div class="card-title-sign mt-3 text-right">
                        <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign Up</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text" class="form-control form-control-lg" />
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label>E-mail Address</label>
                                <input name="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label>Password</label>
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label>Password Confirmation</label>
                                        <input name="password_confirmation" type="password" class="form-control form-control-lg" required autocomplete="new-password" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary mt-2">Sign Up</button>
                                </div>
                            </div>

                            <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                                <span>or</span>
                            </span>

                            

                            <p class="text-center">Already have an account? <a href="{{route('login')}}">Sign In!</a></p>

                        </form>
                    </div>
                </div>

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