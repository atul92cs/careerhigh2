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
                                            <th data-field="id" class="text-left"  data-visible="false">Email</th>
                                            <th data-field="id" class="text-left"  data-visible="false">Joined on</th>
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


@endsection

