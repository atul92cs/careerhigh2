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
                                <form id="add" method="post" enctype="multipart/form-data" action="#">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Create a {{$page_title}}</h4>
                                            <div class="form-group ">
                                                <label>Title</label>
                                                <input class="form-control lead-0" type="text" name="title" value="{{$workshoptab->title}}" placeholder="Title">
                                            </div>
                                            <div class="form-group ">
                                                <label>Image</label>
                                                <input class="form-control lead-0" type="file" name="image"  placeholder="Image">
                                            </div>
                                            <div class="form-group ">
                                                <label>Video</label>
                                                <input class="form-control lead-0" type="file" name="video"  placeholder="Image">
                                            </div>
                                            <div class="form-group ">
                                                <label>Description</label>
                                                <textarea name="description"  >{!! $workshoptab->description  !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-theme pull-right">Submit</button>
                                            <a class="btn btn-default" type="button"  aria-label="Close" href="{{route('workshoptab.show',$workshop->id)}}">Close</a>
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
    $("form#add").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
        formData.append('_method','put') ;
        formData.append('workshop_id','{{$workshop->id}}') ;
        formData.append('description',CKEDITOR.instances.description.getData()) ;
        $.ajax({ 
            url: "{{route('workshoptab.update',$workshoptab->id)}}",
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
               setTimeout(function(){  window.location="{{route('workshoptab.show',$workshop->id)}}"; }, 1000); 
            },
            
        });
    });
</script>

@endsection

