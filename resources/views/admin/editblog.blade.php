@extends('layouts.admin')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="col-xl-12 col-md-12">
                            <div class="card bootstrap-table">
                                <form id="update" method="post" enctype="multipart/form-data" action="#">
                                    <input type="hidden" name="_method" value="put" >
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Create a {{$page_title}}</h4>
                                            <div class="form-group ">
                                                <label>Author</label>
                                                <input class="form-control lead-0" type="text" name="author" value="{{$roadmap->author}}" placeholder="Author">
                                            </div>
                                            <div class="form-group ">
                                                <label>Title</label>
                                                <input class="form-control lead-0" type="text" name="title" value="{{$roadmap->title}}" placeholder="Title">
                                            </div>
                                            
                                            <div class="form-group ">
                                                <label>Url</label>
                                                <input class="form-control lead-0" type="text" name="url" value="{{$roadmap->url}}" placeholder="Url">
                                            </div>
                                            <div class="form-group ">
                                                <label>Metahtml</label>
                                                <textarea class="form-control lead-0" type="text" name="metahtml" placeholder="Metahtml">{!! $roadmap->metahtml !!}</textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label>Image</label>
                                                <input class="form-control lead-0" type="file" name="cover_image"  placeholder="cover_image">
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <div class="switch d-inline m-r-10">
                                                    <input name="status" value="1" {{$roadmap->status==1?'checked':''}} type="checkbox" id="switch-2">
                                                    <label for="switch-2" class="cr"></label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label>Description</label>
                                                <textarea name="description" >{!! $roadmap->description !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-theme pull-right">Submit</button>
                                            <a class="btn btn-default" href="{{route('blog.index')}}" data-dismiss="modal" aria-label="Close">Close</a>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script>
     CKEDITOR.replace( 'description' );
    $("form#update").submit(function(e) {
        e.preventDefault();    
        var id =$('#id').val();
        var formData = new FormData(this);
//        formData.append('description',editor.getData()) ;
        formData.append('description',CKEDITOR.instances.description.getData()) ;
        $.ajax({
            url: "{{route('blog.update',$roadmap->id)}}",
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
                setTimeout(function(){  window.location= "{{route('blog.index')}}"; }, 1000); 
            },
        });
    });
</script>
@endsection

