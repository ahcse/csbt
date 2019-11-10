<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login | CSBT Admin</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/default/app.min.css') }}" rel="stylesheet" />
</head>
<body class="pace-top">
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<div class="login-cover">
    <div class="login-cover-image" style="background-image: url(img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
    <div class="login-cover-bg"></div>
</div>
<div id="page-container" class="fade">
    <div class="login login-v2" data-pageload-addclass="animated fadeIn">
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> <b>CSBT </b> Admin
                <small>Integrated Customize ERP Solution</small>
            </div>
            <div class="icon">
                <i class="fa fa-lock"></i>
            </div>
        </div>
        <div class="login-content">
            <form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
                @csrf
                <div class="form-group m-b-20">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group m-b-20">
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>
                <div class="checkbox checkbox-css m-b-20">
                    <input type="checkbox" id="remember_checkbox" />
                    <label for="remember_checkbox">
                        {{ __('Remember Me') }}
                    </label>


                </div>
                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Login') }}</button>
                </div>
                <div class="m-t-20">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <ul class="login-bg-list clearfix">
        <li class="active"><a href="javascript:;" data-click="change-bg" data-img="img/login-bg/login-bg-17.jpg" style="background-image: url(img/login-bg/login-bg-17.jpg)"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="img/login-bg/login-bg-16.jpg" style="background-image: url(img/login-bg/login-bg-16.jpg)"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="img/login-bg/login-bg-15.jpg" style="background-image: url(img/login-bg/login-bg-15.jpg)"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="img/login-bg/login-bg-14.jpg" style="background-image: url(img/login-bg/login-bg-14.jpg)"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="img/login-bg/login-bg-13.jpg" style="background-image: url(img/login-bg/login-bg-13.jpg)"></a></li>
        <li><a href="javascript:;" data-click="change-bg" data-img="img/login-bg/login-bg-12.jpg" style="background-image: url(img/login-bg/login-bg-12.jpg)"></a></li>
    </ul>
</div>
<script src="{{ asset('js/app.min.js') }}"></script>
<script src="{{ asset('js/theme/default.min.js') }}"></script>
<script src="{{ asset('js/demo/login-v2.demo.js') }}"></script>
</body>
</html>
