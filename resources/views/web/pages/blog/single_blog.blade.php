@extends('web.index')
@section('content')
<!--=================================
  intro -->
<div class="page-header bg gradient-01">
    <div class="container-fluid">
        <div class="row">
            <div class="top-bar clearfix">
              <div class="back-home pull-left">
                <a href="{{url('/')}}"><span class="ti-angle-left"></span> back to home</a>
              </div>
              <ul class="breadcrumb pull-right">
                <li><a href="{{url('/')}}"><span class="ti-home"></span> Home</a></li>
                <li class="active">Blog</li>        
              </ul>
            </div>
            <div class="page-header-title">
               <h1>single blog page</h1>
               <span>Yousuf Blog</span>
            </div>
        </div>
    </div>
</div>
  
<!--=================================
  intro --> 

  
<!--=================================
  blog --> 
<section class="blog blog-single white-bg page-section-pt">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-9 col-md-9">
       <div class="owl-carousel-1">
        @foreach ($blog_dt as $b)
            <div class="item"> 
                <img src="{{ asset('back_end/upload/blog/'.$b->image)}}" alt="">
            </div>
        @endforeach
        </div>
        @if (isset($blog->id))
        <div class="content">
            <b>{{($blog->heading)}}</b>
            <p>{{($blog->description)}}</p>
        </div>
        @endif
    <div class="blog-comments">
        <div class="comments-1">
            <div class="comments-photo">
                <img class="img-responsive" src="{{asset('frontend/images/testimonials/01.jpg')}}" alt="">
            </div>
            <div class="comments-info">
                    <h4 class="text-blue"> Michael Bean <span>Sep 15, 2016</span></h4>
                <div class="port-post-social pull-right">
                  <a href="#">Reply</a>
                </div>
                  <p>Imagine you are 10 years into the future but this time it’s different. Why? Because starting today you actually begin making changes in your life. Specific intentional changes are not easy. They are intentional because these changes are changes that you are choosing and they are the changes that will cause you to live the life you want to live and dream.</p>
            </div>
         </div>
         <div class="comments-1 comments-2">
         <div class="comments-photo">
           <img class="img-responsive" src="{{asset('frontend/images/testimonials/05.jpg')}}" alt="">
          </div>
           <div class="comments-info">
           <h4 class="text-blue"> Paul Flavius <span>Oct 21, 2016</span></h4>
            <div class="port-post-social pull-right">
              <a href="#">Reply</a>
            </div>
              <p> They often mean leaving the perception of security in order to discover your personal freedom. These are the changes that will bring happiness and satisfaction into your life. Just go there now. 10 years out… having made a decade of changes.</p>
         </div>
         </div>
         <div class="comments-1 comments-2">
         <div class="comments-photo">
           <img class="img-responsive" src="{{asset('frontend/images/testimonials/03.jpg')}}" alt="">
          </div>
           <div class="comments-info">
           <h4 class="text-blue"> Michael Bean <span>Oct 20, 2016</span></h4>
            <div class="port-post-social pull-right">
              <a href="#">Reply</a>
            </div>
              <p>Imagine living the life you want to live. How does that feel inside? Do you feel that you have lived life? See the people of your life and how they feel about you and how they react to you. </p>
         </div>
         </div>
         <div class="comments-1">
         <div class="comments-photo">
           <img class="img-responsive" src="{{asset('frontend/images/testimonials/04.jpg')}}" alt="">
          </div>
           <div class="comments-info">
           <h4 class="text-blue"> Joana Williams <span>Oct 02, 2016</span></h4>
            <div class="port-post-social pull-right">
              <a href="#">Reply</a>
            </div>
              <p>This is the path of a different choice, a different decision. You have the freedom to be how you want to be. Absorb all you need from this moment in your future and the positive things that you can learn consciously and unconsciously and then drift and float back to the place where the path splits. Step Six: Now that you know and have experienced the two contrasting futures. Now that you know what your future holds as a result of what you do this very day.</p>
         </div>
        </div>
    </div>
        <div class="contact-form clearfix">
            <h3>Leave a Reply </h3> 
            <div class="section-field">
                <input type="text" name="name" placeholder="Name*" >
            </div> 
            <div class="section-field">
                <input type="email" name="email" placeholder="Email*" id="email">
            </div>
            <div class="section-field">
                <input type="text" name="web" placeholder="Web*" class="web" id="web">
            </div>
            <div class="section-field textarea">
                <textarea name="message" rows="7" placeholder="Comment*" class="input-message" id="message"></textarea>
            </div>
            <a href="#">Post comment </a>
        </div> 
    </div>

     <div class="col-lg-3 col-md-3">
       <div class="slidebar">
          <div class="author">
            @if(isset($blog->id))
            <div class="author-details">
                <div class="author-avtar">
                  <img class="img-responsive" src="{{ asset('back_end/upload/blog/'.$blog->image)}}" alt="">
                </div>
                <div class="author-name">
                  <h4>{{$blog->name}}</h4>
                  <b>UX/UI DESIGNER <br /> WEB DEVELOPER</b>
                </div>
            </div>
            <div class="author-content"> 
             <p> Hello, i am UI/UX Designer Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
            </div>
            @endif
          </div>
          <div class="slidebar-share">
              <h4>share post : </h4>
              <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
            </ul>
           </div> 
          <div class="slidebar-link">
            <h3>Categories</h3>
            <ul>
              <li><a href="#">Architecture</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Education</a></li>
            </ul>
          </div>
          <div class="slidebar-post">
            <h3>Popular Posts</h3>
            <div class="post">
              <a href="#">Hypnotherapy For Motivation Getting The Drive Back</a>
              <span>Monday / jan 10, 2016 </span>
            </div>
            <div class="post">
              <a href="#">When You Are Down And Out How Do You Get Up And Go Forward</a>
              <span>Monday / Feb 10, 2016 </span>
            </div>
            <div class="post">
              <a href="#">How I Lost The Secret Of Dazzling Success For 20 Years</a>
              <span>Monday / Mar 10, 2016 </span>
            </div>
            <div class="post">
              <a href="#">Hypnotherapy For Motivation Getting The Drive Back</a>
              <span>Monday / Apr 10, 2016 </span>
            </div>
           </div> 
           <div class="slidebar-link">
            <h3>Categories</h3>
            <ul>
              <li><a href="#">January 2016 </a></li>
              <li><a href="#">February 2016 </a></li>
              <li><a href="#">March 2016 </a></li>
              <li><a href="#">April 2016 </a></li>
              <li><a href="#">May 2016 </a></li>
              <li><a href="#">June 2016 </a></li>
            </ul>
          </div>
          <div class="slidebar-tag">
            <h3>Tag Cloud</h3>
            <ul>
              <li><a href="#">advertisement </a></li>
              <li><a href="#">nature</a></li>
              <li><a href="#">Wordpress</a></li>
              <li><a href="#">Forest </a></li>
              <li><a href="#">Website </a></li>
              <li><a href="#">Green</a></li>   
              <li><a href="#">blue </a></li>   
              <li><a href="#">love</a></li>   
              <li><a href="#">creative</a></li>   
              <li><a href="#">photography</a></li>   
            </ul>
          </div>
          <div class="slidebar-widget">
            <h3>Text Widget</h3>
            <p>This is text widget Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

           <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
           </div> 
       </div>
    </div>
 
    </div>

 </div>
</section>
  
<!--=================================
  blog --> 

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
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-1/index.html"><img class="img-responsive" src="images/color-customizer/layout-01.png" alt=""></a></li>
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-2/index.html"><img class="img-responsive" src="images/color-customizer/layout-02.png" alt=""></a></li>
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-3/index.html"><img class="img-responsive" src="images/color-customizer/layout-03.png" alt=""></a></li>
      </ul>
  </div>
</div>

 <!--=================================
 color customizer --> 

@endsection