<!DOCTYPE html>
<html lang="en">
  <head>


    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">


    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>{{--@yield('title')--}}</title>
    <!-- CSS
    ================================================== -->       
    
    {{-- @yield('styles') --}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>  

    <!-- Start Sound -->
    <audio autoplay>
		  <source src="audio/Sound of Ringing bell - 128K MP3.wav" type="audio/mpeg">
		  Your browser does not support the audio tag.
	  </audio>
    <!-- End Sound -->


    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-bell"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    
@include('includes.header')

    <!--=========== END HEADER SECTION ================-->   

    <!--=========== BEGIN SLIDER SECTION ================-->
    @include('includes.slidearea')
    <!--=========== END SLIDER SECTION ================-->


    <!--=========== BEGIN Top Feature SECTION ================-->
      {{-- @include('index') --}}

    <!--=========== BEGAIN Home Blog SECTION ================-->
    
    @include('includes.home-blogs')

    <!--=========== End Home Blog SECTION ================-->

     <!--=========== Start Footer SECTION ================-->

   @include('includes.footer')

   <!--=========== End Footer SECTION ================-->


    <!--=========== Start Script SECTION ================-->
     
      @include('includes.script')

     <!--=========== End Script SECTION ================-->
  </body>
</html>