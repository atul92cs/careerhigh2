@extends('layouts.user')

@section('content')
        <main class="main-content">
          

            <section id="image" class="section" style="padding-top:2rem;padding-bottom:2rem;">
                <div class="container">
                    <header class="section-header">
                        
                        <h2><mark class="aos-init aos-animate">All Categories</mark></h2>
                    </header>

                    <div class="row gap-y">
                        @forelse($categories as $cat)
                        <div class="col-12 col-lg-4 uikit-example"> 
                            <div class="card d-block" onclick="window.location='{{route($cat->url)}}'">
                                <div class="card-img-top" >
                                    <img src="{{asset('storage')}}/{{$cat->cover_image}}" class="w-100" alt="Card image cap" style="height: 240px;">
                                    
                                </div>
                                <div class="card-body p-5">
                                    <h5 class="card-title">{{$cat->title}}</h5>
                                    
                                    <a class="fs-13 fw-600" href="{{route($cat->url)}}">Show Roadmaps <i class="fa fa-angle-right pl-1"></i></a>
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

        <!--Footer-Wrap-->
       
        <!--End Footer-Wrap-->
  