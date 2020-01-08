@extends('web.index')
@section('content')
<!--=================================
  about --> 
<div class="intro-bg" style="background: url({{ asset('back_end/upload/slider/'.$slider->image)}});">
   <div id="scroll-down" class="intro">
    <div class="intro-content">
      <div class="container-fluid">
      <div class="row">
       <div class="col-md-12 text-center">
         <h1> <span> {{ $slider->title }}</span> {{ $slider->heading }}</h1>
         <div id="typer"></div>
          <div class="button-large">
            <a href="#">Download my CV</a>
          </div>
        </div>
       </div>
     </div>
     </div>
    <a class="scroll-down page-scroll" title="Scroll Down" href="#about"><i></i></a>
  </div>
</div>

<section id="about" class="about white-bg page-section">
<div class="container-fluid">
   <div class="row">
     <div class="col-lg-4 col-md-4 col-sm-4">
       <div class="about-image">
         <img class="img-responsive" src="{{ asset('back_end/upload/about/'.$about->image)}}" alt="">
       </div>   
       <div class="about-social">
         <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
          <li><a href="#"><i class="fa fa-vimeo"></i> </a></li>
          <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
          <li><a href="#"><i class="fa fa-behance"></i> </a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
         </ul>
       </div>
     </div>
     <div class="col-lg-8 col-md-8 col-sm-8"> 
        @if (isset($about->id))
        <div class="section-title">
          <div class="section-title-name">
            <span>Know about me</span>
            <h2>About Me</h2>
          </div>    
          <div class="title-name-gray">
            <strong>About me</strong>
          </div>
        </div>
        <div class="contact-block"> 
         <div class="row">  
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-contact clearfix">
                    <div class="contact-icon">
                        <span class="ti-user"></span>
                    </div>
                    <div class="contact-info">
                        <h4>Name:</h4>
                        <p>{{$about->name}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-contact clearfix">
                    <div class="contact-icon">
                        <span class="ti-email"></span>
                    </div>
                    <div class="contact-info">
                        <h4>Email:</h4>
                        <p>{{$about->email}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-contact clearfix">
                    <div class="contact-icon">
                        <span class="ti-mobile"></span>
                    </div>
                    <div class="contact-info">
                        <h4>Phone:</h4>
                        <p>{{$about->phone}}</p>
                    </div>
                </div>
            </div>
         </div>
         <div class="row">  
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-contact clearfix">
                    <div class="contact-icon">
                        <span class="ti-calendar"></span>
                    </div>
                    <div class="contact-info">
                        <h4>Date of birth: </h4>
                        <p>{{ date($about->date_of_birth) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-contact clearfix">
                    <div class="contact-icon">
                        <span class="ti-direction-alt"></span>
                    </div>
                    <div class="contact-info">
                        <h4>Address: </h4>
                        <p>{{$about->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-contact clearfix">
                    <div class="contact-icon">
                     <span class="ti-flag-alt-2"></span>
                    </div>
                    <div class="contact-info">
                        <h4>Nationality: </h4>
                        <p>{{$about->nationality}}</p>
                    </div>
                </div>
            </div>
         </div> 
         <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="about-block clearfix">
                <p>{{$about->description}}</p>
                <img class="pull-right" src="{{ asset('frontend/images/signature.png')}}" alt="">
            </div>
           </div>
         </div>
        </div>
        @endif
     </div>
   </div>       
 </div>
</section>
<!--=================================
  about --> 

<!--=================================
  services --> 
<section id="service" class="services white-bg page-section">
 <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12 col-md-12">
     <div class="section-title">
         <div class="section-title-name">
            <span>What i can do better</span>
            <h2>Services</h2>
        </div>  
        <div class="title-name-gray">
        <strong>Services</strong>
       </div>
     </div>
    </div>
   </div>   
   <div class="row">
    @foreach ($service as $sr)
    <div class="col-lg-3 col-md-6 col-sm-6">
     <div class="service-block">
      <span class=""><i class="{{$sr->icon}}"></i></span>
      <h2>{{ $sr->title }}</h2>
      <p>{{ $sr->description }}</p>
      <div class="contact-button">
        <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
       </div>
     </div>
    </div>
    @endforeach
   </div>   
 </div>
</section>
<!--=================================
  services --> 
<!--=================================
  Resume --> 
<section id="resume" class="resume white-bg page-section">
    @foreach ($resume as $rs)
 <div class="container-fluid">
   <div class="row">
  <div class="col-lg-12 col-md-12">
   <div class="section-title">
       <div class="section-title-name">
          <span>My Work Experience</span>
            <h2>Resume</h2>
        </div>  
        <div class="title-name-gray">
        <strong>Resume</strong>
       </div>
     </div>
  </div>
   </div> 
   <div class="row">
  <div class="col-lg-12 col-md-12">
    <h2>Experience : </h2>
    </div>
   </div>
 <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class=""><i class="{{$rs->icon}}"></i></span>     
      </div>
      <div class="resume-name">
        <h3>{{$rs->ex_name}} </h3>
        <span>{{$rs->date}}</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>{{$rs->ex_title}}</h3>
        <p>{!! substr(strip_tags($rs->ex_description), 0, 200) !!}.  </p>
      </div>
    </div>
    </div>
   </div>
   <div class="row">
  <div class="col-lg-12 col-md-12">
    <h2>Education : </h2>
    </div>
   </div>
 <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class=""><i class="{{ $rs->ed_icon }}"></i></span>      
      </div>
      <div class="resume-name">
        <h3>{{$rs->ed_name}}</h3>
        <span>{{$rs->date}}</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>{{$rs->ed_title}}</h3>
        <p>{!! substr(strip_tags($rs->ed_description), 0, 200) !!}, </p>
      </div>
    </div>
    </div>
   </div>
 </div>
    @endforeach
</section>
<!--=================================
  Resume --> 

<!--=================================
  My Skill --> 
<section id="skill" class="my-skill white-bg page-section">
 <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12 col-md-12">
     <div class="section-title">
         <div class="section-title-name">
            <span>I am good at</span>
            <h2>My Skill</h2>
        </div>  
        <div class="title-name-gray">
        <strong>My Skill</strong>
       </div>
     </div>
    </div>
   </div>   
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
     <div class="skill-content">
        <h2>{{$skill->heading}}</h2>
        <span>“{{$skill->title}}”</span>
        <p>{{$skill->description}}</p>
     </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
     <div class="skill">
            @foreach ($skills as $sk)
            <ul>
               <li>{{$sk->skill_name}}
                 <div class="bar_container">
                  <span class="bar" data-bar='{ "color": "#07cb79" }'>
                    <span class="pct">{{$sk->skill}}</span>
                  </span>
                </div>
              </li>
            </ul>
            @endforeach
          <div class="skill-chart">
            <div class="skill-chart-expand clearfix">
               <div class="expand expand-left">
                   <p>Newbie</p>
                </div>
                <div class="expand expand-left">
                  <p>Decent</p>
                 </div>
                 <div class="expand expand-right">
                   <p>Pretty Good</p>
                 </div>
                 <div class="expand expand-right">
                   <p>Master</p>
                 </div>
               </div>
          </div>
         </div>
       </div>
   </div>
 <div class="language-skills">

   <div class="row">
     <div class="col-lg-12 col-md-12"> 
        <h2>Language skills</h2>
      <p>{{ $skill->description }}</p>
      </div>
   </div>
    <div class="row">
        @foreach ($skills as $lg)

      <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="{{ $lg->lg_skill }}">
               <span class="percent"></span>
           </div>
             <h3>{{$lg->lg_skill_name}}<br/> </h3>
            </div> 
       </div>
       @endforeach 
     </div> 
  <!--  <div class="knowledge">
   <div class="row">
     <div class="col-lg-12 col-md-12"> 
        <h2>Knowledge</h2>
        <p>Auis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
     </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <ul>
          <li><span class="ti-hand-point-right"></span> Interest in current affairs</li>
          <li><span class="ti-hand-point-right"></span> Writing skills </li>
          <li><span class="ti-hand-point-right"></span> Technical skills </li>
          <li><span class="ti-hand-point-right"></span> Computers and Electronics </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <ul>
          <li><span class="ti-hand-point-right"></span> Tools skills </li>
          <li><span class="ti-hand-point-right"></span> Economics and Accounting  </li>
          <li><span class="ti-hand-point-right"></span> Psychology  </li>
          <li><span class="ti-hand-point-right"></span> Sales and Marketing </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
      <ul>
          <li><span class="ti-hand-point-right"></span> Mathematics </li>
          <li><span class="ti-hand-point-right"></span> Usability and testing </li>
          <li><span class="ti-hand-point-right"></span> Passion for sharing knowledge </li>
          <li><span class="ti-hand-point-right"></span> Active Learning </li>
         
      </ul>
    </div>
  </div>
 </div> --> 
 </div>
 </div>
</section>
<!--=================================
  My Skill --> 

<!--=================================
 portfolio --> 
<section id="portfolio" class="portfolio white-bg page-section">
 <div class="container-fluid">
   <div class="row">
  <div class="col-lg-12 col-md-12">
   <div class="section-title">
       <div class="section-title-name">
          <span>My Featured Work</span>
            <h2>My Portfolio</h2>
        </div>  
        <div class="title-name-gray">
        <strong>My Portfolio</strong>
       </div>
     </div>
  </div>
   </div> 
 <div class="row">
    <div class="col-lg-12 col-md-12"> 
        <div class="isotope-filters text-left">
            @foreach ($category as $ca)
              <button class="cat" href="javascript:;" id="{{ $ca->id }}"> {{ $ca->name }}<span>/</span></button>
              <!-- <button data-filter=".personal-essays">Personal Essays <span>/</span></button>
              <button data-filter=".ghostwriting">Ghostwriting <span>/</span></button>
              <button data-filter=".journal-articles">Journal Articles </button> -->
            @endforeach
        </div>
    </div>
  </div>  
  <div class="isotope popup-portfolio full-screen">
        @foreach ($details as $dt)
    <div class="grid-item">
        <div class="portfolio-item">
            <div class="item cat_details cat_details_{{ $dt->category_id }}">
                <div class="item-hover">
                    <div class="item-inner">
                        <img class="img-responsive" src="{{ asset('back_end/upload/details/'.$dt->image)}}" alt="">
                    </div>
                    <div class="item-info">
                        <a href="#">  work item one</a>
                        <span>by {{$dt->name}}</span>
                        <div class="item-link">
                            <a class="portfolio-img" href="{{ asset('back_end/upload/details/'.$dt->image)}}"><span class="ti-plus"></span></a>
                            <a href="{{ route('single.portfolio')}}"><span class="ti-link"></span></a>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
        @endforeach
   </div>
  </div>
</section>
<!--=================================
 portfolio --> 
<!--=================================
 calendar --> 
<section id="availability-calendar" class="calendar white-bg page-section">
 <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12 col-md-12">
     <div class="section-title">
         <div class="section-title-name">
            <span>My Availability Calendar</span>
            <h2>Availability Calendar</h2>
        </div>  
        <div class="title-name-gray">
        <strong>Availability </strong>
       </div>
     </div>
    </div>
   </div>   
 <div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="main-calendar clearfix">
         <div class="row">   
         <div class="col-lg-7 col-md-7">   
           <div class="calendar-section">
            <div class="calendar-block"> <div id="datepicker"> </div> 
            </div>
            </div>
            </div>
             <div class="col-lg-5 col-md-5">  
            <div class="date-block">
                <div class="date-area">
                    <span class="day" id="day">Sonday</span><span class="date" id="date">27</span><span class="month" id="mnt">March</span><div class="clr"></div>
                </div>
                <div class="dateinfo">
                    <div class="block"><span class="today"></span>Today</div>
                    <div class="block"><span class="not-ava"></span> Sorry. I am not available on those days </div>
                    <div class="block"><span class="available"></span>All other days i am available </div>
                </div>
              </div>
                   </div>
            <div class="clr"></div>
            </div>
        </div> 
       </div>
    </div>
  </div>
</section>
<!--=================================
 calendar --> 

<!--=================================
 blog --> 
<section id="blog" class="blog white-bg page-section">
 <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12 col-md-12">
     <div class="section-title">
         <div class="section-title-name">
            <span>My Latest Blog Posts</span>
            <h2>From the blog </h2>
        </div>  
        <div class="title-name-gray">
        <strong>Blog</strong>
       </div>
     </div>
    </div>
   </div>   
 <div class="row">
    @foreach ($blog as $bl)
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
      <div class="blog-image">
         <img class="img-responsive" src="{{ asset('back_end/upload/blog/'.$bl->image)}}" alt="">
         <div class="blog-date">
            <span>{{ date('d-M-Y', strtotime($bl->date)) }}</span>
         </div>
      </div>
      <div class="blog-info">
        <div class="blog-meta">
            <p><span class="ti-comment-alt"></span> <a href="#">4</a></p>
            <p><span class="ti-user"></span> <a href="#">{{ $bl->name }}</a></p>
            <p><span class="ti-folder"></span> <a href="#">{{$bl->title}}</a></p>
        </div>
        <div class="blog-content">
            <a href="blog-single.html">{{$bl->heading}}</a>
            <p>{!! substr(strip_tags($bl->description), 0, 200) !!} [...]</p>
            <div class="blog-bottom clearfix">
             <div class="button-small">
                <a href="{{ route('single.blog') }}">Read More..</a>
                </div>
            <div class="social pull-right">
                <ul>
                  <li><a href="#"><i class="{{$bl->icon}}"></i> </a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                </ul>
            </div>  
         </div>
        </div>
      </div>
   </div>
  </div>
      @endforeach
 </div>
 </div>
</section>
<!--=================================
 calendar --> 

<!--=================================
 blog --> 
<section id="testimonials" class="testimonials white-bg page-section-pt">
 <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12 col-md-12">
     <div class="section-title">
         <div class="section-title-name">
            <span>Look at their opinions!</span>
            <h2>Testimonials </h2>
        </div>  
        <div class="title-name-gray">
        <strong>Testimonials</strong>
       </div>
     </div>
    </div>
   </div>   
 <div class="row">
    @foreach ($testimonial as $tm)
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="testimonials-block">
      <div class="testimonials-content">
         <div class="testimonials-avtar">
            <img class="imgresponsive" src="{{ asset('back_end/upload/testimonial/'.$tm->image)}}" alt="">
         </div>
         <div class="testimonials-comment">
            <p>{!! substr(strip_tags($tm->description), 0, 200) !!}</p>
         </div>
      </div>
      <div class="testimonials-name">
        <h4>{{$tm->name}}</h4>
        <span>{{$tm->title}}</span>
      </div>    
    </div>
  </div>
  @endforeach
 </div>
 </div>
</section>
<!--=================================
 calendar --> 
<!--=================================
 color customizer --> 
<div class="style-customizer closed">
    <div class="buy-button"> <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>  </div>
    <div class="clearfix content-chooser">
        <a target="_blank" class="button" href="https://themeforest.net/item/sam-martin-personal-vcard-resume-html-template/16795240?ref=Potenzaglobalsolutions">purchase now</a> 
        <h3>Color Schemes</h3>
        <p>Which theme color you want to use? Here are some predefined colors.</p>
        <ul class="styleChange clearfix">
            <li class="skin-default selected" title="Default" data-style="skin-default" ></li>
            <li class="skin-blue" title="Blue" data-style="skin-blue" ></li>
            <li class="skin-green" title="green" data-style="skin-green"></li>
            <li class="skin-gold" title="Gold" data-style="skin-gold"></li>
            <li class="skin-salmon" title="Salmon" data-style="skin-salmon"></li>
            <li class="skin-lime" title="Lime" data-style="skin-lime"></li>
            <li class="skin-pink" title="Pink" data-style="skin-pink" ></li>
            <li class="skin-olive" title="Olive" data-style="skin-olive"></li>
        </ul>
        <h3>Layout Options</h3>
        <p>Which Layout options you want to use? Choose from below options.</p>
        <ul class="layout">
            <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-1/index.html"><img class="img-responsive" src="{{ asset('frontend/images/color-customizer/layout-01.png')}}" alt=""></a></li>
            <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-2/index.html"><img class="img-responsive" src="{{ asset('frontend/images/color-customizer/layout-02.png')}}" alt=""></a></li>
            <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-3/index.html"><img class="img-responsive" src="{{ asset('frontend/images/color-customizer/layout-03.png')}}" alt=""></a></li>
        </ul>
    </div>
</div>
@endsection

