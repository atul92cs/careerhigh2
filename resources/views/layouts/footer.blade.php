<!DOCTYPE html>
<html lang="en" class="sticky-header-reveal">
<head>
    <meta charset="utf-8">
    <title>CareerHigh</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('frontendassets')}}/img/favicon.png" />
    <meta name="description" content="Master - Responsive HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    @yield('head')
    <!-- Libs CSS -->
    <link href="{{asset('frontendassets')}}/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/font-awesome/css/all.min.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/font-awesome/css/fontawesome.min.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/streamline-icon/css/streamline-icon.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/css/header.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/css/style.css" rel="stylesheet" />
    
    <link href="{{asset('frontendassets')}}/css/prism.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/css/utilities.css" rel="stylesheet" />

    <!-- Skin -->
    <link rel="stylesheet" href="{{asset('frontendassets')}}/css/skin/default.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontendassets')}}/css/custom.css">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
     <!-- CSS file -->
    <link rel="stylesheet" href="{{ asset('easyautocomplete') }}/easy-autocomplete.min.css">

    <!-- Additional CSS Themes file - not required-->
    <link rel="stylesheet" href="{{ asset('easyautocomplete') }}/easy-autocomplete.themes.min.css">
</head>
<style>
      .moblongs{
        height:300px;
    }
    @media only screen and (max-width: 992px){
        .moblongs{
        height:500px;
    }
    }
    .parent{
        height: auto;
    }
    .easy-autocomplete{
        width: 85% !important;
    }
    
    .dropdown-item{
            white-space: inherit !important;
    }
    </style>
<body>

    <div class="wrapper">
        <!--Header-->
        <header id="header" class="header-transparent header-effect-reveal" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 150, 'stickySetTop': '-52px'}">
            <div class="header-body moblongs" style="height:auto !important;">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo header-logo-sticky-change" style="width: 140px;">
                                    <a href="{{route('welcome')}}">
                                        <img class="header-logo-non-sticky o-0" alt="Vertex" width="140" height="35" data-sticky-width="100" data-sticky-height="25" data-sticky-top="27" src="{{asset('frontendassets')}}/img/logo-white.png">
                                        <img class="header-logo-sticky o-0" alt="Vertex" width="140" height="35" data-sticky-width="100" data-sticky-height="25" data-sticky-top="27" src="{{asset('frontendassets')}}/img/logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row pt-3">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
<!--
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link text-white o-7 pl-0 m-list--link" href="#"><i class="icon-mail-2 fs-15 mr-1"></i> support@domain.com </a>
                                        </li>
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <span class="ws-nowrap text-white o-7 m-list--link fs-15"><i class="icon-headphone"></i> +45 3212 5680</span>
                                        </li>
-->
                                        <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                            <div class="social social-light text-center">
                                                <a class="social-facebook m-0 transition-hover" href="https://www.facebook.com/CareerHighSuccess/" target="_blank"><i class="fab fa-facebook"></i></a>
                                                <a class="social-twitter m-0 transition-hover" href="https://twitter.com/CareerHigh21" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header-nav-features sc">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon text-white-50"></i></a>
                                        <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                            <form class="input-round" role="search"  id="searchh" action="#" method="get">
                                                <div class="simple-search input-group">
                                                    <input class="form-control form-control-sm" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                    <span class="input-group-append">
                                                        <button class="btn btn-white text-primary btn-sm" type="submit">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-row">
                                <div class="header-nav header-nav-links header-nav-light-text order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle active" href="{{route('allcategory')}}" >
                                                        Roadmaps
                                                    </a>
                                                    
                                                    <ul class="dropdown-menu" style="border-radius: 8px !important;box-shadow: 1px 1px 1.1125rem #ffffff;padding:0px !important;">
                                                        @foreach(App\Category::where('status',1)->orderBy('shuffle_id')->get() as $c)
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item dropdown-toggle" href="{{route($c->url)}}"><i class="fa fa-hashtag" aria-hidden="true"></i> {{$c->title}}</a>
                                                            @if($c->roadmap->count()!=0)
                                                            <ul class="dropdown-menu" style="border-radius: 8px !important;box-shadow: 1px 1px 1.1125rem #ffffff;">
                                                                @forelse($c->roadmap as $cc)
                                                                <li><a class="dropdown-item" href="{{route($c->url.'.'.$cc->url)}}"><i class="fa fa-map-pin" aria-hidden="true"></i> {{$cc->title}}</a></li>
                                                                @empty
                                                                
                                                                @endforelse
                                                                
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endforeach
                                                        </ul>
                                                    
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{route('blog')}}">
                                                        Blogs
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    @guest
                                    <a href="{{route('login')}}" class="btn btn-outline-dark header-item-non-sticky btn-sm mb-0 ml-3">Login</a>
                                    <a href="{{route('login')}}" class="btn btn-outline-light header-item-sticky btn-sm mb-0 ml-3">Login</a>
                                    @else
                                    
                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-lg-2">
                                    <div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pr-2 signin" id="headerAccount">
                                        <a href="#" class="header-nav-features-toggle text-info" style="border:2px solid #17a2b8;padding: 2px 10px;border-radius: 6px;">
                                             {{ Auth::user()->name }}
                                        </a>
                                        <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown" style="height:150px;border-radius:8px;box-shadow:1px 1px 1.1125rem #818181;margin-left:60px;margin-top: 35px;padding: 10px;min-width: 200px;">
                                            <div class="signin-form">
                                                <ul class="" style="list-style-type: none;margin-left: -40px;font-size: 16px;">
                                              
                                                  
                                                        <li><a class="dropdown-item" href="{{route('user.bookmarks')}}"><i class="fa fa-bookmark" aria-hidden="true"></i> Bookmarks</a></li>
                                                        <li><a class="dropdown-item" href="{{route('user.activity')}}"><i class="fa fa-history" aria-hidden="true"></i> History</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Your Details</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-share" aria-hidden="true"></i> Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                                        </li>
                                                     
                                                    </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                    

                                    @endguest
                          
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav" style="background: transparent;
    border: 2px solid #818181;color:#818181;padding: 4px 10px;">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Header-->
    
        
         @yield('content')
        
        

        
        


<!-- FOOTER -->
<footer class="bg-primary">
    <div class="container pt-10 pb-7">
        <div class="row">
            <div class="col-sm-5">
                <img src="{{asset('frontendassets')}}/img/logo-white.png" class="mb-4" width="150">
                
                <p class="text-white">Our vision is to provide the right mentorship to college students and job freshers so that they develop the right industry skills leading to a great career.</p>
            </div>

             <div class="col-sm-4">
                <h3 class="h6 text-uppercase text-white mb-3">
                    About
                </h3>
                <ul class="list-unstyled mb-0">
                    <li><a class="m-list--link text-white-50" href="{{route('welcome')}}">Home</a></li>
                    <li><a class="m-list--link text-white-50" href="{{route('allcategory')}}">Roadmaps</a></li>
                    <li><a class="m-list--link text-white-50" href="{{route('blog')}}">Blogs</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3 class="h6 text-uppercase text-white mb-5">
                    Newsletter
                </h3>
                <form class="input-round" novalidate="novalidate" id="add" method="post" action="#">
                    <div class="form-group input-group bg-white shadow-4">
                        <input type="text" class="form-control height-inherit" placeholder="Email address" name="email">
                        <div class="input-group-append">
                            <button class="btn btn-light" type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>

                <div class="social social-light mt-3">
                    <a class="social-facebook m-0" href="https://www.facebook.com/CareerHighSuccess/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-twitter m-0" href="https://twitter.com/CareerHigh21" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="row pt-9">
            <div class="col-md-12">
                <p class="text-white-50"><span class="fs-17">©</span> <script>
              document.write(new Date().getFullYear())
            </script> <span class="text-white">CareerHigh</span>. All rights reserved.</p>
            </div>
            {{---
            <div class="col-md-8">
                <div class="clearfix text-right text-white-50">
                    <strong class="mr-4"><span class="text-white">8,997</span> Roadmaps</strong>
                    <strong class="mr-4"><span class="text-white">47,750</span> Workshops</strong>
                    <strong class="mr-4"><span class="text-white">120,874</span> Customers</strong>
                </div>
            </div>
            ---}}
        </div>
    </div>
</footer>
<!-- END FOOTER -->

  </div>

    <!-- Libs -->
    <script src="{{asset('frontendassets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/jquery/jquery-migrate.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/jquery/jquery.visible.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="{{asset('frontendassets')}}/js/cubeportfolio.init.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/slick-slider/slick.js"></script>
    <script src="{{asset('frontendassets')}}/js/prism.js"></script>

    <script src="{{asset('frontendassets')}}/js/other.js"></script>
    <script src="{{asset('frontendassets')}}/js/page.js"></script> 
    <script src="{{asset('frontendassets')}}/js/script.js"></script>

    <!-- Theme Custom -->
    <script src="{{asset('frontendassets')}}/js/custom.js"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
     <script src="{{ asset('easyautocomplete') }}/jquery.easy-autocomplete.min.js"></script>
    
    
    <script>
         var options = {
            
            data: [ @foreach(App\Roadmap::where('status',1)->get() as $a) { name: '{{$a->title}}',link:"{{route($a->category->url.'.'.$a->url)}}" }, @endforeach],
            getValue: "name",
            template: {
                type: "links",
                fields: {
                    link: "link"
                }
            },
            list: {
                maxNumberOfElements: 6,
                match: {
                    enabled: true
                }
            }
            
        };    
        
$("#headerSearch").easyAutocomplete(options);
        
    $("#searchh").submit(function(e) {
        e.preventDefault(); 
//                   alert(111);
      
                   
                   var href = $($('.eac-item a').first()).attr('href');
             console.log(href);  
                   if(href){
                    window.location = href;
                   }
                  
//        $('.eac-item a').first().click()
        
    });

         
    $("form#add").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
//        formData.append('description',editor.getData()) ;
        $.ajax({ 
            url: "{{route('subscribe.store')}}",
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
//                setTimeout(function(){  window.location="{{route('roadmap.index')}}"; }, 1000 ); 
            },
            
        });
    });

    
        
        
        
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
                      @if(auth()->guard('admin')->check())
                          message: 'You are not logged in as User . Please login as User to  continue',
                              @else
                        
                    
                        message: 'You are not logged in . Please login to continue',
                        @endif
                    });
                    //                izitoast.warning(", ");
//                    window.location.reload();
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
        

        $(window).on('scroll', function () {
    var scrollTop = $(window).scrollTop();
    if ($(window).width() <=992)   {    
        
        
    if (scrollTop > 50) {
//        console.log($(window).width())
        $('.moblongs').addClass('parent');
        $('.sc').hide();
    }
    else {
//        console.log($(window).width())
         $('.moblongs').removeClass('parent');
        $('.sc').show();
    }}
            else{
                $('.moblongs').removeClass('parent');
                $('.sc').show();
            }
});
    </script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dfca463a79cf5bf"></script>
    @include('vendor.lara-izitoast.toast')
    @yield('script')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112019606-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112019606-4');
</script>
</body>
</html>