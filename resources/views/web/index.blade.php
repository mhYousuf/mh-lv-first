<!DOCTYPE html>
<html lang="en">
<head>
@include('web.partials.head')
</head>


<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--=================================
  loading -->
<div id="loading">
    @include('web.partials.loader')
</div>

<!--=================================
  loading -->


<!--=================================
  header -->
   
 <header class="header" id="home">
    @include('web.partials.header')
</header>

<!--=================================
  header -->
    @include('web.partials.backimg')


<!--=================================
  intro --> 
 
    @yield('content')

 <!--=================================
 color customizer --> 
 

<!--=================================
 javascript --> 
 
<!-- jquery -->
    @include('web.partials.js_file')

  
 
</body>
</html> 