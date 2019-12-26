@extends('web.index')
@section('content')
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
@endsection