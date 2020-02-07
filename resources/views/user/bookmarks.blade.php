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
                    <img src="{{asset('frontendassets')}}/img/sectionbg.png" alt="vertex">
                </div>
            </section>
    
            <section class="mt-4" id="getStarted">
                <div class="container">
                    <header class="section-header">
                        <h2>Your favourites are here</h2>
                    </header>

                   
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="uikit-example">
                                <table class="table table-striped mb-4">
                                     <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse(auth()->user()->bookmark as $a)
                                        <tr>
                                           <th scope="row">{{-- $a->count() --}} {{Carbon\Carbon::parse($a->created_at)->format('d-M-Y')}}</th>
                                            <td><a href="{{route($a->roadmap->category->url.'.'.$a->roadmap->url)}}">{{$a->roadmap->title}}</a></td>
                                            <td><a class="btn-remove btn btn-danger btn-xs"  data-id="{{$a->id}}" href="#">Remove</a></td>
                                        </tr>
                                        @empty
                                        <td colspan="5" class="text-center">
                                            <img src="{{asset('frontendassets')}}/img/clean.png" alt="">
                                            <h3>No Bookmarks found</h3>
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
@section('script')
<script>
$('.btn-remove').click(function(e){
   
    e.preventDefault();    
        var formData = new FormData();
        formData.append('id',$(this).data('id')) ;
        $.ajax({ 
            url: "{{route('remove.bookmark')}}",
            type: 'post',
            data: formData,
            
            success: function (data) {
                
                iziToast.success({
                    color: 'green',
                    position: 'topRight',
                    icon: 'icon-circle-check',
                    title: 'Success!',
                    message: data.msg,
                });
//                $('#btn-like').html('Liked');
//                $('#btn-bookmark').html('Bookmarked');
//                if(data.count){
//                  $('#nooflike').html(data.count);  
//                }
                
//                $('.ss1').removeAttr('id');
                
                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
});
    </script>
@endsection