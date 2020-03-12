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
                                <div class="card-body table-full-width">
                                    <div class="toolbar">
                                        <a class="btn btn-theme" data-toggle="modal" href="{{route('workshoptab.create')}}?workshop_id={{$main->id}}">Add {{$page_title}}</a>
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <table id="bootstrap-table" class="table">
                                      <thead>
                                            <th data-field="index" class="text-left" >Srno</th>                                     <th data-field="id" class="text-left"  data-visible="false">ID</th>
                                            <th data-field="workshop" class="text-left"  data-visible="true">Workshop</th>
                                            <th data-field="title" class="text-left"  data-visible="true">title</th>
                                            <th data-field="description" class="text-left"  data-visible="false">description</th>
                                            <th data-field="image" class="text-left"  data-visible="true">image</th>
                                            <th data-field="video" class="text-left"  data-visible="true">video</th>
                                            <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                        </thead>
                                        <tbody>
                                            @php  $i=0; @endphp @forelse($main->tabs as $m)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$m->id}}</td>
                                                <td>{{$m->workshop->title}}</td>
                                                <td>{{$m->title}}</td>
                                                <td>{{$m->description}}</td>
                                                <td ><img src="{{url('admin1/'.$m->image)}}" width="100%" ></td>
                                                <td><a href="{{url('admin1/'.$m->video)}}" target="_blank"> view </a></td>
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
            '<a rel="tooltip" title="Edit" class="btn btn-link btn-primary table-action edit mr-2" href="javascript:void(0)">',
            '<i class="fa fa-edit"></i>',
            '</a>',
//            '<a rel="tooltip" title="Add tabs" class="btn btn-link btn-primary table-action addtabs mr-2" href="javascript:void(0)">',
//            '<i class="fa fa-plus"></i>',
//            '</a>',
            '<a rel="tooltip" title="Deactivate" class="btn btn-link btn-danger table-action remove" href="javascript:void(0)">',
            '<i class="fa fa-edit" aria-hidden="true"></i>',
            '</a>' 
        ].join('');
    }
    
    $().ready(function() {
        window.operateEvents = {
            'click .edit': function(e, value, row, index) {
                info = JSON.stringify(row);
                window.location="{{url('admin/workshoptab')}}/"+row.id+"/edit?workshop_id={{$main->id}}";
             },
//            'click .addtabs': function(e, value, row, index) {
//                info = JSON.stringify(row);
//                window.location="{{url('admin/workshoptab')}}/"+row.id;
//             },
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
                    url: "{{url('admin/workshoptab')}}/"+(row.id)+"?workshop_id={{$main->id}}",
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


     @endsection

