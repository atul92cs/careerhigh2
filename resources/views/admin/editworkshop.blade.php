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
                                                <input class="form-control lead-0" type="text" name="title" value="{{$workshop->title}}" placeholder="Title">
                                            </div>
                                            <div class="form-group ">
                                                <label>Location</label>
                                                <input class="form-control lead-0" type="text" name="location" value="{{$workshop->location}}" placeholder="location">
                                            </div>
                                            <div class="form-group ">
                                                <label>Duration</label>
                                                <input class="form-control lead-0" type="text" name="duration" value="{{$workshop->duration}}" placeholder="duration">
                                            </div>
                                            
                                            <div class="form-group ">
                                                <label>Date From</label>
                                                <input class="form-control" value="{{$workshop->date}}" id="date" type="text" name="date1" placeholder="datetime">
                                            </div>
                                            <div class="form-group ">
                                                <label>Date To</label>
                                                <input class="form-control" value="{{$workshop->date2}}" id="date2" type="text" name="date2" placeholder="datetime">
                                            </div> 
                                            <div class="form-group ">
                                                <label>Time From</label>
                                                <input class="form-control" value="{{$workshop->time}}" id="time" type="text" name="time1" placeholder="datetime">
                                            </div>
                                            <div class="form-group ">
                                                <label>Time To</label>
                                                <input class="form-control" value="{{$workshop->time2}}" id="time2" type="text" name="time2" placeholder="datetime">
                                            </div>
                                            <div class="form-group ">
                                                <label>Price</label>
                                                <input class="form-control lead-0" type="text" name="price" value="{{$workshop->price}}" placeholder="price">
                                            </div>
                                            <div class="form-group ">
                                                <label>Booking Limit</label>
                                                <input class="form-control lead-0" type="text" name="subs_limit" value="{{$workshop->subs_limit}}" placeholder="subs_limit">
                                            </div>
                                            <div class="form-group ">
                                                <label>Domain Blocking</label>
                                                <input class="form-control lead-0" type="text" name="domain" value="{{$workshop->domain}}" placeholder="domain">
                                            </div>
                                            <div class="form-group ">
                                                <label>College</label>
                                                <input class="form-control lead-0" type="text" name="college" value="{{$workshop->college}}" placeholder="college">
                                            </div>
                                            
                                            
                                            <div class="form-group ">
                                                <label>Url</label>
                                                <input class="form-control lead-0" type="text" name="url" value="{{$workshop->url}}" placeholder="Url">
                                            </div>
                                            <div class="form-group ">
                                                <label>Metahtml</label>
                                                <textarea class="form-control lead-0" type="text" name="metahtml" value="{!! $workshop->metahtml !!}" placeholder="Metahtml"></textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label>Image</label>
                                                <input class="form-control lead-0" type="file" name="image"  placeholder="Image">
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <div class="switch d-inline m-r-10">
                                                    <input name="status" value="1" {{$workshop->status==1?'checked':''}} type="checkbox" id="switch-2">
                                                    <label for="switch-2" class="cr"></label>
                                                </div>
                                            </div>
                                            

                                            <div class="form-group ">
                                                <label>T&C</label>
                                                <textarea name="tcdesc"  >{!! $workshop->tcdesc  !!}</textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label>Description</label>
                                                <textarea name="description"  >{!! $workshop->description  !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-theme pull-right">Submit</button>
                                            <a class="btn btn-default" type="button"  aria-label="Close" href="{{route('workshop.index')}}">Close</a>
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
     $(document).ready(function() {
  $('#date2').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });

    $('#time2').bootstrapMaterialDatePicker({
        date: false,
        format: 'HH:mm'
    });
    
    
    });
    
     CKEDITOR.replace( 'tcdesc' );
     CKEDITOR.replace( 'description' );
    $("form#add").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
        formData.append('tcdesc',CKEDITOR.instances.tcdesc.getData()) ;
        formData.append('_method','put') ;
        formData.append('description',CKEDITOR.instances.description.getData()) ;
        $.ajax({ 
            url: "{{route('workshop.update',$workshop->id)}}",
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
                setTimeout(function(){  window.location="{{route('workshop.index')}}"; }, 1000); 
            },
            
        });
    });
</script>

@endsection

