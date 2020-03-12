@extends('layouts.user')
@section('content')
        <main class="main-content">
            <section class="section" style="padding-top:2rem;padding-bottom:2rem;">
                <div class="container">
                    

                    <div class=" gap-y">
                        
                        
                        <div class="text-center">
                        <img src="{{asset('frontendassets/img/missing.png')}}" class="img-responsive img-fluid" style="width:20%;" />
                        <h3>Something is missing.</h3>
                            <a class="btn btn-primary transition-hover btn-sm ml-3 order-1 order-lg-2" href="{{route('welcome')}}">Back to home</a>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
</main>
@endsection