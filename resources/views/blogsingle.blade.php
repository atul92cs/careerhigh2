@extends('layouts.user')
@section('head')
 {{$blog->metahtml}}
@endsection
@section('content')
        <main class="main-content">
            

            <section id="read-all" class="section" style="padding-top:0rem;padding-bottom:2rem;">
                <div class="">
                    <div class="row justify-content-center">

                        <div class="col-md-10 col-lg-8 text-center mt-6 mb-6">
                            <h1 class="mb-4">{{$blog->title}}</h1>
                            
                            <div class="text-center">
                                <small class="text-muted mr-3">{{Carbon\Carbon::parse($blog->created_at)->diffforhumans()}} - By {{$blog->author}}</small>

                            </div>
                        </div>

                        <div class="col-lg-10 mb-6 text-center">

                            <img class="img-fluid rounded shadow-1" src="{{asset('storage')}}/{{$blog->cover_image}}" style="width:50%;">
                        </div>

                        <div class="col-md-10 col-lg-8">
                            {!! $blog->description !!}
                        </div>

                      
                        <div class="col-md-10 col-lg-8 pt-1" id="comments" style="border-top:1px solid #c0c0c0;">
                            <ul class="media-list m-0 p-0">
                                
                                <h3 class="h4 mb-3 mt-3">Comment Section</h3>
                                    @forelse($blog->comment as $cc)
                                
                                    <li class="media mt-5">
                                        <a href="#">
                                             @if($cc->user->image) <img class="avatar mr-3 rounded-pill" src="{{asset('storage')}}/{{$cc->user->image}}">
                                            @else
                                            <img class="avatar mr-3 rounded-pill" src="{{asset('frontendassets')}}/img/avatar/avatar1.jpg">
                                            @endif
                                        </a>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0">{{$cc->user->name}} </h4>
          
                                            
                                            @if(auth()->guard('admin')->check())
                                            
                                           
         <button type="button" class="btn btn-xs btn-danger ss btn-delcomment"  data-id="{{$cc->id}}" style="padding: 0.2rem 0.6rem;">
            <i class="fa fa-times"></i> remove
        </button>
        
        @endif
                                            <div class="small text-muted mb-2">{{Carbon\Carbon::parse($cc->created_at)->diffForHumans()}}</div>
                                            <p class="mb-1">
                                                {{$cc->title}}
                                            </p>

                                           
                                        </div>
                                    </li>
                                    @empty
                                    <div class="text-center">
                                    <img src="{{asset('frontendassets')}}/img/sleepy.png" class="img-responsive img-fluid" style="width:10%;" />
                                    <h6> No Comments</h6>
                                    </div>
                                    
                                    @endforelse
                            </ul>
                        </div>

                        <div class="col-md-10 col-lg-8">

                            <div class="clearfix mt-8 mb-4 add-comment-wrap">
                                <h3 class="h4 mb-3">
                                    Leave a comment
                                </h3>

                                <br />

                               <form id="comment" action="#" method="post">
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                
                                                <textarea maxlength="5000" rows="7" placeholder="Comment" class="form-control" name="comment" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button name="submit" type="submit" id="Button1" class="btn btn-primary transition-hover">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

  @endsection


@section('script')
<script>




$('form#comment').submit(function(e){
   $('#Button1').attr('disabled', 'disabled');
    e.preventDefault();    
        var formData = new FormData(this);
        formData.append('id',{{$blog->id}}) ;
        $.ajax({ 
            url: "{{route('blog.comment')}}",
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
//                if(data.count){
//                  $('#nooflike').html(data.count);  
//                }
//                
                $('#Button1').attr('disabled', 'disabled');
                
                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
});
   

       @if(auth()->guard('admin')->check())
     

$('.btn-delcomment').click(function(e){
    
    
    
    e.preventDefault();    
        var formData = new FormData();
        formData.append('id',$(this).data('id')) ;
        $.ajax({ 
            url: "{{route('roadmap.delcomment')}}",
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
                
                
                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
    
});


        @endif


</script>


@endsection