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
                                        <h3>All users</h3>
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <table id="bootstrap-table" class="table table-responsive">
                                        <thead>
                                            <th data-field="index" class="text-left" >Srno</th>
                                            <th data-field="name" class="text-left"  data-visible="true">Name</th>
                                            <th data-field="email" class="text-left"  data-visible="true">Email</th>
                                            <th data-field="phone" class="text-left"  data-visible="true">Phone</th>
                                            <th data-field="joined" class="text-left"  data-visible="true">Joined on</th>
                                            <th data-field="isug" class="text-left"  data-visible="true">is Undergraduate?</th>
                                            <th data-field="ugyear" class="text-left"  data-visible="true">Which year?</th>
                                            <th data-field="specialug" class="text-left"  data-visible="true">Undergraduate Specialisation</th>
                                            <th data-field="collegeug" class="text-left"  data-visible="true">Undergraduation College</th>
                                            <th data-field="ispg" class="text-left"  data-visible="true">Is Postgraduation?</th>
                                            <th data-field="pgyear" class="text-left"  data-visible="true">Which year?</th>
                                            <th data-field="specialpg" class="text-left"  data-visible="true">Postgraduation Specialisation</th>
                                            <th data-field="collegepg" class="text-left"  data-visible="true">Postgraduation College</th>
                                            <th data-field="isworking" class="text-left"  data-visible="true">Is Working?</th>
                                            <th data-field="company" class="text-left"  data-visible="true">Company Name</th>
                                            <th data-field="role" class="text-left"  data-visible="true">Role</th>
                                            <th data-field="interest" class="text-left"  data-visible="true">Interests</th>
                                        </thead>
                                        <tbody>
                                            @php  $i=0; @endphp @forelse($main as $m)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$m->name}}</td>
                                                <td>{{$m->email}}</td>
                                                <td>{{$m->phone == 0 ? 'NA' : $m->phone}}</td>
                                                <td>{{\Carbon\Carbon::parse($m->created_at)->format('F d, Y')}}</td>
                                                <td>{{$m->isug == 0 ? 'NA' : $m->isug}}</td>
                                                <td>{{$m->ugyear == 0 ? 'NA' : $m->ugyear}}</td>
                                                <td>{{$m->specialug == 0 ? 'NA' : $m->specialug}}</td>
                                                <td>{{$m->collegeug == 0 ? 'NA' : $m->collegeug}}</td>
                                                <td>{{$m->ispg == 0 ? 'NA' : $m->ispg}}</td>
                                                <td>{{$m->pgyear == 0 ? 'NA' : $m->pgyear}}</td>
                                                <td>{{$m->specialpg == 0 ? 'NA' : $m->specialpg}}</td>
                                                <td>{{$m->collegepg == 0 ? 'NA' : $m->collegepg}}</td>
                                                <td>{{$m->isworking == 0 ? 'NA' : $m->isworking}}</td>
                                                <td>{{$m->company == 0 ? 'NA' : $m->company}}</td>
                                                <td>{{$m->role == 0 ? 'NA' : $m->role}}</td>
                                                <td>{{$m->interest == 0 ? 'NA' : $m->interest}}</td>
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

