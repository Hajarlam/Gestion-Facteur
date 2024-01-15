<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Set a common background color */
        }

        .navbar {
            margin-bottom: 20px;
        }

        .container {
            margin-top: 70px; /* Adjust as needed */
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-body {
            padding: 80px;
            
        }

        .form-group {
            margin-bottom: 20px;

        }
        .btn-block{
            margin-left:20px ;
        }

        /* Add more styles as needed */

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card {
                margin-bottom: 20px;
            }
        }
    </style>
    <title>Gestion - Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-outline-success" >Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-primary">Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container  mt-5">
    
    <div class="row h-100 justify-content-center align-items-center mt-5 mx-xl-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="card-body p-lg-5">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                        <div class="form-group">
    <label for="i-email">{{ __('Email address') }}</label>
    <input id="i-email" type="text" dir="ltr" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

    </div>
</div>

                                    <div class="form-group">
                                        <label for="i-password">{{ __('Password') }}</label>
                                        <input id="i-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="remember" id="i-remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="custom-control-label" for="i-remember">
                                                    {{ __('Remember me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 {{ (__('lang_dir') == 'rtl' ? 'text-left' : 'text-right') }}">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <button type="submit" class="col-11 p-center btn btn-block btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                            </div>
                            @if(config('settings.registration'))
                                <div class="card-footer bg-base-2 border-0">
                                    <div class="text-center text-muted my-2">{{ __('Don\'t have an account?') }} <a href="{{ route('register') }}" role="button">{{ __('Register') }}</a></div>
                                </div>
                            @endif
                        </div>
                        <div class="col-12 col-lg-7 bg-primary d-none d-lg-flex flex-fill background-size-cover background-position-center" style="background-image: url({{ asset('img/login.svg') }})">
                            <div class="card-body p-lg-5 d-flex flex-column flex-fill position-absolute top-0 right-0 bottom-0 left-0">
                                <div class="d-flex align-items-center d-flex flex-fill">
                                    <div class="text-light {{ (__('lang_dir') == 'rtl' ? 'mr-5' : 'ml-5') }}">
                                        <div class="h2 font-weight-bold">
                                            {{ __('Login') }}
                                        </div>
                                        <div class="font-size-lg font-weight-medium">
                                            {{ __('Welcome back.') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>  
    </div>
        <footer class="navbar fixed-bottom footer-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">© copyright 2023 . All rights reserved.</a>
            </div>
           
</footer>
         <!--::footer_part start::-->
         
    <!--::footer_part end::-->

    <!-- ... (your existing scripts) ... -->

    <!-- Toggle Dark/Light Mode Script -->
    
</body>

</html>
