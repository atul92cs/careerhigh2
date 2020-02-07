@extends('layouts.user')
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
                    <img src="{{asset('frontendassets')}}/img/sectionbg.png" alt="vertex">
                </div>
            </section>
            <section class="">
                <div class="container">

                    <div class="row gap-y">
                        <div class="col-md-6 col-lg-3">
                            <a class="h-200 card text-white text-center bg-img py-6" href="{{route('user.bookmarks')}}" style="background-image: url({{asset('frontendassets')}}/img/thumb/16.jpg);" data-overlay="7">
                                <div class="position-relative">
                                    <p><i class="fa fa-bookmark lead-5 opacity-70" aria-hidden="true"></i></p>
                                    <h5 class="mb-0">Bookmarks</h5>
                                    <small class="opacity-70">139 Pages Bookmarked</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="h-200 card text-white text-center bg-img py-6" href="{{route('user.activity')}}" style="background-image: url({{asset('frontendassets')}}/img/thumb/17.jpg);" data-overlay="7">
                                <div class="position-relative">
                                    <p><i class="fa fa-history lead-5 opacity-70" aria-hidden="true"></i></p>
                                    <h5 class="mb-0">History</h5>
                                    <small class="opacity-70">218 Roadmaps Viewed</small>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
@endsection