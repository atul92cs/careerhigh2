@extends('layouts.auth')
@section('content')
            <div class="d-flex align-items-center position-relative h-100vh">
                <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center h-100vh px-0" data-overlay="1" style="background-image:url({{asset('frontendassets')}}/img/mix/desktop-7.jpeg); background-size:cover;">
                    <div class="w-100 p-7 text-center">

                        <div class="position-absolute right-0 top-0 left-0 p-5">
                            <img src="{{asset('frontendassets')}}/img/logo-white.png" width="150" />
                        </div>

                        <div class="text-white position-relative">
                            <h1>
                                Build a better career
                            </h1>
                            <p>
                               Get that dream job you've been aiming for
                            </p>
                        </div>

                        <div class="position-absolute right-0 bottom-0 left-0 text-center text-white p-5">
                            <div class="row">
                                <div class="col-6">
                                    <p class="fs-14 mb-0 mt-1">© <span class="o-7"> CareerHigh <script>
              document.write(new Date().getFullYear())
            </script></span></p>
                                </div>
                                <div class="col-6">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a class="m-list--link" href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-7 col-xl-5 offset-md-2 offset-lg-2 offset-xl-3">
                            <div class="mb-6">
                                <h2 class="h3 font-weight-normal mb-0">Welcome to <span class="font-weight-semi-bold text-primary">CareerHigh</span></h2>
                                <p>Sign in to your account.</p>
                            </div>
                            <form class="input-line vertex-input" method="post">
                                @csrf
                                <div class="vertex-input-group first">
                                    <div class="apend-wrap">
                                        <i class="icon-mail-2"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="required">*</span></label>
                                        <input placeholder="Email" maxlength="100" class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                    
                                </div>
                                <div class="vertex-input-group last">
                                    <div class="apend-wrap">
                                        <i class="icon-lock-unlock-2"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="password" id="password" type="password"  name="password" required autocomplete="current-password" placeholder="*******" maxlength="100" class="form-control @error('password') is-invalid @enderror">
                                    </div>
                                    
                                </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="row mt-4">
                                    <div class="col-6">
                                          
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="{{route('password.request')}}" class="m-link-muted small">Forgot password?</a>
                                    </div>

                                    <div class="col-md-12 center">
                                        <button type="submit" class="btn btn-primary btn-block transition-hover mt-4 mb-2">Sign In</button>
                                    </div>
                                </div>

                                <br />

                                <div class="text-center">
                                    <p>
                                        Don't have an account yet ? <a href="{{route('register')}}" class="text-primary anim-link">Sign Up</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection