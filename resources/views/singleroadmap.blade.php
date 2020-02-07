@if(auth::check())
@php 
$like=App\Roadmaplike::where('user_id',auth()->user()->id)->where('roadmap_id',$roadmap->id)->where('title','Roadmap')->first();
$book=App\Userbookmark::where('user_id',auth()->user()->id)->where('roadmap_id',$roadmap->id)->first();
@endphp
@else
@php 
$like=false;
$book=false;
@endphp
@endif

@extends('layouts.user')
@section('head')

 {!! $roadmap->metahtml !!}
@endsection



@section('content')


        <main class="main-content">
            <section id="read-all" class="section pt-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="clearfix">
                                <div class="text-center">
                                <img class="img-fluid rounded shadow-1" src="{{asset('storage')}}/{{$roadmap->cover_image}}" style="width:100%;">

                                    </div>
                                
                                <h1 class="h4 pt-5 font-weight-medium">
                                   {{$roadmap->title}}
                                </h1>
                                
                                <ul class="list-unstyled list-inline h4 small mb-5 font-weight-normal">
                                    <li class="list-inline-item border-right pr-2 text-light">
                                        <button type="button" class="btn btn-xs btn-facebook ss " id="btn-like" style="padding: 0.2rem 0.6rem;">
                                           @if(!$like) <i class="fa fa-thumbs-up"></i> Like @else Liked @endif
                                        </button>
                                    </li>
                                    <li class="list-inline-item border-right pr-2 text-light">
                                        <button type="button" class="btn btn-xs btn-twitter ss1 " id="btn-bookmark" style="padding: 0.2rem 0.6rem;">
                                           @if(!$book) <i class="fa fa-bookmark" aria-hidden="true"></i> Bookmark @else Bookmarked @endif
                                        </button>
                                    </li>
                                    
                                    <li class="list-inline-item border-right pr-2 text-light">
                                        <a class="text-primary anim-link-2 anim-link-2-primary small text-uppercase nlikes" href="#" data-toggle="modal" data-target="#modal-login-1"><span id="nooflike">{{$roadmap->like->count()}}</span> People like this</a>
                                    </li>
                                    
                                    <div class="modal fade" id="modal-login-1" tabindex="-1" role="dialog">
        <div class="modal-dialog" style="max-width:400px;" role="document">
            <div class="modal-content">
                <div class="modal-body px-5 py-6">
                    <button type="button" class="close mnt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="likemodal"></div>
                </div>
            </div>
        </div>
    </div>
                                    <li class="list-inline-item border-right pr-2 text-light">
                                        {{Carbon\Carbon::parse($roadmap->created_at)->diffForHumans()}}
                                    </li>
                                    <li class="list-inline-item border-right pr-2 text-light">In <a href="{{route($roadmap->category->url)}}" class="underline m-link-muted" tabindex="0">{{$roadmap->category->title}}</a> </li>
                                    <li class="list-inline-item"><a href="#comments" class=" m-link-muted">{{$roadmap->comment->count()}} Comments</a></li>
                                </ul>
                            </div>

                            
                            {!! $roadmap->description !!}
                                                      @if ($roadmap->video)
                              <div class="d-inline-block mb-2">
                                    <div class="media align-items-center text-left">
                                        <div class="mr-2">
                                            <a class="btn btn-pill btn-sleek-primary" href="{{$roadmap->video}}" data-provide="lightbox">
                                                <i class="fa fa-play fs-12" style="margin-left: .15rem;"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a class="mb-0 text-default" href="{{$roadmap->video}}" data-provide="lightbox">Watch video related to the roadmap</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <br>
                            
                            @if($roadmap->category->roadmap->where('status',1)->where('id','!=',$roadmap->id)->count())
                            <div class="clearfix mb-9">
                                <h3 class="h5 mb-3">Related Articles</h3>
                                <div data-provide="slider" data-slides-to-show="2" data-dots="true">
                                    @foreach($roadmap->category->roadmap->where('status',1)->where('id','!=',$roadmap->id) as $rrr)
                                    <div class="p-2" onclick="window.location='{{route($rrr->category->url.'.'.$rrr->url)}}'">
                                        <img class="img-fluid rounded" src="{{asset('storage')}}/{{$rrr->cover_image}}" style="width:300px;height:150px;">
                                        <div class="media p-2">
                                            <div class="media-body fs-13">
                                                <div class="text-muted mb-2 mt-2"> <i class="icon-bubble-conversation-2 mr-1"></i>{{$roadmap->category->title}} </div>
                                                <h3 class="card-title h5">
                                                    <a class="text-dark anim-link-2" href="{{route($rrr->category->url.'.'.$rrr->url)}}">{{$rrr->title}}</a>
                                                </h3>
                                                <div class="d-flex float-left">
                                                    <div>
                                                        <span class="text-muted">{{Carbon\Carbon::parse($rrr->created_at)->diffforhumans()}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            @endif

                            <div id="comments" class="clearfix mb-9 pt-9" style="border-top:1px solid #c0c0c0;">
                                <h3 class="h4 mb-3">Comments</h3>
                                <ul class="media-list m-0 p-0">
                                    @forelse($roadmap->comment as $cc)
                                    <li class="media mt-5">
                                        <a href="#">
                                           @if($cc->user->image) <img class="avatar mr-3 rounded-pill" src="{{asset('storage')}}/{{$cc->user->image}}">
                                            @else
                                            <img class="avatar mr-3 rounded-pill" src="{{asset('frontendassets')}}/img/avatar/avatar1.jpg">
                                            @endif
                                        </a>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0">{{$cc->user->name}} </h4>
                                            
                                            <div class="small text-muted mb-2">{{Carbon\Carbon::parse($cc->created_at)->diffForHumans()}}</div>
                                            <p class="mb-1">
                                                {{$cc->title}}
                                            </p>
                                            @if(auth()->guard('admin')->check())
                                                 <a class="btn-xs btn btn-primary anim-link-2 small btnrcmp" data-id="{{$cc->id}}"  href="#" data-toggle="modal" data-target="#modalrr" style="padding: 0.2rem 0.6rem;">Reply</a>
                                            
         <button type="button" class="btn btn-xs btn-danger ss btn-delcomment"  data-id="{{$cc->id}}" style="padding: 0.2rem 0.6rem;">
            <i class="fa fa-times" aria-hidden="true"></i> remove
        </button>
                                       
        
        @endif
                                            @foreach($cc->reply as $r)
                                            <div class="media mt-5">
                                                <a href="#">
                                                    <img class="avatar mr-3 rounded-pill" src="{{asset('frontendassets')}}/img/admin-ui.png">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="h6 mb-1">Admin<span class="small ml-2 text-muted">{{Carbon\Carbon::parse($r->created_at)->diffForHumans()}}</span></h4>
                                                    <p class="mb-1">
                                                        {{$r->comment}}
                                                    </p>
                                                     @if(auth()->guard('admin')->check())
                                                 
                                            
         <button type="button" class="btn btn-xs btn-danger ss commentreplydel"  data-id="{{$r->id}}" style="padding: 0.2rem 0.6rem;">
            <i class="fa fa-times" aria-hidden="true"></i> remove
        </button>
                                       
        
        @endif
<!--                                                    <a class="text-primary anim-link-2 small" href="#">Reply</a>-->
                                                </div>
                                            </div>
                                            @endforeach

                                           
                                        </div>
                                    </li>
                                    @empty
                                    <div class="text-center">
                                    <img src="{{asset('frontendassets')}}/img/sleepy.png" class="img-responsive img-fluid" />
                                    <h6> No Comments</h6>
                                    </div>
                                    
                                    @endforelse
<!--
                                    <li class="media mt-5">
                                        <a href="#">
                                            <img class="avatar mr-3 rounded-pill" src="{{asset('frontendassets')}}/img/avatar/avatar2.jpg">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0">Jhon Doe </h4>
                                            <div class="small text-muted mb-2">5 months ago</div>
                                            <p class="mb-1">
                                                Cras sit amet nibh libero Nulla vel metus vestibulum in vulputate at, welcome Mauris mattis tempus viverra turpis.
                                            </p>
                                        </div>
                                    </li>
-->
                                </ul>
                            </div>

                            <div class="clearfix pt-7 mb-3 mb-lg-0">
                                <h3 class="h4 mb-5">Leave a comment</h3>

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

                        <div class="col-lg-4">
                            
                             @if (App\Advertisement::whereStatus(1)->first())
                @php $bb =App\Advertisement::whereStatus(1)->first(); @endphp
                            <div class="mb-5">
                                <h3 class="mt-3 mb-3 text-center">Advertisment</h3>
                                                        <div class="list-wrapper mt-2">
                                <div class="grid-item type-list type-list-box">
                                    

                                    <div class="type-list__items ui-list">
                                        <figure class="ui-list__items" style="padding-top:100%">
                                            <div class="card bookmarkable mx-auto" style="width:335px;height:335px;">
                                                
                                                <img src="{{asset('storage')}}/{{$bb->cover_image}}" alt="Financial Advise">
                                                
                                            </div>
                                        </figure>
                                        <p class="text-center">{{$bb->title}}</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                              @endif
                            
                            
                            <div class="mb-4">
                                
                                <div class="px-6 py-7 rounded text-white custom-section-4">
                                    <h3 class="h5 mb-4">Subscribe to the best creative feed.</h3>
                                    <form class="input-round" novalidate="novalidate" id="add" method="post" action="#">
                                        <div class="form-group input-group bg-white shadow-4">
                                            <input type="email" name="email" class="form-control form-control-sm height-inherit pl-4" placeholder="Enter your email">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">Join</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="small">Don't worry, we don't <a class="m-link-light" href="#">spam</a> </p>
                                </div>
                                   
                            </div>
                            
                            <div class="mb-4">
                                
                                <div class="px-6 py-7 rounded text-white custom-section-4" style="background: linear-gradient(to right, #ad5389, #3c1053);">
                                    <div class="text-center">
                                    <i class="fas fa-chalkboard-teacher fa-5x" style="color:#ffffff;"></i> 
                                        </div>
                                    <h3 class="fs-16 mb-4" ><a href="https://docs.google.com/forms/d/1xZknBfZut4jJB9N3DSJBHRwgIZgbrvmDsSbVRUyrwQA/edit?ts=5ca3246d" target="_blank" class="text-white" style="color:#CFD8DC;">Be part of CareerHigh by providing roadmaps in the field of your expertise. Join us <i class="fas fa-chevron-right"></i></a></h3>
                                    
                                </div>
                                   
                            </div>
                            


                            @php 
                            
                            $nn = App\Roadmap::withCount('view')->where('status',1)->get();
                           $dt= $nn->sortByDesc('view_count')->slice(0, 3); 
                            
                            
                            @endphp
                            @if($dt->count())
                           
                            <div class="mb-9">
                                <h3 class="h5 mb-4 text-primary">Trending Roadmaps</h3>
                                <div class="clearfix">
                                     @foreach($dt as $a)
                                    <div class="media mb-4" onclick="window.location='{{route($a->category->url.'.'.$a->url)}}'">
                                        <div class="w-60px mr-3">
                                            <img class="rounded-pill" src="{{asset('storage')}}/{{$a->cover_image}}" style="width: 50px;height: 50px;" />
                                        </div>
                                        <div class="media-body">
                                            <a class="mt-0 mb-2 text-dark anim-link-2 clearfix" href="{{route($a->category->url.'.'.$a->url)}}">{{$a->title}}</a>
                                            <span class="time small text-muted">{{Carbon\Carbon::parse($a->created_at)->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                    @endforeach 
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            

        </main>

 @if(auth()->guard('admin')->check()) <div class="modal fade" id="modalrr" tabindex="-1" role="dialog">
 <div class="modal-dialog"  style="max-width:400px;" role="document">
            <div class="modal-content">
                <div class="modal-body px-5 py-6">
                    <button type="button" class="close mnt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                   <form id="commentr" action="#" method="post">
                                    <input name="id" type="hidden" id="rcid" >
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Comment <span class="required">*</span></label>
                                                <textarea maxlength="5000" rows="7" placeholder="Comment" class="form-control" name="comment" id="comment2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button name="submit" type="submit" id="Button2" class="btn btn-primary transition-hover">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                </div>
            </div>
      </div>  </div> 
   @endif
@endsection


@section('script')
<script>
@if(!$like)
$('#btn-like').click(function(e){
   
    e.preventDefault();    
        var formData = new FormData();
        formData.append('id',{{$roadmap->id}}) ;
        $.ajax({ 
            url: "{{route('roadmap.like')}}",
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
                $('#btn-like').html('Liked');
                if(data.count){
                  $('#nooflike').html(data.count);  
                }
                
                $('.ss').removeAttr('id');
                
//                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
});
   
@endif
@if(!$book)
$('#btn-bookmark').click(function(e){
   
    e.preventDefault();    
        var formData = new FormData();
        formData.append('id',{{$roadmap->id}}) ;
        $.ajax({ 
            url: "{{route('roadmap.bookmark')}}",
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
                $('#btn-bookmark').html('Bookmarked');
//                if(data.count){
//                  $('#nooflike').html(data.count);  
//                }
                getlike(id);
                
                $('.ss1').removeAttr('id');
                getlike();
                
//                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
    
});
   
@endif

$('.nlikes').click(function(){
    getlike();
});
    



function getlike(){
        var formData = new FormData();
        formData.append('id',{{$roadmap->id}}) ;
        $.ajax({ 
            url: "{{route('roadmap.like2')}}",
            type: 'post',
            data: formData,
            
            success: function (data) {
                
                
                $('#likemodal').html(data);
                
//                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
    
    
}


$('form#comment').submit(function(e){
   $('#Button1').attr('disabled', 'disabled');
    e.preventDefault();    
        var formData = new FormData(this);
        formData.append('id',{{$roadmap->id}}) ;
        $.ajax({ 
            url: "{{route('roadmap.comment')}}",
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
                
//                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
});
   

    @if(auth()->guard('admin')->check())
        $('.btnrcmp').click(function(){
    var id=$(this).data('id');
    $('#rcid').val(id);
});
        
        $('form#commentr').submit(function(e){
   $('#Button2').attr('disabled', 'disabled');
    e.preventDefault();    
        var formData = new FormData(this);
//        formData.append('id',{{$roadmap->id}}) ;
        $.ajax({ 
            url: "{{route('roadmap.commentreply')}}",
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
                $('#Button2').attr('disabled', 'disabled');
                
//                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
});
        
     

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
                
                
//                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
    
});
$('.commentreplydel').click(function(e){
    
    
    
    e.preventDefault();    
        var formData = new FormData();
        formData.append('id',$(this).data('id')) ;
        $.ajax({ 
            url: "{{route('roadmap.commentreplydel')}}",
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
                
                
//                setTimeout(function(){  window.location.reload(); }, 1000); 
            },
            
        });
    
});


        @endif


</script>


@endsection

        <!--Footer-Wrap-->
       
        <!--End Footer-Wrap-->
  