@extends('layouts.user')
@section('head')

@endsection
@section('modal')

    <div class="modal fade" id="modal-subscribe-2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-light">
                <div class="modal-body p-md-0">
                    <div class="row no-gutters">
                        <div class="col-md-4 col-xl-6 d-none d-md-flex bg-img rounded-left" style="background-image: url({{asset('frontendassets')}}/img/man.jpg)"></div>
                        <div class="col-md-8 col-xl-5 mx-auto">
                            <form class="py-7 px-2" method="post" id="apply">
                                <h3><strong>Apply Now.</strong></h3>
                                <p class="mb-4">We reply in 24 hours for all kinds of workshops.</p>

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="collegename" placeholder="Your College Name">
                                </div>
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="name" placeholder="Your Name">
                                </div>
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-american-sign-language-interpreting"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="specialization" placeholder="Specialization">
                                    
                                </div>
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-archive"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="workshop" value="{{$availableworkshop->title}}" >
                                    
                                </div>
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                                    </div> 
                                    <input class="form-control" type="text" name="owning" placeholder="Are you a student of faculty?">
                                </div>
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="mobile" placeholder="Your Mobile">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input class="form-control" type="email" name="email" placeholder="Email Address">
                                </div>
                                
                                
                                
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-globe"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="city" placeholder="Your City">
                                </div>
                                

                                <button class="btn btn-lg btn-block btn-primary transition-hover">Apply now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
        <main class="main-content">
            

            <section id="read-all" class="section" style="padding-top:0rem;padding-bottom:2rem;">
                <div class="">
                    <div class="row justify-content-center">

                        <div class="col-md-10 col-lg-8 text-center mt-6 mb-6">
                            <h1 class="mb-4">{{$availableworkshop->title}}</h1>
                            
                            <div class="text-center">
                                <small class="text-muted mr-3">{{Carbon\Carbon::parse($availableworkshop->created_at)->diffforhumans()}}</small>


                            </div>
                        </div>

                        <div class="col-lg-10 mb-6 text-center">
                             <img class="img-fluid rounded shadow-1" src="{{asset('storage')}}/{{$availableworkshop->image}}" style="width:50%;">
                        </div>

                        <div class="col-md-10 col-lg-8">
                                     {!! $availableworkshop->description !!}
                        </div>

                      
                    </div>
                </div>
            </section>
            <section class="pt-6 pt-md-8 bg-gray">
                <div class="container pb-6 pb-md-8">
                    <div class="row align-items-center">
                        <div class="col-12 col-md">

                            <!-- Heading -->
                            <h3 class="mb-1">
                                Interested in hosting a workshop at your Institution?
                            </h3>

                            <!-- Text -->
                            <p class="font-size-lg text-muted mb-5 mb-md-0">
                                Hit us up and we'll get in touch with you.
                            </p>

                        </div>
                        <div class="col-12 col-md-auto">

                            <!-- Button -->
                            
                            <button class="btn btn-block btn-primary transition-hover" type="button" data-toggle="modal" data-target="#modal-subscribe-2">Apply now</button>
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .container -->
            </section>
        </main>

  @endsection
@section('script')
<script>
    $("form#apply").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
//        formData.append('description',editor.getData()) ;
        $.ajax({ 
            url: "{{route('availableworkshops.workshopcontact')}}",
            type: 'post',
            data: formData,
            
            success: function (data) {
                
                iziToast.success({
                    color: 'green',
                    position: 'topRight',
                    icon: 'icon-circle-check',
                    title: 'Success!',
                    message: data.msg,
                });
                setTimeout(function(){  window.location="{{route('welcome')}}"; }, 1000 ); 
            },
            
        });
    });
</script>
@endsection