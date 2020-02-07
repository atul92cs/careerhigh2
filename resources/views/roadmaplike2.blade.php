<form class="input-line vertex-input">
    <h4 class="h3 font-weight-normal text-left" style="line-height: 0.4;">Total Likes</h4>
    <p class="text-left">people who recently liked it.</p>
    
    @foreach($roadmap->like as $l)
    <div class="text-left mb-2">
        <div class="d-inline-block mr-3">
            <div class="avatar">
                @if($l->user->image)
                <img class="img-fluid rounded-circle" src="{{asset('storage')}}/{{$l->user->image}}" alt="Avatar">
                @else
                <img class="img-fluid rounded-circle" src="{{asset('frontendassets')}}/img/avatar/a1.jpg" alt="Avatar">
                @endif
            </div>
        </div>
        <div class="d-inline-block">
            <small class="text-muted anim-link-2">By {{$l->user->name}}</small>
        </div>
        
        @if(auth()->guard('admin')->check())
        <button type="button" class="btn btn-xs btn-facebook ss text-right btn-unliked"  data-id="{{$l->id}}" style="padding: 0.2rem 0.6rem;
<!--        margin-left:35%;-->
        ">
            <i class="fa fa-thumbs-up"></i> remove
        </button>
        <script>
            
            $('.btn-unliked').click(function(e){
                
                
                
                e.preventDefault();    
                var formData = new FormData();
                formData.append('id',$(this).data('id')) ;
                $.ajax({ 
                    url: "{{route('roadmap.unlike')}}",
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

</script>
        @else
        <div class="" style="position: absolute;margin-left: 50%;margin-top: -35px;">
        <button type="button" class="btn btn-xs btn-facebook ss" id="btn-unlike" style="padding: 0.2rem 0.6rem;margin-left:20px !important;">
            <i class="fa fa-thumbs-up"></i> Liked
        </button>
        </div>
        
        
        @endif
        
    </div>
    @endforeach
    
</form>


