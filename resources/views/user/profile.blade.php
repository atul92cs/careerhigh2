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
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">

                        

                        <div class="col-md-12">
                           <div class="text-left mx-md-auto">
                        <h3 class="text-muted">User Details</h3>
                    </div>
                            <section class=" py-2 bg-gray mb-9" id="controls">
                                 <div class="container">
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="media align-items-center">
                                <div class="mr-5">
                                    <img class="" src="{{asset('storage')}}/{{auth()->user()->image}}" width="150" alt="" style="border-radius:8px;" />
                                </div>
                                <div class="media-body">
                                    
                                    <h3 class="h4 text-primary mb-0 fw-100"><span class="fw-600">{{auth()->user()->name}}</span> </h3>
                                    <p class="text-light mb-0 small text-success">joined on {{\Carbon\Carbon::parse(auth()->user()->created_at)->format('F d, Y')}} </p>
                                    <p class="mb-0 fw-200 small text-light">{{auth()->user()->email}}</p>
                                    <p class="mb-0 fw-200 small text-light">{{auth()->user()->phone == 0 ? '' : auth()->user()->phone }}</p>
                                    
                                    <a href="{{route('profile.edit')}}" class="anim-link-2 anim-link-2-primary  common-Link--arrow common-BodyText">Edit Profile  </a>
                                    
                                </div>
                            </div>
                            <div>
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                            </section>
                            @if(auth()->user()->collegeug)
<div class="text-left mx-md-auto">
                        <h3 class="text-muted">More Information</h3>
                    </div>
            <section class="section bg-light pb-2 pt-2">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="clearfix">
                                <div class="py-2 px-4">
                                    <img src="{{asset('frontendassets')}}/img/poststudent.png" class="ml-3"  />
                                    <h2 class="h5 text-primary">UnderGraduate Degree</h2>
                                    @if(auth()->user()->isug == 'pursuing')
                                    <strong class="text-dark border-bottom">Undergraduate Program?</strong>
                                    <p> {{auth()->user()->isug}} </p>
                                    <strong class="text-dark border-bottom">Undergraduate year currently?</strong>
                                    <p> {{auth()->user()->ugyear}} </p>
                                    <strong class="text-dark border-bottom">Undergraduate Specialization?</strong>
                                    <p> {{auth()->user()->specialug}} </p>
                                    <strong class="text-dark border-bottom">Undergraduate College?</strong>
                                    <p> {{auth()->user()->collegeug}} </p>
                                    @else
                                    <strong class="text-dark border-bottom">Is undergraduate?</strong>
                                    <p> {{auth()->user()->isug}} </p>
                                    <strong class="text-dark border-bottom">Undergraduate Specialization?</strong>
                                    <p> {{auth()->user()->specialug}} </p>
                                    <strong class="text-dark border-bottom">Undergraduate College?</strong>
                                    <p> {{auth()->user()->collegeug}} </p>
                                    @endif
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="clearfix">
                                <div class="py-2 px-4">
                                    <img src="{{asset('frontendassets')}}/img/student.png" class="ml-3" />
                                    <h2 class="h5 text-primary">Post-Graduation</h2>
                                    @if(auth()->user()->ispg == 'pursuing')
                                    <strong class="text-dark border-bottom">Postgraduate Program?</strong>
                                    <p> {{auth()->user()->ispg}} </p>
                                    <strong class="text-dark border-bottom">Postgraduate year currently?</strong>
                                    <p> {{auth()->user()->pgyear}} </p>
                                    <strong class="text-dark border-bottom">Postgraduate Specialization?</strong>
                                    <p> {{auth()->user()->specialpg}} </p>
                                    <strong class="text-dark border-bottom">Postgraduate College?</strong>
                                    <p> {{auth()->user()->collegepg}} </p>
                                    @else
                                    <strong class="text-dark border-bottom">Postgraduate Program?</strong>
                                    <p> {{auth()->user()->ispg}} </p>
                                    <strong class="text-dark border-bottom">Postgraduate Specialization?</strong>
                                    <p> {{auth()->user()->specialpg}} </p>
                                    <strong class="text-dark border-bottom">Postgraduate College?</strong>
                                    <p> {{auth()->user()->collegepg}} </p>
                                    @endif
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="clearfix">
                                <div class="py-2 px-4">
                                    <img src="{{asset('frontendassets')}}/img/mix/team.png" class="ml-3" />
                                    <h2 class="h5 text-primary">Working</h2>
                                    @if(auth()->user()->isworking == 'yes')
                                    <strong class="text-dark border-bottom">Is Working?</strong>
                                    <p> {{auth()->user()->company}} </p>
                                    <strong class="text-dark border-bottom">Role</strong>
                                    <p> {{auth()->user()->role}} </p>
                                    <strong class="text-dark border-bottom">Interests?</strong>
                                    <p> {{auth()->user()->interest}} </p>
                                    @else
                                    <strong class="text-dark border-bottom">Is Working?</strong>
                                    <p> {{auth()->user()->isworking}} </p>
                                    
                                    @endif
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                     
@endif
                        </div>
                    </div>
                </div>
            </section>
@endsection