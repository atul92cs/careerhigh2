@extends('layouts.user')
@section('head')
{!! $categories->metahtml !!}
@endsection
@section('content')
        <main class="main-content">

            
            
            <section class="section" style="padding-top:2rem;padding-bottom:2rem;">
                <div class="container">
                    <header class="section-header">
                        <h2><mark class="aos-init aos-animate">{{$categories->title}}</mark></h2>
                        
                    </header>

                    <div class="row gap-y">
                        @forelse($categories->roadmap->where('status',1) as $road)
                        <div class="col-12 col-lg-4 uikit-example">
                            <div class="card text-white justify-content-end bg-img h-400" style="background-image: url({{asset('storage')}}/{{$road->cover_image}});background-size: cover;" data-scrim-bottom="5" onclick="window.location='{{route($categories->url.'.'.$road->url)}}'">
                                <div class="card-body flex-grow-0">
                                    <h3 class="h4 card-title fw-200"><a href="#">{{$road->title}}</a></h3>
                                    <div class="media align-items-center">
                                        
                                        <a class="btn btn-sm btn-primary transition-hover" href="{{route($categories->url.'.'.$road->url)}}">Read more</a>
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
                       @if (App\Upcommingroadmap::whereStatus(1)->first())
                @php $bb =App\Upcommingroadmap::whereStatus(1)->first(); @endphp
                <section id="theme-banner-four" class="gradient-half-primary-v1">
                    <img src="{{asset('frontendassets')}}/img/shape/shape-9.svg" alt="" class="shape-two">
                    <img src="{{asset('frontendassets')}}/img/shape/shape-11.svg" alt="" class="shape-four z-index-0">
                    <div class="round-shape-one"></div>
                    <div class="round-shape-two"></div>
                    <div class="round-shape-three"></div>

                    <div class="container m-gab-2-bottom m-gab-2-top">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="clearfix">
                                    <h2 class="text-white fw-100 h1">
                                        What's new in <span class="fw-600">Roadmaps</span>
                                    </h2>
                                    <p class="text-white o-5 mt-3 mb-5">
                                        {{$bb->title}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                              <img class="img-responsive img-fluid" src="{{asset('storage')}}/{{$bb->cover_image}}">
                            </div>
                        </div>
                    </div>

                    <figure class="position-absolute right-0 bottom-0 left-0 z-index-2 mb-0">

                    </figure>
                </section>
            @endif
        </main>
@endsection

        <!--Footer-Wrap-->
       
        <!--End Footer-Wrap-->
  