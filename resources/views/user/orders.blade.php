@extends('layouts.footer')
@section('content')

            <section class="gradient-half-primary-body-v1 z-index-1 pt-8 pb-5">
                <div class="container m-gab-2 z-index-1">
                    <div class="row align-items-center text-center">
                        <div class="col-md-12">
                            <div class="clearfix mt-9"> 
                                <h2 class="text-white fw-100 h1">
                                    <span class="fw-600">{{ Auth::user()->name }}'s Dashboard</span>
                                </h2>
                                <p class="text-white mt-3 mb-4 o-5">
                                    We have it all here
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-section-3 z-index--1">
                    <img src="{{asset('frontendassets')}}/img/sectionbg.png" class="img-responsive img-fluid">
                </div>
            </section>

            <section class="mt-4" id="getStarted">
                <div class="container">
                    <header class="section-header">
                        <h2>Your orders are here</h2>
                    </header>

                   
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="uikit-example">
                                <table class="table table-striped mb-4">
                                     <thead>
                                        <tr>
                                            <th>Purchase Date</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse(auth()->user()->orders->where('status',1) as $a)
                                        <tr>
                                           <th scope="row">{{Carbon\Carbon::parse($a->created_at)->format('d-M-Y')}}</th>
                                            <td><a href="{{route('workshop',$a->workshop->url)}}">{{$a->workshop->title}}</a></td>
                                            <td><a class="btn-remove btn btn-primary btn-xs"  data-id="{{$a->id}}" href="{{route('order',$a->id)}}">View</a></td>
                                        </tr>
                                        @empty
                                        <td colspan="5" class="text-center">
                                            <img src="{{asset('frontendassets')}}/img/clean.png" alt="">
                                            <h3>No Orders found</h3>
                                        </td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection