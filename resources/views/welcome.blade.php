<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Sam Martin - Personal Vcard Resume HTML Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Sam Martin - Personal Vcard Resume HTML Template </title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico')}}" />

<!-- bootstrap -->
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

<!-- google font -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200italic,200,300,300italic,400italic,500,500italic,600,600italic,700italic,900italic,900,800,700,800italic' rel='stylesheet' type="text/css" />
 
<!-- themify icon -->
<link href="{{ asset('frontend/css/themify-icons.css') }}" rel="stylesheet" type="text/css" />

<!-- font awesome  -->
<link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

<!-- magnific popup -->
<link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
<!--  owl carousel -->
<link rel='stylesheet' href="{{ asset('frontend/css/owl.carousel.css')}}">

<!-- jquery-ui -->
<link rel='stylesheet' href="{{ asset('frontend/css/jquery-ui.css') }}">
 
<!-- main style -->
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />

<!-- responsive -->
<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" type="text/css" />

<!-- Style customizer -->
<link href="#" data-style="styles" rel="stylesheet">
<link href="{{ asset('frontend/css/style-customizer.css') }}" rel="stylesheet" type="text/css" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-557RCPW');</script>
<!-- End Google Tag Manager -->

</head>


<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--=================================
  loading -->

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>

<!--=================================
  loading -->


<!--=================================
  header -->
   
 <header class="header" id="home">
    <nav id="menu" class="navbar navbar-default">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.html"> <img id="logo_img" src="{{ asset('frontend/images/logo.png')}}" alt=""> </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="navbar" class="nav navbar-nav navbar-right">
          <li class="active"><a href="#home" class="page-scroll">Home</a></li>
          <li><a href="#about" class="page-scroll">About</a></li>
           <li><a href="#service" class="page-scroll">Service</a></li>
           <li><a href="#resume" class="page-scroll">Resume</a></li>
           <li><a href="#skill" class="page-scroll">Skill</a></li>
           <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
           <li><a href="#availability-calendar" class="page-scroll">Calendar</a></li>
           <li><a href="#blog" class="page-scroll">Blog</a></li>
           <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
           <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">pages </a>
            <ul class="dropdown-menu">
                <li><a href="blog.html">Blog </a></li>
                <li><a href="blog-single.html">Blog single</a></li>
                <li><a href="portfolio-single.html">Portfolio single</a></li>
                <li><a href="error-404.html">Error 404</a></li>
            </ul>
        </li>
           <li><a href="#contact" class="page-scroll">contact</a></li>
        </ul>
   </div> 
</nav>
</header>

<!--=================================
  header -->


<!--=================================
  intro --> 
 
  <div class="intro-bg" style="background: url({{ asset('frontend/images/bg.jpg')}});">
   <div id="scroll-down" class="intro">
    <div class="intro-content">
      <div class="container-fluid">
      <div class="row">
       <div class="col-md-12 text-center">
         <h1> <span> Hello i’m </span> Sam Martin </h1>
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
   
<!--=================================
  intro --> 


<!--=================================
  about --> 

<section id="about" class="about white-bg page-section">
 <div class="container-fluid">
   <div class="row">
     <div class="col-lg-4 col-md-4 col-sm-4">
       <div class="about-image">
         <img class="img-responsive" src="{{ asset('frontend/images/me.jpg')}}" alt="">
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
                        <p>Sam Martin</p>
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
                        <p>sam@website.com</p>
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
                        <p>(123)-456-7890</p>
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
                        <p>25 September 1990</p>
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
                        <p>24 SL Road, London. UK</p>
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
                        <p>United Kingdom</p>
                    </div>
                </div>
            </div>
         </div> 
         <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="about-block clearfix">
                <p>My name is Sam Martin Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                <img class="pull-right" src="{{ asset('frontend/images/signature.png')}}" alt="">
            </div>
           </div>
         </div>
        </div>
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
    <div class="col-lg-3 col-md-6 col-sm-6">
     <div class="service-block">
      <span class="ti-desktop"></span>
      <h2>Ghostwriting</h2>
      <p>You will begin to realise why this exercise is called the Dickens Pattern (with reference to the ghost showing Scrooge some different futures) as you notice that the idea of this exercise is to hypnotize yourself to be aware of two....</p>
      <div class="contact-button">
        <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
       </div>
     </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
     <div class="service-block">
      <span class="ti-slice"></span>
      <h2>Journal Articles</h2>
      <p>Two distinct pathways that you could take for your life this very day. Have a think about something that you do that you are maybe not motivated to change about yourself. Prior to running through this technique, just have a think about... </p>
      <div class="contact-button">
        <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
       </div>
     </div>
    </div>  
    <div class="col-lg-3 col-md-6 col-sm-6">
     <div class="service-block">
      <span class="ti-brush-alt"></span>
      <h2>Personal Essays</h2>
      <p>Then with that thing in mind, follow these simple steps. Step One: Get yourself nice and relaxed and settled. Concentrate on your breathing, engage in the moment and spend some time being still, quiet and drift inside of your own mind... </p>
      <div class="contact-button">
        <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
       </div>
     </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
     <div class="service-block">
      <span class="ti-layout-media-center"></span>
      <h2>Business Proposals</h2>
      <p>Become aware of the temperature, the sights, the sounds and enjoy walking along the path of your life. Make it sensory rich and get comfortable with the idea. Imagine the feeling of your feet walking along the path and the sound.... </p>
      <div class="contact-button">
        <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
       </div>
     </div>
    </div>
   </div>   
 </div>
</section>

<!--=================================
  services --> 


<!--=================================
  Resume --> 

<section id="resume" class="resume white-bg page-section">
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
      <span class="ti-ruler-pencil"></span>     
      </div>
      <div class="resume-name">
        <h3>Own Business </h3>
        <span>2013 to present</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Freelance Copywriter</h3>
        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
      </div>
    </div>
    </div>
   </div>
   <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-bookmark-alt"></span>   
      </div>
      <div class="resume-name">
        <h3>Fashions LLP at Portion </h3>
        <span>2010 to 2013</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Affiliate Blogger</h3>
        <p>Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
      </div>
    </div>
    </div>
   </div>
   <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-calendar"></span>   
      </div>
      <div class="resume-name">
        <h3>Talent Park UK</h3>
        <span>2009 to 2010</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Academic writer</h3>
        <p>Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea. </p>
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
      <span class="ti-crown"></span>      
      </div>
      <div class="resume-name">
        <h3>College of William and Mary</h3>
        <span>2008 to 2009</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Professional Writing</h3>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
      </div>
    </div>
    </div>
   </div>
   <div class="resume-block clearfix">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-thumb-up"></span>   
      </div>
      <div class="resume-name">
        <h3>Arcadia University</h3>
        <span>2007 to 2009</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Bachelor's Degree</h3>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      </div>
    </div>
    </div>
   </div>
 </div>
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
        <h2>My Professional Strengths</h2>
        <span>“life's too short to have board hair”</span>
        <p>My Professional Strengths Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis velit error culpa unde, esse quam quasi, necessitatibus voluptatem possimus, repellendus. <br /><br />        
    The other virtues practice in succession by Franklin were silence, order, resolution, frugality, industry, sincerity, Justice, moderation, cleanliness, tranquility, chastity and humility. For the summary order he followed a little scheme of employing his time each day. From five to seven each morning he spent in bodily personal attention, saying a short prayer, thinking over the day’s business and resolutions, studying and eating breakfast. From eight till twelve he worked at his trade. From twelve to one he read or overlooked his accounts and dined. From two to five he worked at his trade. The rest of the evening until 10 he spent in music, or diversion of some sort. </p>
     </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
     <div class="skill">
             <ul>
               <li>Grammar Rules
                 <div class="bar_container">
                  <span class="bar" data-bar='{ "color": "#07cb79" }'>
                    <span class="pct">70%</span>
                  </span>
                </div>
              </li>
              <li>Research And Fact Check
               <div class="bar_container">
                 <span class="bar" data-bar='{ "color": "#07cb79", "delay": "600" }'>
                   <span class="pct">55%</span>
                 </span>
                </div>
              </li>
              <li>Proofreading
                <div class="bar_container">
                 <span class="bar" data-bar='{ "color": "#07cb79", "delay": "1200" }'>
                  <span class="pct">80%</span>
                 </span>
                </div>
              </li>
              <li>Communication skills
               <div class="bar_container">
                 <span class="bar" data-bar='{ "color": "#07cb79", "delay": "1800" }'>
                 <span class="pct">70%</span>
                </span>
               </div>
              </li>
          </ul>
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
      <p>You will begin to realise why this exercise is called the Dickens Pattern with reference to the ghost showing Scrooge some different futures as you notice that the idea of this exercise is to hypnotize yourself to be aware of two very real possibilities for your future. Two distinct pathways. </p>
      </div>
   </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="73">
               <span class="percent"></span>
           </div>
             <h3>English <br/> Experienced</h3>
            </div> 
       </div> 
       <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="55">
               <span class="percent"></span>
           </div>
             <h3>French <br />Advanced</h3>
       </div> 
       </div> 
       <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="89">
               <span class="percent"></span>
           </div>
             <h3>Spanish <br />Basic</h3>
       </div> 
       </div> 
       <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="95">
               <span class="percent"></span>
           </div>
             <h3>German <br />Basic</h3>
       </div> 
      </div> 
     </div> 
   <div class="knowledge">
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
 </div> 
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
          <button data-filter="" class="active"> View All <span>/</span></button> 
          <button data-filter=".personal-essays">Personal Essays <span>/</span></button>
          <button data-filter=".ghostwriting">Ghostwriting <span>/</span></button>
          <button data-filter=".journal-articles">Journal Articles </button>
       </div>
    </div>
  </div>  
  <div class="isotope popup-portfolio full-screen">
    <div class="grid-item personal-essays ghostwriting">
      <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/01.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/01.jpg')}}"><span class="ti-plus"></span></a>
           <a href="portfolio-single.html"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
        </div>
    </div>
    <div class="grid-item personal-essays">
      <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/02.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/02.jpg')}}"><span class="ti-plus"></span></a>
           <a href="portfolio-single.html"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
        </div>
    </div>
     <div class="grid-item journal-articles">
        <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/03.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/03.jpg')}}"><span class="ti-plus"></span></a>
           <a href="portfolio-single.html"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
        </div>  
    </div>
    <div class="grid-item ghostwriting">
      <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/04.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/04.jpg')}}"><span class="ti-plus"></span></a>
           <a href="portfolio-single.html"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
        </div>
    </div>
    <div class="grid-item personal-essays">
      <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/05.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/05.jpg')}}"><span class="ti-plus"></span></a>
           <a href="portfolio-single.html"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
        </div>  
    </div>
    <div class="grid-item">
      <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/06.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/06.jpg')}}"><span class="ti-plus"></span></a>
           <a href="portfolio-single.html"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
        </div>
    </div>
    <div class="grid-item journal-articles">
      <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/07.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/07.jpg')}}"><span class="ti-plus"></span></a>
           <a href="portfolio-single.html"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
        </div> 
    </div>
      <div class="grid-item journal-articles">
        <div class="portfolio-item">
     <div class="item">
      <div class="item-hover">
          <div class="item-inner">
        <img class="img-responsive" src="{{ asset('frontend/images/portfolio/08.jpg')}}" alt=""></div>
         <div class="item-info">
         <a href="#">  work item one</a>
          <span>by Sam Martin</span>
          <div class="item-link">
           <a class="portfolio-img" href="{{ asset('frontend/images/portfolio/08.jpg')}}"><span class="ti-plus"></span></a>
           <a href="#"><span class="ti-link"></span></a>
          </div>
           </div>
        </div>
       </div>      
      </div>  
    </div>
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
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
      <div class="blog-image">
         <img class="img-responsive" src="{{ asset('frontend/images/blog/01.jpg')}}" alt="">
         <div class="blog-date">
            <span>June <br />05</span>
         </div>
      </div>
      <div class="blog-info">
        <div class="blog-meta">
            <p><span class="ti-comment-alt"></span> <a href="#">4</a></p>
            <p><span class="ti-user"></span> <a href="#">Admin </a></p>
            <p><span class="ti-folder"></span> <a href="#">Development</a></p>
        </div>
        <div class="blog-content">
            <a href="blog-single.html">Are You Famous Or Focused</a>
            <p>Commodo consequat ut enim ad minim niam, quis nostrud ullamco  nisi ut aliquip exea non veritatis illum laudantium</p>
            <div class="blog-bottom clearfix">
             <div class="button-small">
                <a href="#">Read More..</a>
                </div>
            <div class="social pull-right">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                </ul>
            </div>  
         </div>
        </div>
      </div>
   </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
      <div class="blog-image">
         <img class="img-responsive" src="{{ asset('frontend/images/blog/02.jpg')}}" alt="">
         <div class="blog-date">
            <span>Aug <br />15</span>
         </div>
      </div>
      <div class="blog-info">
        <div class="blog-meta">
            <p><span class="ti-comment-alt"></span> <a href="#">0</a></p>
            <p><span class="ti-user"></span> <a href="#">Admin </a></p>
            <p><span class="ti-folder"></span> <a href="#">Web Design</a></p>
        </div>
        <div class="blog-content">
            <a href="blog-single.html">Does Your Life Lack Meaning</a>
            <p>Exercitation ullamco laboris nisi ut aliquip exea commodo consequat ut enim ad minim niam quis minim nostrud. </p>
            <div class="blog-bottom clearfix">
             <div class="button-small">
                <a href="#">Read More..</a>
                </div>
            <div class="social pull-right">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                </ul>
            </div>  
         </div>
        </div>
      </div>
   </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
      <div class="blog-image">
         <img class="img-responsive" src="{{ asset('frontend/images/blog/03.jpg')}}" alt="">
         <div class="blog-date">
            <span>Sep <br />11</span>
         </div>
      </div>
      <div class="blog-info">
        <div class="blog-meta">
            <p><span class="ti-comment-alt"></span> <a href="#">7</a></p>
            <p><span class="ti-user"></span> <a href="#">Admin </a></p>
            <p><span class="ti-folder"></span> <a href="#">WordPress</a></p>
        </div>
        <div class="blog-content">
            <a href="blog-single.html">Harness The Power Of Your Dreams</a>
            <p>Auis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat at enim ad minim niam.  </p>
            <div class="blog-bottom clearfix">
             <div class="button-small">
                <a href="#">Read More..</a>
                </div>
            <div class="social pull-right">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                </ul>
            </div>  
         </div>
        </div>
      </div>
   </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
      <div class="blog-image">
         <img class="img-responsive" src="{{ asset('frontend/images/blog/04.jpg')}}" alt="">
         <div class="blog-date">
            <span>Dec <br />22</span>
         </div>
      </div>
      <div class="blog-info">
        <div class="blog-meta">
            <p><span class="ti-comment-alt"></span> <a href="#">10</a></p>
            <p><span class="ti-user"></span> <a href="#">Admin </a></p>
            <p><span class="ti-folder"></span> <a href="#">Magento</a></p>
        </div>
        <div class="blog-content">
            <a href="blog-single.html">Does Your Life Lack Meaning</a>
            <p>Mostrud exercitation ullamco laboris nisi ut aliquip exea ut enim ad minim niam quis and commodo consequat. </p>
            <div class="blog-bottom clearfix">
             <div class="button-small">
                <a href="#">Read More..</a>
                </div>
            <div class="social pull-right">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                </ul>
            </div>  
         </div>
        </div>
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
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="testimonials-block">
      <div class="testimonials-content">
         <div class="testimonials-avtar">
            <img class="imgresponsive" src="{{ asset('frontend/images/testimonials/01.jpg')}}" alt="">
         </div>
         <div class="testimonials-comment">
            <p>Are you considering buying a compatible inkjet cartridge for your printer? There are many reputed companies like Canon, Epson, Dell, and Lexmark </p>
         </div>
      </div>
      <div class="testimonials-name">
        <h4>Michael Bean</h4>
        <span>Project manager</span>
      </div>    
    </div>
    <div class="testimonials-block">
      <div class="testimonials-content">
         <div class="testimonials-avtar">
            <img class="imgresponsive" src="{{ asset('frontend/images/testimonials/02.jpg')}}" alt="">
         </div>
         <div class="testimonials-comment">
            <p> Sports betting While most people enjoy casino gambling, lottery and bingo playing for the fun and excitement it provides, others may experience gambling as an addictive and distractive habit. </p>
         </div>
      </div>
      <div class="testimonials-name">
        <h4>Joana Williams</h4>
        <span>Executive Director</span>
      </div>    
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="testimonials-block">
      <div class="testimonials-content">
         <div class="testimonials-avtar">
            <img class="imgresponsive" src="{{ asset('frontend/images/testimonials/03.jpg')}}" alt="">
         </div>
         <div class="testimonials-comment">
            <p>While most people enjoy casino gambling, sports betting, lottery and bingo playing for the fun and excitement it provides, others may experience gambling as an addictive and distractive habit. </p>
         </div>
      </div>
      <div class="testimonials-name">
        <h4>Paul Flavius</h4>
        <span>Managing Director</span>
      </div>    
    </div>
    <div class="testimonials-block">
      <div class="testimonials-content">
         <div class="testimonials-avtar">
            <img class="imgresponsive" src="{{ asset('frontend/images/testimonials/04.jpg')}}" alt="">
         </div>
         <div class="testimonials-comment">
            <p>Despite the advancements few would argue that, of feminism over the past three </p>
         </div>
      </div>
      <div class="testimonials-name">
        <h4>Felica Queen</h4>
        <span>Department Head</span>
      </div>    
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="testimonials-block">
      <div class="testimonials-content">
         <div class="testimonials-avtar">
            <img class="imgresponsive" src="{{ asset('frontend/images/testimonials/05.jpg')}}" alt="">
         </div>
         <div class="testimonials-comment">
            <p>Few would argue that, despite the advancements of feminism over the past three </p>
         </div>
      </div>
      <div class="testimonials-name">
        <h4>Michael Bean</h4>
        <span>Team Leader</span>
      </div>    
    </div>
    <div class="testimonials-block">
      <div class="testimonials-content">
         <div class="testimonials-avtar">
            <img class="imgresponsive" src="{{ asset('frontend/images/testimonials/06.jpg')}}" alt="">
         </div>
         <div class="testimonials-comment">
            <p>Today, many people rely on computers to do homework, work, and create or store useful information.</p>
         </div>
      </div>
      <div class="testimonials-name">
        <h4>Mellissa Doe</h4>
        <span>Section Head</span>
      </div>    
    </div>
  </div>
 </div>
 </div>
</section>

<!--=================================
 calendar --> 


<!--=================================
 contact --> 

<section id="contact" class="google-map white-bg page-section-pt">
 <div class="container-fluid">
  <div id="google-map">
     <div id="map-canvas"></div>
 </div>
 <div class="contact">  
    <h2>Say Hi It’s Free! </h2>
    <div class="address">
      <ul>
        <li><span class="ti-location-pin"></span> <p>24 SL Road, London. UK</p> </li>
        <li><span class="ti-marker-alt"></span> <p>sam@website.com </p></li>
        <li><span class="ti-mobile"></span> <p>(123)-456-7890 </p></li>
        <li><span class="ti-printer"></span> <p>(098)-765-4321 </p></li>
      </ul>
    </div>
    <div class="social">
     <h4>I'm also on Social Networks</h4>
     <p>Follow me on social networks to get the latest news, blog, updates and much more.</p>
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
  <div class="button-large"><a href="#">Download my CV</a></div>
 </div>
 <div class="contact-form">
   <div id="contact-wrapper">
    <div class="contact-content">
     <div id="formmessage">Success/Error Message Goes Here</div>
       <form class="form-horizontal" id="contactform" method="post" action="php/contact-form.php">
          <div class="contact-form">
            <h4>Drop me a line</h4>
            <p>Use this form to tell me about your project goals and needs. I will be in touch within 24 hours.</p>
               <input id="name" type="text" placeholder="Name*"  name="name">
               <input type="email" placeholder="Email*" name="email">
               <input type="text" placeholder="Phone*" name="phone">
               <textarea class="input-message" placeholder="Comment*" rows="7" name="message"></textarea>
             <input type="hidden" name="action" value="sendEmail"/>
            <button id="submit" name="submit" type="submit" value="Send" class="button-small"> Say Hello! </button>
          </div> 
        </form>
        <div id="ajaxloader" style="display:none"><img class="center-block" src="{{ asset('frontend/images/ajax-loader-white.gif')}}" alt=""></div>
   </div>
   <a href="#" class="contact-toggle"><span class="ti-comments"></span></a>
  </div>
 </div>
 </div>
</section>

<!--=================================
 contact --> 


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

 <!--=================================
 color customizer --> 
 

<!--=================================
 javascript --> 
 
<!-- jquery -->
<script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>

<!-- modernizr -->
<script type="text/javascript" src="{{ asset('frontend/js/modernizr.min.js') }}"></script>

<!-- Plugins -->
<script type="text/javascript" src="{{ asset('frontend/js/plugins.js') }}"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjVoaCW3PAn52C7WPpJ7NBBqU1_TUfnSI" type="text/javascript"></script>
<script type="text/javascript" src="js/map-scripts.js"></script>

<!-- datepicker -->
<script type="text/javascript" src="{{ asset('frontend/js/datepicker-script.js') }}"></script>

<!-- style customizer  -->
<script type="text/javascript" src="{{ asset('frontend/js/style-customizer.js') }}"></script>

<!-- custom -->
<script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>

  
 
</body>
</html> 