<!DOCTYPE html>
<html lang="en">

<head>
    <title>CareerHigh Administration</title>
    
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('adassets')}}/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('adassets')}}/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('adassets')}}/plugins/animation/css/animate.min.css">
    <!-- notification css -->
    <link rel="stylesheet" href="{{asset('adassets')}}/plugins/notification/css/notification.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('adassets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('adassets')}}/js/bootstrap-table.min.css">
     <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
     <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
     <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
    @yield('style')
</head>
    @yield('modal')
<body>
    <!-- [ Pre-loader ] start -->
<!--
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
-->
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="{{route('admin.home')}}" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Career High</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                  
                       <li data-username="Animations" class="nav-item"><a href="{{route('admin.home')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">Home</span></a></li>
                    
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">RoadMaps</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{route('category.index')}}" class="">Categories</a></li>
                            <li class=""><a href="{{route('roadmap.index')}}" class="">Roadmap</a></li>
                            <li class=""><a href="{{route('upcommingroadmap.index')}}" class="">Upcoming Roadmaps</a></li>
                            <li class=""><a href="{{route('advertisement.index')}}" class="">Advertisement</a></li>
                        </ul>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Blog</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{route('blog.create')}}" class="">Add</a></li>
                            <li class=""><a href="{{route('blog.index')}}" class="">All blog</a></li>
                        </ul>
                    </li>
                 <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Users</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{route('admin.allusers')}}" class="">All users</a></li>
                            <li class=""><a href="{{route('admin.allsubs')}}" class="">All Subscribers</a></li>
                            <li class=""><a href="{{route('admin.allcontact')}}" class="">All Enquiry</a></li>
                        </ul>
                    </li>
                 
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="{{route('admin.home')}}" class="b-brand">
               <div class="b-bg">
                   <i class="feather icon-trending-up"></i>
               </div>
               <span class="b-title">CareerHigh</span>
           </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>

            </ul>
            <ul class="navbar-nav ml-auto">
                {{-- 
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="{{asset('adassets')}}/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="{{asset('adassets')}}/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="{{asset('adassets')}}/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                --}}
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{asset('adassets')}}/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>Administrator</span>
                                
                               
                            </div>
                             
                            <ul class="pro-body">
                                <li><a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="feather icon-settings"></i> Logout</a> <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                              {{--  <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>--}}
                            </ul>
                            
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <section class="header-chat">
        <div class="h-list-header">
            <h6>Josephin Doe</h6>
            <a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
        </div>
        <div class="h-list-body">
            <div class="main-chat-cont scroll-div">
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="{{asset('adassets')}}/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">hello Datta! Will you tell me something</p>
                                <p class="chat-cont">about yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="{{asset('adassets')}}/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you help me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-list-footer">
            <div class="input-group">
                <input type="file" class="chat-attach" style="display:none">
                <a href="#!" class="input-group-prepend btn btn-success btn-attach">
                    <i class="feather icon-paperclip"></i>
                </a>
                <input type="text" name="h-chat-text" class="form-control h-send-chat" placeholder="Write hear . . ">
                <button type="submit" class="input-group-append btn-send btn btn-primary">
                    <i class="feather icon-message-circle"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- [ chat message ] end -->

    @yield('content')


    <script src="{{asset('adassets')}}/js/vendor-all.min.js"></script>
	<script src="{{asset('adassets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="{{asset('adassets')}}/js/pcoded.min.js"></script>
    <!-- amchart js -->
    <script src="{{asset('adassets')}}/plugins/amchart/js/amcharts.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/gauge.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/serial.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/light.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/pie.min.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/ammap.min.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/usaLow.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/radar.js"></script>
    <script src="{{asset('adassets')}}/plugins/amchart/js/worldLow.js"></script>
    <script  src="{{asset('adassets')}}/js/bootstrap-table.min.js"></script>
    <!-- notification Js -->
<!--    <script src="{{asset('adassets')}}/plugins/notification/js/bootstrap-growl.min.js"></script>-->
    
<!--    <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>-->
    <!-- dashboard-custom js -->
<!--    <script src="{{asset('adassets')}}/js/pages/dashboard-custom.js"></script>-->
    <!-- Ckeditor js -->
<!--    <script src="{{asset('ckeditor5/build/ckeditor.js')}}"></script>-->
     <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <script type="text/javascript">
         var editor;
        $(window).on('load', function() {
            // classic editor
           

//ClassicEditor
//    .create( document.querySelector( '#classic-editor' ) )
//    .then( newEditor => {
//        editor = newEditor;
//    } )
//    .catch( error => {
//        console.error( error );
//    } );
            
            
        });
    </script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
    @include('vendor.lara-izitoast.toast')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error: function (x, status, error) {
                if (x.status == 401) {
                    iziToast.error({
                        color: 'Red',
                        position: 'topRight',
                        icon: 'icon-circle-check',
                        title: 'Sorry!',
                        message: 'your session has expired. Please login again to continue',
                    });
                    //                izitoast.warning(", ");
                    window.location.reload();
                }
                else {
                    //                alert("An error occurred: " + status + "nError: " + error);
                }
            },
            statusCode: {
                422: function(data) {
//                    console.log(data.responseJSON);
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors['errors'], function (key, value) {
                        iziToast.error({
                            position: 'topRight',
                            title: key,
                            message: value,
                        });
                    });
                },
            },
            cache: false,
            contentType: false,
            processData: false,
            
        });
    </script>
    @yield('script')
    
    
<!--   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

    
    
    </body>
    
</html>
