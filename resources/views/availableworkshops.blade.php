@extends('layouts.user')
@section('head')
@endsection
@section('content')

        <main class="main-content">

            
            
            <section class="section" style="padding-top:2rem;padding-bottom:2rem;">
                <div class="container">
                    <header class="section-header">
                        <h2><mark class="aos-init aos-animate">Available Workshops</mark></h2>
                        
                    </header>
                    @if($availableworkshops->where('status',1)->count())
                    <div class="row gap-y">
                        @endif



@forelse($availableworkshops->where('status',1) as $w)

<div class="col-12 col-lg-4 uikit-example">
                            <div class="card d-block" onClick="window.location='{{route('availableworkshop.workshop',$w->url)}}'">
                                <div class="card-img-top">
                                    <img src="{{asset('storage')}}/{{$w->image}}" class="w-100" alt="Card image cap">
                                   
                                </div>
                                <div class="card-body p-5">
                                    <h5 class="card-title">{{$w->title}} Workshop</h5>
                                </div>
                               <div class="card-footer text-right">
                                    <a class="fs-13 fw-600" href="{{route('availableworkshop.workshop',$w->url)}}">Show details <i class="fa fa-angle-right pl-1"></i></a>
                                </div>
                            </div>
                        </div>
                        @empty
                        
                        <div class="text-center">
                        <img src="{{asset('frontendassets/img/missing.png')}}" class="img-responsive img-fluid" style="width:20%;" />
                        <h3>It seems something is missing</h3>
                        </div>
                        @endforelse
                        
                   
                      @if($availableworkshops->where('status',1)->count())
                     </div>
                        @endif
                </div>
            </section>
</main>
@endsection