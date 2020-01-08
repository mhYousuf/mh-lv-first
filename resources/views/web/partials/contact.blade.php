<section class="google-map white-bg">
    <div class="container-fluid">
        <div id="google-map">
            <div id="map-canvas" class="wow animated fadeInUp"></div>
        </div>
        <div class="contact">  
            <h2>Say Hi It’s Free! </h2>
            <div class="address">
                @if(isset($basic->id))
                <ul>
                  <li><span class="ti-location-pin"></span> <p>{{($basic->address)}}</p> </li>
                  <li><span class="ti-marker-alt"></span> <p>{{($basic->website_name)}}</p></li>
                  <li><span class="ti-mobile"></span> <p>{{($basic->phone)}}</p></li>
                  <li><span class="ti-printer"></span> <p>(098)-765-4321 </p></li>
                </ul>
                @endif
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
    </div>
</section>

<div class="contact-form">
    <!-- <div id="contact-wrapper"> -->
        <div class="contact-content">
            <div id="">Success/Error Message Goes Here</div>
                <form class="form-horizontal" id="" method="post" action="{{ route('sent.mail') }}">
                    @csrf
                    <div class="contact-form">
                        <h4>Contact Form</h4>
                        <p>Use this form to tell me about your project goals and needs. I will be in touch within 24 hours.</p>
                        <input type="text" name="name" id="name" placeholder="Name*">
                        <input type="email" name="email" id="email" placeholder="Email*">
                        <input type="text" name="phone" id="phone" placeholder="Phone*">
                        <textarea class="input-message" rows="7" name="message" id="message" placeholder="Comment*"></textarea>
                        <!-- <input type="hidden" name="action" value="sendEmail"/> -->
                        <button type="submit" value="Send" class="button-small"> Sent Mail </button>
                    </div> 
                </form>
            <div id="ajaxloader" style="display:none"><img class="center-block" src="{{ asset('frontend/images/ajax-loader-white.gif')}}" alt="">
            </div>
        </div>
        <a href="#" class="contact-toggle"><span class="ti-comments"></span></a>
    <!-- </div> -->
</div>