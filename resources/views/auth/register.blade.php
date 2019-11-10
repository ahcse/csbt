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
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
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

