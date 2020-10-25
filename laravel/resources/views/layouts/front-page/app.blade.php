<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="provides one stop automated solution for you trade and industry. Depending on the size and field of your organization, we have different products ands services to meet your requirements. We provide the optimum and customized solutions made for your organization.">
    <meta name="keywords" content="CCTV, PABGM, FIRE ALARM SYSTEM">
    <title>ZNMC Electronics Trading</title>
    <link rel="icon" href="assets/img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/animate.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/owl.carousel.min.css" />
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/themify-icons.css" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/flaticon.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/magnific-popup.css" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/slick.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('front-page')}}/css/style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css" integrity="sha512-uHuCigcmv3ByTqBQQEwngXWk7E/NaPYP+CFglpkXPnRQbSubJmEENgh+itRDYbWV0fUZmUz7fD/+JDdeQFD5+A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link
      href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css"
      rel="stylesheet"
    />
    <style>
    .flt-prod{
        border-right: 1px solid rgba(0,0,0,0.1);
        border-top: 1px solid rgba(0,0,0,0.1);
        border-bottom: 1px solid rgba(0,0,0,0.1);
        border-radius: 5px;
        margin-bottom: 5rem !important;
        margin-bottom: 5rem !important;
        height: 70vh;
      }
      .menu_fixed {
        z-index: 999 !important;
      }
    </style>
  </head>
    <body class="{{ $class ?? '' }}">

        @include('layouts.page_templates.guest')


        <!--   Core JS Files   -->
         <script src="{{asset('front-page')}}/js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="{{asset('front-page')}}/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="{{asset('front-page')}}/js/bootstrap.min.js"></script>
        <!-- easing js -->
        <script src="{{asset('front-page')}}/js/jquery.magnific-popup.js"></script>
        <!-- isotope js -->
        <script src="{{asset('front-page')}}/js/isotope.pkgd.min.js"></script>
        <!-- particles js -->
        <script src="{{asset('front-page')}}/js/owl.carousel.min.js"></script>
        <script src="{{asset('front-page')}}/js/jquery.nice-select.min.js"></script>
        <!-- custom js -->

        <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
        <script src="{{asset('front-page')}}/js/custom.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        lightGallery(document.getElementById("lightgallery"));
        $('select').niceSelect();
        AOS.init();
        </script>
        @stack('js')
    </body>
</html>
