@extends('layouts.user')
@section('content')
        <main class="main-content">
            <section class="section" style="padding-top:2rem;padding-bottom:2rem;">
                <div class="container">
                    

                    <div class=" gap-y">
                        
                        
                        <div class="text-center">
                        <img src="{{asset('frontendassets/img/shopping-bag.png')}}" class="img-responsive img-fluid" style="width:20%;" />
                        <h3>Your order is still in the bag for checkout.</h3>
                            <a class="btn btn-primary transition-hover btn-sm ml-3 order-1 order-lg-2" href="{{route('paynow',['orderid'=>$order->id,'token'=>$order->token])}}">Try payment again</a>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
</main>
@endsection