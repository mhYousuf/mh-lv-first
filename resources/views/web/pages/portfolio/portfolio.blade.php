@extends('web.index')
@section('content')
  <div class="page-header bg gradient-01">
      <div class="container-fluid">
      <div class="row">
        <div class="top-bar clearfix">
          <div class="back-home pull-left">
            <a href="{{url('/')}}"><span class="ti-angle-left"></span> back to home</a>
          </div>
          <ul class="breadcrumb pull-right">
            <li><a href="{{url('/')}}"><span class="ti-home"></span> Home</a></li>
            <li class="active">Portfolio single</li>        
          </ul>
        </div>
        <div class="page-header-title">
           <h1>Portfolio single page</h1>
           <span>By Yousuf Hossain </span>
        </div>
       </div>
    </div>
  </div>
  
<!--=================================
  intro --> 

 
<!--=================================
  single portfolio --> 

<section class="single-portfolio-post page-section-pt">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="owl-carousel-1">
        @foreach ($protfolio as $pr)
                    <div class="item">
                        <img src="{{asset('back_end/upload/details/'.$pr->image)}}" alt="image">
                    </div>
                    
        @endforeach
               </div>
            </div>
            <div class="col-lg-5 col-md-5 clearfix">
                @if (isset($prot->id))
                <div class="port-title">
                    <h2>Single Portfolio post</h2>
                </div>
                <div class="tags-2">
                    <h5>Tags:</h5>
                    <ul>
                      <li><a href="#">Design</a></li>
                      <li><a href="#">Creative</a></li>
                      <li><a href="#">HTML5</a></li>
                    </ul>
                </div>
                <div class="port-meta clearfix">
                    <ul>
                      <li><b>Release:</b><span>{{ ($prot->release_date) }} </span></li>
                      <li><b>Client:</b><span>{{ ($prot->name) }}</span></li>
                      <li><b>Live Demo: </b><span>www.projecturl.com</span></li>
                      <li><b>Date: </b><span>{{ ($prot->date) }}</span></li>
                      <li><b>Skills: </b><span>{{ ($prot->skill) }}</span></li>
                    </ul>
                </div>
              <div class="port-info">
                    <p>{{($prot->description)}}</p>
                    <div class="button-small"><a href="#">View Project</a> </div>
               </div>
               @endif
            </div>
        </div>
  <!--=================================-->
   <div class="row">
    <div class="col-ld-12 col-md-12">
      <div class="port-post clearfix">
       <div class="port-post-photo">
          <img src="{{asset('frontend/images/my-photo.jpg')}}" alt="">
        </div> 
        <div class="port-post-info">
          <h3 class="text-blue"><span>Posted by :</span> Sam Martin</h3>
          <div class="port-post-social pull-right">
            <strong>Follow on:</strong>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>
          <p>Really experience that. See what you see, hear what you hear, feel the feelings. Disappointment? Anger? Frustration? Failure? How does that feel? How do you affect those around you? How do they feel? Absorb every aspect of this path that you can take today if you so choose. Notice everything that you need to know about what it will be like if you carry on with the same behaviour, putting off change. Drift back to where the path splits. Step Five: Now take a step out on to the path to the right. This is where you create powerful, progressive change. Notice the sense of freedom in your thoughts, the sense of accomplishment and walk out 10 years into your future. Imagine you are 10 years into the future but this time it’s different. Why? Because starting today you actually begin making changes in your life. Specific intentional changes are not easy. They are intentional because these changes are changes that you are choosing and they are the changes that will cause you to live.</p>
        </div>
      </div>
     </div>
   </div>
 <!--=================================-->
  </div>
</section>

<!--=================================
  single portfolio --> 

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
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-1/index.html"><img class="img-responsive" src="{{asset('frontend/images/color-customizer/layout-01.png')}}" alt=""></a></li>
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-2/index.html"><img class="img-responsive" src="{{asset('frontend/images/color-customizer/layout-02.png')}}" alt=""></a></li>
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-3/index.html"><img class="img-responsive" src="{{asset('frontend/images/color-customizer/layout-03.png')}}" alt=""></a></li>
      </ul>
  </div>
</div>
@endsection
