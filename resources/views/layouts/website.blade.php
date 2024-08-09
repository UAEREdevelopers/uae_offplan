<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Off Plan Properties for Sale in Dubai | Off-Plan Projects in Dubai| UAE Off-Plan </title>

    <meta name="title" content="Off Plan Properties for Sale in Dubai | Off-Plan Projects in Dubai ">
    <meta name="description" content="Buy off plan properties in Dubai for investment or living.  Find off-plan projects from leading real estate developers in the U.A.E. including Samana, Tiger, Emaar Properties.">
    


    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <!-- Stylesheets -->

    <link rel="shortcut icon" href="https://www.uaehomefinder.com/theme/assets/images/favicon.png">

    <link href="{{ asset('website') }}/css/bootstrap.css" rel="stylesheet">

    <link href="{{ asset('website') }}/css/styles.css?={{time()}}" rel="stylesheet">

    <link href="{{ asset('website') }}/css/responsive.css?={{time()}}" rel="stylesheet">

    <link href="{{ asset('website') }}/css/owl.carousel.min.css" rel="stylesheet">

    <link href="{{ asset('website') }}/css/dev_styles.css?={{time()}}" rel="stylesheet">

    <!--Color Switcher Mockup-->

    <link href="{{ asset('website') }}/css/color-switcher-design.css" rel="stylesheet">



    <link rel="shortcut icon" href="{{ asset('website') }}/images/favicon.png" type="image/x-icon">

    <link rel="icon" href="{{ asset('website') }}/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    





    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.7/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.7/build/js/intlTelInput.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
  </head>
  <body>
    
    <div class="page-wrapper">
    
    <?php
      if(isset($setting->phone)){
        $whatsapp_input = str_replace('+', '', $setting->phone);
        $whatsapp_input = str_replace(' ','',$whatsapp_input); 
        $telephone_input = str_replace(' ','',$setting->phone);
      }
    ?>
    
    @include('layouts.header')
    


    @yield('content')
    
    
    @include('layouts.footer')
     


   
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

    </div>

    <script src="{{ asset('website') }}/js/jquery.js"></script>

    <script src="{{ asset('website') }}/js/popper.min.js"></script>

    <script src="{{ asset('website') }}/js/bootstrap.min.js"></script>

    <script src="{{ asset('website') }}/js/jquery-ui.js"></script>

    <script src="{{ asset('website') }}/js/jquery.fancybox.js"></script>

    <script src="{{ asset('website') }}/js/appear.js"></script>

    <script src="{{ asset('website') }}/js/owl.js"></script>

    <script src="{{ asset('website') }}/js/owl.carousel.min.js"></script>

    <script src="{{ asset('website') }}/js/jquery.countdown.js"></script>

    <script src="{{ asset('website') }}/js/wow.js"></script>

    <script src="{{ asset('website') }}/js/script.js"></script>

    <script src="{{ asset('website') }}/js/dev_scripts.js"></script>

    <!-- Color Setting -->

    <script src="{{ asset('website') }}/js/color-settings.js"></script>

  @yield('script')
  

  </body>
</html>