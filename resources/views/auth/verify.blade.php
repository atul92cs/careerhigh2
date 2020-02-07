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
                                @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                                <p>{{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection




