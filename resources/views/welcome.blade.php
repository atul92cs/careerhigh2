@extends('layouts.footer')

@section('content')
        <main class="main-content">
            <section data-scrim-top="9" class="bg-img m-gab-4-top m-gab-3-bottom" style="background-image:url({{asset('frontendassets')}}/img/hero/h18.jpeg);background-position: left;opacity: 0.9;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="clearfix pb-1 mt-3">
                               
                                <h2 class="text-white font-weight-bold fs-50">
                                    Build a better career 
                                </h2>
                                <h3 class="text-white fw-100">
                                Get that dream job you've been aiming for
                                </h3>
                                <h5 class="text-primary">
                                Trusted by over 35,000 students</h5>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oval-divider--bottom oval-divider--10"></div>
            </section>

               
            
            <section>
                <div class="container">
                    <div class="row m-gab-3">
                        <div class="col-md-5">
                            <h2>
                                Career Roadmap   <br />
                                for your <br />
                                Dream Jobs <br />
                            </h2>
                        </div>
                        <div class="col-md-7">
                            <p class="mb-3">
                                Our vision is to provide the right mentorship to college students and job freshers so that they develop the right industry skills leading to a great career.
                            </p>
                            <ul>
                            <li>Career Roadmap</li>
                            <li>Online Courses</li>
                            <li>Internship Preparation</li>
                            <li>Job Interview Preparation</li>
                            <li>Successful Career</li>
                            </ul>

                            <a href="{{route('allcategory')}}" class="anim-link-2 anim-link-2-primary common-Link--arrow common-BodyText">See our Roadmaps </a>
                        </div>
                    </div>
                </div>
            </section>
            
                <section data-overlay="3" class="m-gab-3" data-parallax="{{asset('frontendassets')}}/img/hero/h26.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="clearfix">
                                <h2 class="text-white font-weight-bold fs-40">
                                    Read Roadmaps now
                                </h2>
                                
                                <a href="{{route('allcategory')}}" class="btn btn-outline-light">
                                    Way to roadmaps ➡
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="https://www.youtube.com/watch?v=xL-oNkxz_y0&feature=youtu.be" class="m-video-link" data-provide="lightbox">
                                <div class="m-video-link--icon"><i class="fas fa-play"></i></div>
                                <div class="m-video-link--text text-white">
                                    <div>Watch</div>
                                    <div class="font-weight-bold">INTRO VIDEO</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="oval-divider--top oval-divider--5"></div>
                <div class="oval-divider--bottom oval-divider--5"></div>
            </section>
            
            
            <section class="m-gab-2-top m-gab-2-bottom">
                <div class="container">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-3">
                        <h5 class="mb-4"><mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">Team</mark></h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="team-member">
                                <div class="position-relative">
                                </div>
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h6 mb-0 fs-20">Lipsa Goel</h3>
                                        <p class="font-weight-light mb-0 fs-20">IIM Calcutta</p>
                                        <p class="font-weight-light mb-0"><mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">Co-Founder</mark></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="team-member">
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h6 mb-0 fs-20">Pratik Agarwal</h3>
                                        <p class="font-weight-light mb-0 fs-20">XIMB</p>
                                        <p class="font-weight-light mb-0"><mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">Co-Founder</mark></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="team-member">
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h6 mb-0 fs-20">Sitesh Goel</h3>
                                        <p class="font-weight-light mb-0 fs-20">NIT Rkl</p>
                                        <p class="font-weight-light mb-0"><mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">Co-Founder</mark></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="team-member">
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h6 mb-0 fs-20">Aman Goel</h3>
                                        <p class="font-weight-light mb-0 fs-20">IIT Mumbai</p>
                                        <p class="font-weight-light mb-0"><mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">Consultant</mark></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            
            <hr>
            <div class="container m-gab-3">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">

                    <h2 class="fw-500">Do you have any <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">queries</mark></h2>
                    <p class="lead">You can put your query here.</p>
                </div>
                <!-- End Title -->

                <div class="w-lg-80 mx-auto">
                    <!-- Contacts Form -->
                    <form class="js-validate" novalidate="novalidate" id="contactus"> 
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" name="name" placeholder="Jhon Doe" aria-label="Jhon Doe" required="" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                            <!-- End Input -->
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="email" class="form-control" name="email" placeholder="your@gmail.com" aria-label="your@gmail.com" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- End Input -->
                        </div>

                        <!-- Input -->
                        <div class="js-form-message mb-6">
                            <label class="form-label">
                                How can we help you?
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" placeholder="What can we help you with?" aria-label="What can we help you with?" required="" data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Send Message</button>
                            <p class="small">We'll get back to you in 1-2 business days.</p>

                            
                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>
            </div>
            {{--
            @if (App\Upcommingroadmap::whereStatus(1)->first())
                @php $bb =App\Upcommingroadmap::whereStatus(1)->first(); @endphp
                <section id="theme-banner-four" class="gradient-half-primary-v1">
                    <img src="{{asset('frontendassets')}}/img/shape/shape-8.svg" alt="" class="shape-one">
                    <img src="{{asset('frontendassets')}}/img/shape/shape-9.svg" alt="" class="shape-two">
                    <img src="{{asset('frontendassets')}}/img/shape/shape-11.svg" alt="" class="shape-four z-index-0">
                    <div class="round-shape-one"></div>
                    <div class="round-shape-two"></div>
                    <div class="round-shape-three"></div>

                    <div class="container m-gab-2-bottom m-gab-2-top">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="clearfix">
                                    <h2 class="text-white fw-100 h1">
                                        What's new in <span class="fw-600">Roadmaps</span>
                                    </h2>
                                    <p class="text-white o-5 mt-3 mb-5">
                                        {{$bb->title}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                              <img class="img-responsive img-fluid" src="{{asset('storage')}}/{{$bb->cover_image}}">
                            </div>
                        </div>
                    </div>

                    <figure class="position-absolute right-0 bottom-0 left-0 z-index-2 mb-0">

                    </figure>
                </section>
            @endif
            --}}
        </main>
@endsection


@section ('script')


<script>


    
        
    $("form#contactus").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
//        formData.append('description',editor.getData()) ;
        $.ajax({ 
            url: "{{route('contact.store')}}",
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
                setTimeout(function(){  window.location="{{route('welcome')}}"; }, 1000 ); 
            },
            
        });
    });



</script>
@endsection 

        <!--Footer-Wrap-->
       
        <!--End Footer-Wrap-->
  