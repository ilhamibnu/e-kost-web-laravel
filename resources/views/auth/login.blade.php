@extends('layouts.auth')

@push('addon-style')
<script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>

<!-- Custom Theme files -->
<link href="assets-login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets-login/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
<!-- //web font -->

<style>
    .header-main {
        max-width: 310px;
        margin: 0 auto;
        position: relative;
        z-index: 999;
        padding: 3em 2em;
        background: rgba(255, 255, 255, 0.04);
        -webkit-box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
        box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
    }
</style>
@endpush

@section('content')
    <!-- main -->
    <div class="w3layouts-main">
        <div class="bg-layer">
            <h1>Login</h1>
            <div class="header-main">
                <div class="main-icon pb-2" style="display:block; margin:auto; margin-bottom : 30px !important">
                </div>
                <div class="header-left-bottom">
                   <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="icon1">
                            <span class="fa fa-user"></span>
                            <input type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="icon1">
                            <span class="fa fa-lock"></span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="login-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="bottom">
                            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="links">
                            <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign
                                up</a>.</p>
                                         @if (Route::has('password.request'))
                                       <p> <a class="font-bold" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                       </p>
                                    @endif
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
                <div class="social">
                    <ul>
                        <li>or login using : </li>
                        <li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>

                        <li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>

            <!-- copyright -->
            <div class="copyright">
                <p>© 2022 | Design by <a href="http://w3layouts.com/" target="_blank">A2</a></p>
            </div>
            <!-- //copyright -->
        </div>
    </div>
    <!-- //main -->
{{-- <div id="auth">    
    <div class="row h-100">
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
    
            </div>
        </div>
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Log in.</h1>
                <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
    
               <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                    {{ __('Login') }}
                                </button>
                
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign
                            up</a>.</p>
                                     @if (Route::has('password.request'))
                                   <p> <a class="font-bold" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                   </p>
                                @endif
                </div>
            </div>
        </div>
        </form>
        
    </div>
    
        </div> --}}
@endsection
