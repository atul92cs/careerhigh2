@extends('layouts.admin')
@section('modal')
{{--<div class="modal fade" id="addmodal11" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="add" method="post" enctype="multipart/form-data" action="#">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create a {{$page_title}}</h4>
                        <div class="form-group ">
                            <label>Title</label>
                            <input class="form-control lead-0" type="text" name="title" placeholder="Title">
                        </div>
                        
                        <div class="form-group ">
                            <label>Image</label>
                            <input class="form-control lead-0" type="file" name="cover_image"  placeholder="cover_image">
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <div class="switch d-inline m-r-10">
                                <input name="status" value="1" type="checkbox" id="switch-2">
                                <label for="switch-2" class="cr"></label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-theme pull-right">Submit</button>
                        <button class="btn btn-default" type="button" data-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>--}}
<div class="modal fade" id="updatemodal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="update" method="post" enctype="multipart/form-data" action="#">
                <input type="hidden" name="_method" value="put" >
                <input type="hidden" name="id" value="" id="id" >
                <div class="card">
                    <div class="card-body" >
                        <h4 class="card-title">Update  {{$page_title}}</h4>
                        <div class="form-group ">
                            <label>Title</label>
                            <input class="form-control lead-0" type="text" name="title" id="title" placeholder="Title">
                        </div>
                        
                        <div class="form-group ">
                            <label>Image</label>
                            <input class="form-control lead-0" type="file" name="cover_image"  placeholder="cover_image">
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <div class="switch d-inline m-r-10">
                                <input name="status" value="1" type="checkbox" id="status">
                                <label for="status" class="cr"></label>
                            </div>
                            
                        </div>
                     </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-theme pull-right">Submit</button>
                        <button class="btn btn-default" type="button" data-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection

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
                                <div class="card-body table-full-width">
                                    <div class="toolbar">
                                        {{--<button class="btn btn-theme" data-toggle="modal" data-target="#addmodal11">Add {{$page_title}}</button>--}}
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <table id="bootstrap-table" class="table">
                                        <thead>
                                            <th data-field="index" class="text-left" >Srno</th>
                                            <th data-field="id" class="text-left"  data-visible="false">ID</th>
                                            <th data-field="cover_image" class="text-left"  data-visible="true" >Image</th>
                                            <th data-field="title"  data-sortable="true">Title</th>
                                            <th data-field="status"  data-sortable="true">Status</th>
                                            <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                        </thead>
                                        <tbody>
                                            @php  $i=0; @endphp @forelse($main as $m)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$m->id}}</td>
                                                <td ><img src="{{asset('storage')}}/{{$m->cover_image}}" width="50%" ></td>
                                                <td>{{$m->title}}</td>
                                                <td   data-status="{{$m->status}}" >{{ $m->status==1?'Active':'Inactive' }}</td>
                                                <td></td>
                                            </tr>
                                            @empty
                                            
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
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
<script type="text/javascript">
    var $table = $('#bootstrap-table');
    
    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" data-toggle="modal" data-target="#updatemodal"  title="Edit" class="btn btn-link btn-primary table-action edit mr-2" href="javascript:void(0)">',
            '<i class="fa fa-edit"></i>',
            '</a>',
//            '<a rel="tooltip" title="Deactivate" class="btn btn-link btn-danger table-action remove" href="javascript:void(0)">',
//            '<i class="fa fa-trash" aria-hidden="true"></i>',
//            '</a>' 
        ].join('');
    }
    
    $().ready(function() {
        window.operateEvents = {
            'click .edit': function(e, value, row, index) {
                info = JSON.stringify(row);
                $('#id').val(row.id);
                $('#title').val(row.title);
                if( row._status_data.status ==1 ){
                    $('#status').prop('checked',true);
                }else{
                    $('#status').prop('checked',false);
                }
                
                
                
            },
            'click .remove': function(e, value, row, index) {
                console.log(row);
                e.preventDefault();
//                var data = {
//                    id: row.id,
//                    _method: 'delete',
//                };
                 var formData = new FormData();
                formData.append('id',row.id)
                formData.append('_method','delete')
                
                $.ajax({
                    url: "{{url('admin/upcommingroadmap')}}/"+(row.id),
                    type: "post",
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
//                $table.bootstrapTable('remove', {
//                    field: 'id',
//                    values: [row.id]
//                });
            }
        };
        
        $table.bootstrapTable({
            toolbar: ".toolbar",
            clickToSelect: true,
//            showRefresh: true,
            search: true,
//            showToggle: true,
//            showColumns: true,
            pagination: false,
            searchAlign: 'right',
            pageSize: 8,
            clickToSelect: false,
            pageList: [8, 10, 25, 50, 100],
            
            formatShowingRows: function(pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function(pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });
        
        //activate the tooltips after the data table is initialized
        $('[rel="tooltip"]').tooltip();
        
        $(window).resize(function() {
            $table.bootstrapTable('resetView');
        });
        
        
    });
</script>
<script>
    $("form#update").submit(function(e) {
        e.preventDefault();    
        var id =$('#id').val();
        var formData = new FormData(this);
        $.ajax({
            url: "{{url('admin/upcommingroadmap')}}/"+id,
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
{{--<script>

 $("form#add").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
        $.ajax({ 
            url: "{{route('upcommingroadmap.store')}}",
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
</script>--}}

     @endsection

