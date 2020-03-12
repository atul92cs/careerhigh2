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
                                        <h3>All Subscribers</h3>
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <table id="bootstrap-table" class="table table-responsive">
                                        <thead>
                                            <th data-field="index" class="text-left" >Srno</th>
                                            <th data-field="email" class="text-left"  data-visible="true">Email</th>
                                            <th data-field="joined" class="text-left"  data-visible="true">Joined on</th>
                                        </thead>
                                        <tbody>
                                            @php  $i=0; @endphp @forelse($main as $m)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$m->email}}</td>
                                                <td>{{\Carbon\Carbon::parse($m->created_at)->format('F d, Y')}}</td>
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
<script>

    $(document).ready(function() {
    $('#bootstrap-table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel'
        ]
    } );
} );
    
    
    
//    var $table = $('#bootstrap-table');
//        
//        $table.bootstrapTable({
//            toolbar: ".toolbar",
//            clickToSelect: true,
////            showRefresh: true,
//            search: true,
////            showToggle: true,
////            showColumns: true,
//            pagination: false,
//            searchAlign: 'right',
//            pageSize: 8,
//            clickToSelect: false,
//            pageList: [8, 10, 25, 50, 100],
//            
//            formatShowingRows: function(pageFrom, pageTo, totalRows) {
//                //do nothing here, we don't want to show the text "showing x of y from..."
//            },
//            formatRecordsPerPage: function(pageNumber) {
//                return pageNumber + " rows visible";
//            },
//            icons: {
//                refresh: 'fa fa-refresh',
//                toggle: 'fa fa-th-list',
//                columns: 'fa fa-columns',
//                detailOpen: 'fa fa-plus-circle',
//                detailClose: 'fa fa-minus-circle'
//            }
//        });
//        
//        //activate the tooltips after the data table is initialized
//        $('[rel="tooltip"]').tooltip();
//        
//        $(window).resize(function() {
//            $table.bootstrapTable('resetView');
//        });
</script>

@endsection

