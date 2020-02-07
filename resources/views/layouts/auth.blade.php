<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Careerhigh</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="{{asset('frontendassets')}}/img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

    <!-- Libs CSS -->
    <link href="{{asset('frontendassets')}}/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/font-awesome/css/all.min.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/font-awesome/css/fontawesome.min.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/streamline-icon/css/streamline-icon.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/css/header.css" rel="stylesheet" />
    <link href="{{asset('frontendassets')}}/css/style.css" rel="stylesheet" />
    
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
    .invalid-feedback {
     display: block; 
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}
    
    .easy-autocomplete{
        width: 85% !important;
    }
    
    
    </style>
<body>

    <div class="wrapper bg-light">
        <!--Header-->
        
        <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <!--<div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="../index.html">
                                        <img alt="Vertex" width="140" height="35" data-sticky-width="100" data-sticky-height="25" src="../assets/img/logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>-->
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                                                                
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{route('welcome')}}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle active" href="{{route('allcategory')}}" >
                                                        Roadmaps
                                                    </a>
                                                    <ul class="dropdown-menu" style="border-radius: 8px !important;box-shadow: 1px 1px 1.1125rem #ffffff;padding:0px !important;">
                                                        {{--
                                                        <div class="mx-auto mb-2 mbhide" style="background: #2380fb;border-radius: 4px;">
                                                            <div class="ml-5 mr-5">
                                                                <h6 class="text-dark fs-10 text-center" style="border-bottom:1px dashed #fff">Upcoming Roadmap</h6>
                                                                </div>
                                                            <div class="row ml-2">
                                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                                                <p class="text-white">Chemicals and Chemicals</p>
                                                                </div>
                                                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 "><img src="{{asset('frontendassets')}}/img/theory.png" class="img-responsive img-fluid" /></div>
                                                            </div>
                                                        </div>
                                                        --}}
                                                        @foreach(App\Category::where('status',1)->orderBy('shuffle_id')->get() as $c)
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item dropdown-toggle" href="{{route($c->url)}}"><i class="fa fa-hashtag" aria-hidden="true"></i> {{$c->title}}</a>
                                                            @if($c->roadmap->count()!=0)
                                                            <ul class="dropdown-menu" style="border-radius: 8px !important;box-shadow: 1px 1px 1.1125rem #ffffff;">
                                                                @foreach($c->roadmap as $cc)
                                                                <li><a class="dropdown-item" href="{{route($c->url.'.'.$cc->url)}}"><i class="fa fa-map-pin" aria-hidden="true"></i> {{$cc->title}}</a></li>
                                                                @endforeach
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
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-2 order-lg-3">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        {{--
                                        <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                        --}}
                                        <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                            <form class="input-round" role="search" id="searchh" action="#" method="get">
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
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Header-->
        <!--End Header-->

        <main class="main-content">

            
            @yield('content')
            
            
            
            
        </main>
    </div>
     

    <!-- Libs -->
    <script src="{{asset('frontendassets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/jquery/jquery-migrate.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/jquery/jquery.visible.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/slick-slider/slick.js"></script>
    <script src="{{asset('frontendassets')}}/js/prism.js"></script>
    <script src="{{asset('frontendassets')}}/vendor/svg-injector/svg-injector.min.js"></script>

    <script src="{{asset('frontendassets')}}/js/other.js"></script>
    <script src="{{asset('frontendassets')}}/js/page.js"></script> 
    <script src="{{asset('frontendassets')}}/js/script.js"></script>

    <!-- Theme Custom -->
    <script src="{{asset('frontendassets')}}/js/custom.js"></script>
     <script src="{{ asset('js/iziToast.js') }}"></script>
    <!-- JS file -->
    <script src="{{ asset('easyautocomplete') }}/jquery.easy-autocomplete.min.js"></script>
    @include('vendor.lara-izitoast.toast')
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
    </script>
  
</body>
</html>