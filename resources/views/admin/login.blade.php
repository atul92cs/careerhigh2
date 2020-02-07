<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login now</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('adassets')}}/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('adassets')}}/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('adassets')}}/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('adassets')}}/css/style.css">

</head>
<style>
    invalid-feedback {
    display: block !important;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
}
    </style>
<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login at CareerHigh</h3>
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                    </div>
                    <div class="input-group mb-4">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="********">
                    </div>
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="{{asset('adassets')}}/js/vendor-all.min.js"></script><script src="{{asset('adassets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('adassets')}}/js/pcoded.min.js"></script>

</body>
</html>
