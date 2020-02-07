@extends('layouts.footer')
@section('content')
            <section class="gradient-half-primary-body-v1 z-index-1 pt-8 pb-5">
                <div class="container m-gab-2 z-index-1">
                    <div class="row align-items-center text-center">
                        <div class="col-md-12">
                            <div class="clearfix mt-9"> 
                                <h2 class="text-white fw-100 h1">
                                    <span class="fw-600">{{ Auth::user()->name }}'s Dashboard</span>
                                </h2>
                                <p class="text-white mt-3 mb-4 o-5">
                                    We have it all here
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-section-3 z-index--1">
                    <img src="{{asset('frontendassets')}}/img/sectionbg.png" class="img-responsive img-fluid">
                </div>
            </section>
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">

                        

                        <div class="col-md-12">
                           <div class="text-left mx-md-auto">
                        <h3 class="text-muted">User Details</h3>
                    </div>
                             <form method="post" action="{{route('profile.edit')}}" enctype="multipart/form-data"> 
                            <section class=" py-2 bg-gray mb-9" id="controls">
                                
                                 <div class="container">
                                     
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="media align-items-center">
                                <div class="mr-5">
                                                @csrf
                                   
                                    @if(auth()->user()->image)
                                     <img class="" src="{{asset('storage')}}/{{auth()->user()->image}}" width="150" alt="" style="border-radius:8px;" />
                                        <input type="file" name="image" class="btn btn-white " style="width:140px;position: absolute;margin-left: -145px;background: transparent;border: none;" />
                                    
                                    @else
                                    <input type="file" name="image" class="btn btn-white " style="width:140px;background: transparent;border: none;" />
                                    @endif
                                    
                                </div>
                                <div class="media-body">
                                    
                                    <h3 class="h4 text-primary mb-0 fw-100"><span class="fw-600">{{auth()->user()->name}}</span> </h3>
                                    <p class="text-light mb-0 small text-success">joined on {{\Carbon\Carbon::parse(auth()->user()->created_at)->format('F d, Y')}} </p>
                                    <p class="mb-0 fw-200 small text-light">{{auth()->user()->email}}</p>
                                    <p class="mb-0 fw-200 small text-light">{{auth()->user()->phone == 0 ? '' : auth()->user()->phone }}</p>
                                    
                                    
                                    
                                </div>
                            </div>
                            <div>
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                            </section>
                             <div class="text-left mx-md-auto">
                        <h3 class="text-muted">Undergraduate Degree</h3>
                    </div>
                            <section class="px-6 py-6 bg-gray mb-9" id="controls">
                                <div class="container">
                                    

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            
                                               
                                            <div class="custom-controls-stacked">
                                                <div class="row">
                                                <div class="custom-control custom-radio ml-5 mt-2">
                                                    <input type="radio" id="isundergraduated" value="Complete"  name="isug" class="custom-control-input isug" {{auth()->user()->isug=='Complete'?'checked':'' }} >
                                                    
                                                    <label class="custom-control-label" for="isundergraduated"> <img src="{{asset('frontendassets')}}/img/mix/graduation.png" for="isundergraduated" /> &nbsp;Complete</label>
                                                </div>
                                                <div class="custom-control custom-radio ml-5 mt-2">
                                                    <input type="radio" id="isundergraduatedno" value="pursuing"  name="isug" class="custom-control-input isug" {{auth()->user()->isug=='pursuing'?'checked':'' }} >
                                                    
                                                    <label class="custom-control-label" for="isundergraduatedno"><img src="{{asset('frontendassets')}}/img/mix/reading.png" for="isundergraduatedno" /> &nbsp;Pursuing</label>
                                                </div>
                                                    </div>
                                                <div class="form-group mt-5 text-left {{auth()->user()->isug=='Complete'?'d-none':'' }}" id="ugyearid">
                                                <label>Which year ? (If pursuing) :</label>
                                                <select name="ugyear" class="form-control form-control-lg" >
                                        <option {{auth()->user()->ugyear==''?'selected':'' }}  class="form-control" value="">None</option>
                                        <option {{auth()->user()->ugyear==2?'selected':'' }} class="form-control" value="1">1st</option>
                                        <option {{auth()->user()->ugyear==3?'selected':'' }} class="form-control" value="2">2nd</option>
                                        <option {{auth()->user()->ugyear==4?'selected':'' }} class="form-control" value="3">3rd</option>
                                        <option {{auth()->user()->ugyear==5?'selected':'' }} class="form-control" value="4">4th</option>
                                        <option {{auth()->user()->ugyear==5?'selected':'' }} class="form-control" value="5">5th</option>
                                        
                                    </select>
                                            </div>
                                                
                                                <div class="form-group text-left">
                                                <label for="specialug">Undergraduated specialization:</label>
                                                <input class="form-control form-control-lg" type="text" value="{{auth()->user()->specialug}}" id="specialug" placeholder="Enter Specialization" name="specialug">
                                            </div>
                                                
                                                <div class="form-group text-left">
                                                <label for="collegeug">Undergraduated College:</label>
                                                <input class="form-control form-control-lg" type="text" id="collegeug" value="{{auth()->user()->collegeug}}" placeholder="Enter College" name="collegeug">
                                            </div>
                                                
                                            </div>
                                                
                                                
                                                
                                            
                                        </div>
                                    </div>

                                </div>
                            </section>
                             <div class="text-left mx-md-auto abc">
                        <h3 class="text-muted">Postgraduate Degree</h3>
                    </div>
                            <section class="px-6 py-6 bg-gray mb-9 abc" id="controls">
                                <div class="container">
                                    

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            
                                               
                                            <div class="custom-controls-stacked">
                                                <div class="row">
                                                  
                                                <div class="custom-control custom-radio ml-5 mt-2">
                                                    <input class="custom-control-input ispg" {{auth()->user()->ispg=='Complete'?'checked':'' }} type="radio"  id="Postgraduatedyes" value="Complete"  name="ispg"  >
                                                    <label class="custom-control-label" for="Postgraduatedyes"><img src="{{asset('frontendassets')}}/img/mix/graduation.png" for="Postgraduatedyes" /> &nbsp;Complete</label>
                                                </div>
                                                <div class="custom-control custom-radio ml-5 mt-2">
                                                    <input class="custom-control-input ispg" {{auth()->user()->ispg=='pursuing'?'checked':'' }} type="radio" id="Postgraduatedno" value="pursuing"  name="ispg"  >
                                                    <label class="custom-control-label" for="Postgraduatedno"><img src="{{asset('frontendassets')}}/img/mix/reading.png" for="Postgraduatedno" /> &nbsp;Pursuing</label>
                                                </div>
                                                    <div class="custom-control custom-radio ml-5 mt-2">
                                                    <input class="custom-control-input ispg" {{auth()->user()->ispg=='NA'?'checked':'' }} type="radio"  id="nana" value="NA"  name="ispg"  >
                                                    <label class="custom-control-label" for="nana"><img src="{{asset('frontendassets')}}/img/na.png" for="nana" /> &nbsp;Not available</label>
                                                </div>
                                                    
                                                    </div>
                                                  <div id="pgna" class="{{auth()->user()->ispg=='NA'?'d-none':'' }}">
                                                      <div class="form-group mt-5 text-left {{auth()->user()->ispg=='Complete'?'d-none':'' }}" id="pgyearid">
                                                  
                                                <label>Which year ? (If pursuing) :</label>
                                                <select name="pgyear" class="form-control form-control-lg " >
                                        <option {{auth()->user()->pgyear==''?'selected':'' }}  class="form-control" value="">None</option>
                                        <option {{auth()->user()->pgyear==2?'selected':'' }} class="form-control" value="1">1st</option>
                                        <option {{auth()->user()->pgyear==3?'selected':'' }} class="form-control" value="2">2nd</option>
                                        <option {{auth()->user()->pgyear==4?'selected':'' }} class="form-control" value="3">3rd</option>
                                        <option {{auth()->user()->pgyear==5?'selected':'' }} class="form-control" value="4">4th</option>
                                        <option {{auth()->user()->pgyear==5?'selected':'' }} class="form-control" value="5">5th</option>
                                        
                                    </select>
                                            </div>
                                                
                                                <div class="form-group text-left">
                                                <label for="Postspecialgra">Postgraduated specialization:</label>
                                                <input class="form-control form-control-lg" type="text" value="{{auth()->user()->specialpg}}" id="specialpg" placeholder="Enter Specialization" name="specialpg">
                                            </div>
                                                
                                                <div class="form-group text-left">
                                                <label for="Postcollegegra">Postgraduated College:</label>
                                                <input class="form-control form-control-lg" type="text" id="collegepg" value="{{auth()->user()->collegepg}}" placeholder="Enter College" name="collegepg">
                                            </div>
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>

                                </div>
                            </section>
                             <div class="text-left mx-md-auto">
                        <h3 class="text-muted">Is working?</h3>
                    </div>
                            <section class="px-6 py-6 bg-gray mb-9" id="controls">
                                <div class="container">
                                    

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            
                                                <div class="custom-controls-stacked">
                                                <div class="row">
                                                <div class="custom-control custom-radio ml-5 mt-2">
                                                    <input class="custom-control-input iswork" {{auth()->user()->isworking=='yes'?'checked':'' }} type="radio"  id="isworkingyes" value="yes"  name="isworking" >
                                                    <label class="custom-control-label " for="isworkingyes"><img src="{{asset('frontendassets')}}/img/mix/team.png" for="isworkingyes" /> &nbsp;yes</label>
                                                </div>
                                                <div class="custom-control custom-radio ml-5 mt-2">
                                                    <input class="custom-control-input iswork" {{auth()->user()->isworking=='no'?'checked':'' }} type="radio"  id="isworkingno" value="no"  name="isworking" >
                                                    <label class="custom-control-label" for="isworkingno"><img src="{{asset('frontendassets')}}/img/mix/confused.png" for="isworking" /> &nbsp;No</label>
                                                </div>
                                                    </div>
                                             <div id="isworkingid" class="{{auth()->user()->isworkingno=='no'?'d-none':'' }}">
                                                <div class="form-group mt-5 text-left">
                                                <label for="company">If yes,Company Name</label>
                                                <input class="form-control form-control-lg" value="{{auth()->user()->company}}" type="text" id="company" placeholder="Enter Company Name" name="company" >
                                            </div>
                                                
                                                <div class="form-group mt-5 text-left">
                                                <label for="company">Role :</label>
                                                <input class="form-control form-control-lg" value="{{auth()->user()->role}}" type="text" id="role" placeholder="What was the role" name="role">
                                            </div>
                                                
                                                <div class="form-group text-left">
                                                <label for="Postcollegegra">Interest :</label>
                                                <input class="form-control form-control-lg" value="{{auth()->user()->interest}}" type="text" id="interest" placeholder="Interests" name="interest">
                                            </div>
                                                
                                            </div>
                                                
                                              </div>  
                                                
                                            
                                        </div>
                                    </div>

                                </div>
                            </section>
                            
                                                <button type="submit" class="btn btn-secondary btn-block">Submit Now</button>
                     
                            </form>
                        </div>
                    </div>
                </div>
            </section>
@endsection
@section('script')
<script>
    
    $('.isug').change(function(){
        var value=this.value;
        
        
        if(value=='Complete'){
            $('#ugyearid').addClass('d-none');
            $('.abc').removeClass('d-none');
        }else{
             $('#ugyearid').removeClass('d-none');
             $('.abc').addClass('d-none');
        }
        
    }); 
    $('.iswork').change(function(){
        var value=this.value;
        
        
        if(value=='no'){
            $('#isworkingid').addClass('d-none');
        }else{
             $('#isworkingid').removeClass('d-none');
        }
        
    });
    
     $('.ispg').change(function(){
        var value=this.value;
        
//        alert(value);
        if(value=='Complete'){
            $('#pgyearid').addClass('d-none');
             $('#pgna').removeClass('d-none'); 
        }else if(value=='NA'){
                $('#pgyearid').removeClass('d-none');
                $('#pgna').addClass('d-none'); 
        }else{
             $('#pgyearid').removeClass('d-none');
             $('#pgna').removeClass('d-none'); 
        }
        
    });
//    $('.isug').val("{{auth()->user()->isug}}");
//    $('#ispg').change();
</script>
@endsection