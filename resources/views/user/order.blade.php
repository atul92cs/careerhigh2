@extends('layouts.footer')
@section('style')


  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>


@endsection
@section('content')
<link rel='stylesheet' type='text/css' href="{{asset('video')}}/style.css" />
  <section class="gradient-half-primary-body-v1 z-index-1 pt-8 pb-5">
                <div class="container m-gab-2 z-index-1">
                    <div class="row align-items-center text-center">
                        <div class="col-md-12">
                            <div class="clearfix mt-9"> 
                                <h2 class="text-white fw-100 h1">
                                    <span class="fw-600">Your Workshop Content</span>
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




            <section id="getStarted" class="section">
                <div class="container">

                    <ul class="nav nav-pills lavalamp justify-content-center" id="component-1" role="tablist">
                        @foreach($order->workshop->tabs as $index=>$tab) 
                        <li class="nav-item">
                            <a class="nav-link {{ $index==0 ? 'active':'' }}" id="{{$tab->title}}-tab" data-toggle="tab" href="#component-1-{{$tab->id}}"  role="tab" aria-controls="component-1-{{$tab->id}}" aria-selected="true">{{$tab->title}}</a>
                        </li>
                        @endforeach
                        
                    </ul>
                    <div class="tab-content mt-6" id="component-1-content">
                        @foreach($order->workshop->tabs as $index=>$tab) 
                        <div class="tab-pane fade {{ $index==0 ? 'show active':'' }}" id="component-1-{{$tab->id}}" role="tabpanel" aria-labelledby="component-1-{{$tab->id}}">
                            <section class="section " style=padding-top:0rem !important;>
                                <div class="container">
                                    <header class="section-header">
                                        <h2>{{$tab->title}}</h2>
                                    </header>
                                       @if($tab->video)
                                    <div class="py-4">
                                    <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered" data-setup='{"fluid": true}'
                                            controls preload="auto" width="640" height="264"
                                            data-setup='{"example_option":true}'>
                                            <source src="{{url('user/'.$tab->video)}}" type='video/mp4' />
                                        </video>
                                        </div>
                                    @endif
                                    @if($tab->image)
                                    <div class="text-center mb-4">
                                    <img src="{{url('user/'.$tab->image)}}" class="img-fluid img-responsive" style="width:70%;" />
                                        </div>
                                    @endif
                                     
                                    
                                    <div>{!!$tab->description!!}</div>
                                </div>
                            </section>
                        </div>
                        @endforeach
                    </div>



                </div>
            </section>


@endsection

@section('script')

<script>

</script>

<script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
@endsection
