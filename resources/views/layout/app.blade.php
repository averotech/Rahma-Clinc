<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rahma Clinic - عيادة رحمة</title>
        <link rel="icon" type="image/png" href="{{asset('assets/images/logo.png')}}">
        <!-- poppins google font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!--owl slider carousel-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        {{-- @vite('resources/css/app.css') --}}
        <style>
            /* @font-face {
                font-family: "sitka";
                src: url({{asset('assets/front-end/fonts/sitka-small-599.ttf')}});
            }
            .sitka-font {font-family: 'sitka'}
            .poppins-font {font-family: 'Poppins', sans-serif;} */

            @font-face {
                font-family: "JF-Flat-Bold";
                src: url({{asset('assets/front-end/fonts/alfont_com_JF-Flat-Bold.ttf')}});
            }
            @font-face {
                font-family: "JF-Flat-regular";
                src: url({{asset('assets/front-end/fonts/alfont_com_JF-Flat-regular.ttf')}});
            }
            * {
                font-family: "JF-Flat-Bold";
            }
            .font-FlatBold {
                font-family: 'JF-Flat-Bold'
            }
            .font-FlatRegular {
                font-family: 'JF-Flat-regular'
            }

        </style>
        <!-- Animation in scroll library -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- hover css library -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/front-end/css/vendors/hover-min.css') }}?v={{rand(0, 99)}}"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
        <!-- Main css file -->
        <link rel="stylesheet" href="{{ asset('assets/front-end/css/main.css') }}?v={{rand(0, 99)}}">
        <link rel="stylesheet" href="{{ asset('assets/front-end/css/responsive.css') }}?v={{rand(0, 99)}}">
        <script src="{{asset('/')}}assets/front-end/js/tailwind.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    </head>

    <body dir="{{LaravelLocalization::getCurrentLocaleDirection()}}" class="relative overflow-x-hidden pb-8 md:pb-0">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <!-- Start Header -->
        @include('Layout.front-end.partials._header')
        <!-- End Header -->
        @yield('content')
       {{-- C:\Averotech\rahma-clinc\resources\views\Pages\HomePage.blade.php --}}
        <!-- Start footer -->
        @include('Layout.front-end.partials._footer')
        <!-- End footer -->


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- owl carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!--this file for hamburger menu-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>
        <!-- animate scroll library -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> --}}
        <!-- main js file -->
        <script src="{{ asset('assets/front-end/js/main.js') }}"></script>

    </body>

</html>
