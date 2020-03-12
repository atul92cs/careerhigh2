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
                                        <a class="btn btn-theme" data-toggle="modal" href="{{route('availableworkshop.create')}}">Add {{$page_title}}</a>
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <table id="bootstrap-table" class="table">
                                      <thead>
                                            <th data-field="index" class="text-left" >Srno</th>
                                            <th data-field="id" class="text-left"  data-visible="false">ID</th>
                                            <th data-field="title"  data-sortable="true">Title</th>
                                            <th data-field="image" class="text-left"  data-visible="true" >Image</th>
                                            <th data-field="url"  data-sortable="true">Url</th>
                                            <th data-field="metahtml"  data-sortable="true">Metahtml</th>
                                            <th data-field="status"  data-sortable="true">Status</th>
                                            <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                        </thead>
                                        <tbody>
                                            @php  $i=0; @endphp @forelse($main as $m)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$m->id}}</td>
                                                <td>{{$m->title}}</td>
                                                <td ><img src="{{asset('storage')}}/{{$m->image}}" width="100%" ></td>
                                                <td>{{$m->url}}</td>
                                                <td>{!! $m->metahtml !!}</td>
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
            '<a rel="tooltip" title="Edit" class="btn btn-link btn-primary table-action edit mr-2" href="javascript:void(0)">',
            '<i class="fa fa-edit"></i>',
            '</a>', 
        ].join('');
    }
    
    $().ready(function() {
        window.operateEvents = {
            'click .edit': function(e, value, row, index) {
                info = JSON.stringify(row);
                window.location="{{url('admin/availableworkshop')}}/"+row.id+"/edit";
             },
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

