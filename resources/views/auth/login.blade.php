<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webkit | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('AUTH/assets')}}/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset('AUTH/assets')}}/css/backend-plugin.min.css">
    <link rel="stylesheet" href="{{asset('AUTH/assets')}}/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="{{asset('AUTH/assets')}}/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('AUTH/assets')}}/vendor/remixicon/fonts/remixicon.css">

    <link rel="stylesheet" href="{{asset('AUTH/assets')}}/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
    <link rel="stylesheet" href="{{asset('AUTH/assets')}}/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
    <link rel="stylesheet" href="{{asset('AUTH/assets')}}/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-6 bg-primary content-left">
                                        <div class="p-3">
                                            <h2 class="mb-2 text-white">Sign In</h2>
                                            <p>Login to stay connected.</p>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input id="email" name="email" class="floating-input form-control" type="email" placeholder=" ">
                                                            <label>Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input id="password" name="password" class="floating-input form-control" type="password" placeholder=" ">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <a href="{{ route('password.request') }}" class="text-white float-right">{{ __('Forgot Password?')}}</a>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-white">{{ __('Login') }}</button>
                                                <p class="mt-3">
                                                    Create an Account <a href="{{ route('register') }}" class="text-white text-underline">Sign Up</a>
                                                </p>
                                                <a href="{{ url('/login/google') }}" class="btn btn-white"><i class="fa fa-google"></i> Login with Google</a>

                                                <a href="{{ url('/login/facebook') }}" class="btn btn-white"><i class="fa fa-facebook"></i> Login with Facebook</a>

                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <img src="{{asset('AUTH/assets')}}/images/login/01.png" class="img-fluid image-right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('AUTH/assets')}}/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{asset('AUTH/assets')}}/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{asset('AUTH/assets')}}/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('AUTH/assets')}}/js/chart-custom.js"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('AUTH/assets')}}/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="{{asset('AUTH/assets')}}/js/app.js"></script>

    <script src="{{asset('AUTH/assets')}}/vendor/moment.min.js"></script>
</body>

</html>