@extends('layouts.admin')

@section('content')

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    
                    
                    
                                        <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to CareerHigh Dashboard</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ bitcoin-wallet section ] start-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card theme-bg bitcoin-wallet">
                                        <div class="card-block">
                                            <h5 class="text-white mb-2">Total Roadmaps</h5>
                                            <h2 class="text-white mb-2 f-w-300">{{App\Roadmap::whereStatus(1)->count()}}</h2>
                                            <span class="text-white d-block">Currently activated Roadmaps</span>
                                            <i class="fas fa-road f-70 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card theme-bg2 bitcoin-wallet">
                                        <div class="card-block">
                                            <h5 class="text-white mb-2">Total Blogs</h5>
                                            <h2 class="text-white mb-2 f-w-300">{{App\Blog::whereStatus(1)->count()}}</h2>
                                            <span class="text-white d-block">Currently activated Blogs</span>
                                            <i class="fas fa-align-center f-70 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-xl-4">
                                    <div class="card bg-c-blue bitcoin-wallet">
                                        <div class="card-block">
                                            <h5 class="text-white mb-2">Total Users</h5>
                                            <h2 class="text-white mb-2 f-w-300">{{App\User::count()}}</h2>
                                            <span class="text-white d-block">Currently running users</span>
                                            <i class="feather icon-users f-70 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ bitcoin-wallet section ] end-->
                                <!-- [ statistic chat ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection