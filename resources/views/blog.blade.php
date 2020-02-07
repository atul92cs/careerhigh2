@extends('layouts.user')

@section('content')

        <main class="main-content">
               {{--
            @php 
            $ff= collect(App\Blog::where('status',1)->latest()->take(3)->get());
            @endphp
            @if($ff->count()==3)
            
            <section class="pt-6">
                <div class="container">
                    <h3>Trending Blogs</h3>
                    <div class="row">
                        
                        
                        <div class="col-lg-8">
                            <article class="card text-white h-500 bg-img" style="background-image: url({{asset('storage')}}/{{$ff[0]->cover_image}});" data-scrim-bottom="8">
                                <div class="row h-100 p-6">
                                    <!--<div class="col-12">
                                        <div class="text-white fs-14 mb-3">May 21, 2019</div>
                                    </div>-->
                                    <div class="col-12 align-self-end">
                                        <div class="text-white-50 fs-14 mb-2">{{Carbon\Carbon::parse($ff[0]->created_at)->format('M d, Y')}}</div>
                                        <h2 class="card-title h3 mb-2">
                                            <a class="text-white anim-link-2" href="../blog/single.html">{{$ff[0]->title}} </a>
                                        </h2>
                                        <!--<p>
                                            We will show you how new technologies influence.
                                        </p>-->
                                        <div class="media align-items-center mb-4">
                                            <!--<img class="avatar avatar-xs mr-2" src="{{asset('frontendassets')}}/img/avatar/avatar3.jpg" alt="...">-->
                                            <div class="media-body o-9 fs-14">
                                                <a href="#" class="anim-link-2 mr-3">{{$ff[0]->author}}</a>
                                                <a href="#" class="icon-preview-2 mr-3"> {{$ff[0]->view->count()}}</a>
                                                <a href="#"><span class="icon-bubble-conversation-2"></span>{{$ff[0]->comment->count()}} </a>
                                            </div>
                                        </div>
                                        <a href="{{route('blog.'.$ff[0]->url)}}" class="btn btn-sm btn-sleek-warning btn-pill">Read More</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-md-12">

                                    <article class="card text-white h-240 bg-img" style="background-image: url({{asset('storage')}}/{{$ff[1]->cover_image}});" data-scrim-bottom="7">
                                        <div class="row h-100 p-5">
                                            <div class="col-12">
                                                <div class="text-white-50 fs-14 mb-3">{{Carbon\Carbon::parse($ff[1]->created_at)->format('M d, Y')}}</div>
                                            </div>
                                            <div class="col-12 align-self-end">
                                                <h3 class="card-title h5 mb-2">
                                                    <a class="text-white anim-link-2" href="../blog/single.html">{{$ff[1]->title}} </a>
                                                </h3>
                                                <div class="media align-items-center">
                                                    <!--<img class="avatar avatar-xs mr-2" src="{{asset('frontendassets')}}/img/avatar/avatar3.jpg" alt="...">-->
                                                    <div class="media-body o-9 fs-14">
                                                        <a href="#" class="anim-link-2 mr-3">{{$ff[1]->author}}</a>
                                                        <a href="#" class="icon-preview-2 mr-3"> {{$ff[1]->view->count()}}</a>
                                                        <a href="#"><span class="icon-bubble-conversation-2"></span> {{$ff[1]->comment->count()}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-12 mb-4"></div>
                                <div class="col-md-12">
                                    <article class="card text-white h-240 bg-img" style="background-image: url({{asset('storage')}}/{{$ff[2]->cover_image}});" data-scrim-bottom="6">
                                        <div class="row h-100 p-5">
                                            <div class="col-12">
                                                <div class="text-white-50 fs-14 mb-3">{{Carbon\Carbon::parse($ff[2]->created_at)->format('M d, Y')}}</div>
                                            </div>
                                            <div class="col-12 align-self-end">
                                                <h3 class="card-title h5 mb-2">
                                                    <a class="text-white anim-link-2" href="../blog/single.html">{{$ff[2]->title}} </a>
                                                </h3>
                                                <div class="media align-items-center">
                                                    <!--<img class="avatar avatar-xs mr-2" src="{{asset('frontendassets')}}/img/avatar/avatar3.jpg" alt="...">-->
                                                    <div class="media-body o-9 text-white fs-14">
                                                        <a href="#" class="anim-link-2 mr-3">{{$ff[2]->author}}</a>
                                                        <a href="#" class="icon-preview-2 mr-3"> {{$ff[2]->view->count()}}</a>
                                                        <a href="#"><span class="icon-bubble-conversation-2"></span> {{$ff[2]->comment->count()}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            @endif
            --}}
                        <section class="section" style="padding-top:2rem;">
                
                <div class="container">
                    <h3 class="">All Blogs</h3>
                    

                    <div class="row gap-y">
                        @forelse(App\Blog::where('status',1)->get() as $road)
                        <div class="col-12 col-lg-4 uikit-example">
                            <div class="card text-white justify-content-end bg-img h-400" style="background-image: url({{asset('storage')}}/{{$road->cover_image}});background-size: cover;" data-scrim-bottom="5" onclick="window.location='{{route('blog.'.$road->url)}}'">
                                <div class="card-body flex-grow-0">
                                    <h3 class="h4 card-title fw-200"><a href="#">{{$road->title}}</a></h3>
                                    <div class="media align-items-center">
                                        
                                        <a class="btn btn-sm btn-primary transition-hover" href="{{route('blog.'.$road->url)}}" >Read more</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="text-center">
                        <img src="{{asset('frontendassets/img/missing.png')}}" class="img-responsive img-fluid" style="width:50%;" />
                        <h3>It seems something is missing</h3>
                        </div>
                        @endforelse
                        
                    </div>
                </div>
            </section>
        </main>

@endsection