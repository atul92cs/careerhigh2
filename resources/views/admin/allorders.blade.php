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
                                        <h3>All Order</h3>
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <table id="bootstrap-table" class="table table-responsive">
                                        <thead>
                                            <th data-field="index" class="text-left" >Srno</th>
                                            <th data-field="name" class="text-left"  data-visible="true">Name</th>
                                            <th data-field="email" class="text-left"  data-visible="true">Email</th>
                                            <th data-field="phone" class="text-left"  data-visible="true">Phone</th>
                                            <th data-field="wemail" class="text-left"  data-visible="true">Work Email</th>
                                            <th data-field="workshop" class="text-left"  data-visible="true">Workshop</th>
                                            <th data-field="placed" class="text-left"  data-visible="true">Placed on</th>
                                        </thead>
                                        <tbody>
                                            @php  $i=0; @endphp @forelse($main as $m)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$m->user->name}}</td>
                                                <td>{{$m->user->email}}</td>
                                                <td>{{$m->phone == 0 ? 'NA' : $m->phone}}</td>
                                                <td>{{$m->email_id}}</td>
                                                <td>{{$m->workshop->title}}</td>
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
    

</script>

@endsection

