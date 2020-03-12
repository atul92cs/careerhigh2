@extends('layouts.user')
@section('modal')
    <div class="modal fade" id="modal-subscribe-1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-light">
                <div class="modal-body pb-6">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form class="input-round text-center" action="" id="createorder" method="post" target="_blank">
                        <p class="mb-4 mt-4">
                            <i class="far fa-envelope-open fs-81"></i>
                            <!--<img src="../assets/img/icon/rocket.png" alt="...">-->
                        </p>
                        <h4>Subscribe</h4>
                        <p>Subscribe to the {{$workshop->title}} workshop.</p>
                        <br>
                        <div class="input-group shadow-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input class="form-control" type="email" name="email" placeholder="Enter Your Email">
                            <input type="hidden" name="workshop" value="{{$workshop->id}}" />
                            
                            <div class="input-group-append">
                                <button class="btn btn-round btn-primary">Buy now</button>
                            </div>
                            
                        </div>
                        
                            <p class="text-danger text-left fs-10">*Please put only {{$workshop->domain}} email</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                
    <div class="modal fade" id="modal-subscribe-2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-light">
                <div class="modal-body p-md-0">
                    <div class="row no-gutters">
                        <div class=" ">
                       <h2 class="h4 mt-4 mb-4 text-center">Terms and Conditions</h2>
                      <p class="pull-left"> {!!$workshop->tcdesc!!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('head')

{!! $workshop->metahtml !!}
@endsection
@section('content')
        <main class="main-content">

            <section class="section py-9" style="padding-top:0rem !important">
                <div class="container">
                    
                        <h2 class="h4 mb-4">{{$workshop->title}}</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div><img src="{{asset('storage')}}/{{$workshop->image}}">
                                    <div class="badges">
                                        <a class="badge badge-warning" href="#">#{{$workshop->location}}</a>
                                        <a class="badge badge-danger" href="#">{{$workshop->subs_limit - App\Order::where('workshop_id',$workshop->id)->where('status',1)->count()}} left</a>
                                    </div>
                                    </div>
                                    
                                <p>{!!$workshop->description!!}</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 pl-3">

                            <aside id="sidebar" class="sidebar sidebar-sticky">
                                <ul class="nav nav-tabs justify-content-center" id="myTab1" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab123" data-toggle="tab" href="#home123" role="tab" aria-controls="home123" aria-selected="true">
            <i class="icon icon-aim-2 nav-icon"></i> step 1
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab123" data-toggle="tab" href="#profile123" role="tab" aria-controls="profile123" aria-selected="false">
            <i class="icon icon-cursors nav-icon"></i> step 2
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab123" data-toggle="tab" href="#contact123" role="tab" aria-controls="contact123" aria-selected="false">
            <i class="icon icon-layers nav-icon"></i> step 3
        </a>
    </li>
</ul>
<div class="tab-content" id="myTabContent1">
    <div class="tab-pane fade show active pt-3" id="home123" role="tabpanel" aria-labelledby="home-tab123">
        <strong>> Create an account at careerhigh</strong>
        <p></p>
    </div>
    <div class="tab-pane fade pt-3" id="profile123" role="tabpanel" aria-labelledby="profile-tab123">
        <strong>> Verify your college email address for the workshop</strong>
    </div>
    <div class="tab-pane fade pt-3" id="contact123" role="tabpanel" aria-labelledby="contact-tab123">
        <strong>> Make Payment and get access to content.</strong>
    </div>
</div>
                                 <hr class="" />    
                                <h2 class="h4 ">Booking Details</h2>
                                <ul class="list-unstyled mb-0">
                                    <li class="media mb-1">
                                        <div class="d-flex w-40 w-sm-30">
                                            <h4 class="mt-0 h6 mb-1">College</h4>
                                        </div>
                                        <div class="media-body">
                                            <p class="text-muted mb-1">
                                                {{$workshop->college}}
                                            </p>
                                        </div>
                                    </li>

                                    <li class="media mb-1">
                                        <div class="d-flex w-40 w-sm-30">
                                            <h4 class="mt-0 mb-1 h6">Location</h4>
                                        </div>
                                        <div class="media-body">
                                            <p class="text-muted mb-1">
                                                {{$workshop->location}}
                                            </p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="d-flex w-40 w-sm-30">
                                            <h4 class="mt-0 mb-1 h6">Duration</h4>
                                        </div>
                                        <div class="media-body">
                                            <p class="d-block text-muted mb-1">
                                                {{$workshop->duration}}
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="d-flex w-40 w-sm-30">
                                            <h4 class="mt-0 mb-1 h6">Date </h4>
                                        </div>
                                        <div class="media-body">
                                            <p class="d-block text-muted mb-1">
                                                @if($workshop->date == $workshop->date2)
                                                {{\Carbon\Carbon::parse($workshop->date2)->format('d M, Y')}}
                                                @else
                                               {{\Carbon\Carbon::parse($workshop->date)->format('d M')}} to {{\Carbon\Carbon::parse($workshop->date2)->format('d M, Y')}}
                                                @endif
                                                
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="d-flex w-40 w-sm-30">
                                            <h4 class="mt-0 mb-1 h6">Time</h4>
                                        </div>
                                        <div class="media-body">
                                            <p class="d-block text-muted mb-1">
                                                @if($workshop->time == $workshop->time2)
                                                {{\Carbon\Carbon::parse($workshop->time2)->format('H:i')}} onwards
                                                @else
                                                {{\Carbon\Carbon::parse($workshop->time)->format('H:i')}} - {{\Carbon\Carbon::parse($workshop->time2)->format('H:i')}}
                                                @endif
                                                
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="d-flex w-40 w-sm-30">
                                            <h4 class="mt-0 mb-1 h6">Price</h4>
                                        </div>
                                        <div class="media-body">
                                            <p class="d-block text-muted mb-1">
                                                @if($workshop->price == 0)
                                                Free
                                                @else
                                               Rs {{$workshop->price}}
                                                @endif
                                                
                                            </p>
                                        </div>
                                    </li>
                                </ul>

                                <hr class="my-4" />
                                @guest
                                <button class="btn btn-block btn-primary transition-hover" type="button" data-toggle="modal" data-target="#modal-subscribe-1">Book now</button>
                                @else
                                @if(auth()->user()->orders->where('workshop_id',$workshop->id)->where('status',1)->first())
                                <a class="btn btn-block btn-primary transition-hover"   href="{{route('order',auth()->user()->orders->where('workshop_id',$workshop->id)->where('status',1)->first()->id)}}">View</a>
                                @elseif(App\Order::where('workshop_id',$workshop->id)->where('status',1)->count() >= $workshop->subs_limit)
                                <a class="btn btn-block btn-primary transition-hover"   href="#">Not Available</a>
                                @else
                                <button class="btn btn-block btn-primary transition-hover" type="button" data-toggle="modal" data-target="#modal-subscribe-1">Book now <i class="fa fa-angle-right pl-1"></i></button>
                                @endif
                                @endguest
                                

                                <ul class="list-unstyled mb-0">
                                    <li class="media mb-1">
                                        <div class="d-flex w-sm-30">
                                            <a href="#" data-toggle="modal" data-target="#modal-subscribe-2" >T&amp;C Applied</a>
                                            
                                        </div>
                                        
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>


</main>
@endsection

@section('script')

<script>
    
        $("#sidebar").stick_in_parent({ offset_top: 90 });
    </script>
<script>
    $("#createorder").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
        $.ajax({ 
            url: "{{route('createorder')}}",
            type: 'post',
            data: formData,
            statusCode: {
                422: function(data) {
//                    console.log(data.responseJSON);
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors['errors'], function (key, value) {
                        iziToast.error({
                            position: 'topRight',
                            title: key,
                            message: value,
                        });
                    });
                }, 403: function(data) {
//                    console.log(data.responseJSON);
                    var errors = $.parseJSON(data.responseText);
//                    $.each(errors['errors'], function (key, value) {
                        iziToast.error({
                            position: 'topRight',
//                            title: key,
                            message: errors.message,
                        });
//                    });
                },
            },
            success: function (data) {
                if(data.success){
                   iziToast.success({
                    color: 'green',
                    position: 'topRight',
                    icon: 'icon-circle-check',
                    title: 'Success!',
                    message: data.msg,
                });
                setTimeout(function(){  window.location.reload(); }, 1000);  
                }
                else {
                     iziToast.error({
                         position: 'topRight',
                         icon: 'icon-circle-times',
                         position: 'topRight',
                         title: 'Warning!',
                         message: data.msg,
                        });
                }
                
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
    
    
     

 
    
    
    
    
</script>
@endsection