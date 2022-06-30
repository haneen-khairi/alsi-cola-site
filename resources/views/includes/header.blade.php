{{-- /*-------------------------------------------------------------*/
//////////////////////        Header       //////////////////////
/*-------------------------------------------------------------*/ --}}

<!doctype html>
<html class="no-js" lang="en-US" style='margin: 0 !important;'>

<!-- H.k.Y -->
<!-- Haneen K Yousef -->

<head>
    <meta charset="UTF-8" />
    <title>
        Alsi Cola
    </title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/alsi/logo.png') }}" type="image/x-icon">

    <script data-minify="1" src="{{ asset('js/jquery.min.js') }}"></script>

    <script type='application/json' class='js-products'>
            {
                "cta": {"title":"Find a ALSI COLA"}
            }
    </script>
    <script type="text/javascript" src="{{ asset('js/widget.min.js') }}"></script>
    <span class='mobile-nav__spacer spacer h-[116px] block lg:hidden' style="background-color: #09a0be"></span>
    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        

        {{-- google recaptcha --}}
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        {{-- main style css --}}
    <link rel="stylesheet" href="{{ asset('css/preload.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
</head>

<!-- Page Loader -->
<div class="loader-bg">
    <div class="loader">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_D25XFw/juice_05.json" mode="bounce" background="transparent"  speed="1"  style="width: 400px; height: 400px;" hover loop  autoplay></lottie-player>
    </div>
</div>


<body class="home page-template page-template-homepage page-template-homepage-php page page-id-5 font-alter">
    <!-- desktop navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 block site-header">
        <div class='container w-full h-full mx-auto px-6'>
            <div class='w-full h-full flex eyebrow1 uppercase items-center'>
                <div class='gap-8 hidden lg:flex primary-menu w-5/12 div-header1'>

                    <div class='flex items-center'>
                        <a href='{{ url('/'.app()->getLocale()) }}' class="font-hover font-alter f-s">Home</a>
                    </div>
                    <div class='flex items-center'>
                        <a href='#our-history' class="font-hover font-alter f-s">OUR History</a>
                    </div>
                    
                    <div class='flex items-center'>
                        <a href='#about-us' class="font-hover font-alter f-s">About Us</a>
                    </div>
                    <div class='flex items-center'>
                        <a href='#gallery' class="font-hover font-alter f-s">Gallery</a>
                    </div>
                    <div class='flex items-center'>
                        <a href='#contact-us' class="font-hover font-alter f-s">Contact Us</a>
                    </div> 
                    <div class='flex items-center'> 
                            {{ $homeLang = '' }}
                            {{ Session::put('homeLang', '') }}
                            @if (request()->route()->getName() == 'home')

                                @if (strpos(Request::fullUrl(), '/en') === false)
                                    <a href="{{ url('/ar') }}" class="font-hover font-alter f-s"> عربي</a>
                                @else
                                    {{ $homeLang = 'ar' }}
                                    {{ Session::put('homeLang', 'ar') }}

                                    <a href="{{ url('/') }}"
                                    class="font-hover font-alter f-s">English</a>
                                @endif
                            @else
                                @if (strpos(Request::fullUrl(), '/ar') === false)
                                    <a href="{{ str_replace('/en', '/ar', Request::fullUrl()) }}"
                                    class="font-hover font-alter f-s"> عربي</a>
                                @else
                                    <!-- {{ $homeLang = 'en' }} -->

                                    <a href="{{ str_replace('/ar', '/en', Request::fullUrl()) }}"
                                    class="font-hover font-alter f-s">English</a>
                                @endif
                            @endif
                        
                    </div> 
                </div>
                <!-- mobile burger menu -->
                <div class='lg:hidden block w-1/3'>
                    <mobile-menu-component>
                        <button class='w-8 mm-open js-mm--open' aria-label='Open mobile menu'>
                            <svg class='w-full' viewBox="0 0 34 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8.5H33" stroke="#faf6f9" stroke-width="1.5" stroke-linecap="square" />
                                <path d="M1 15.5H33" stroke="#faf6f9" stroke-width="1.5" stroke-linecap="square" />
                                <path d="M1 1.5H33" stroke="#faf6f9" stroke-width="1.5" stroke-linecap="square" />
                            </svg>
                        </button>

                        <button class='w-5 mm-close js-mm--close' aria-label='Close mobile menu'>
                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                <path d="M1.35348 1.35355L21.1525 21.1525" stroke="#faf6f9" stroke-width="1.5"
                                    stroke-linecap="square" />
                                <path d="M21.1524 1.35355L1.35339 21.1525" stroke="#faf6f9" stroke-width="1.5"
                                    stroke-linecap="square" />
                            </svg>
                        </button>
                    </mobile-menu-component>
                </div>
                <!-- logo -->
                <div class='lg:w-2/12 w-1/3 flex justify-center'>
                    <a href='{{ url('/'.app()->getLocale()) }}' class='logo block'>
                        <img src="{{ asset('img/alsi/logo.png') }}" alt="" srcset="">
                    </a>
                </div>

                <div class='gap-8 justify-end lg:flex hidden secondary-menu w-5/12 div-color'>

                    <div class='flex items-center'>
                        <a href='#' target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class='flex items-center'>
                        <a href='#' target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>

                    <div class='flex items-center'>
                        <a href='#' target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class='flex items-center'>
                        <a href='#' target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class='flex items-center '>
                        <a href='#' target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>




            </div>
        </div>
    </header>
    <!-- navbar scroll  -->
    <pixel-component class='absolute w-1 h-1 top-200px'></pixel-component>


    <!-- mobile navbar -->
    <div class='js-mm mm fixed z-40 h-full inset-0 lg:hidden uppercase text-center font-alter' tabindex='0'>

        <div class='pb-16 pt-[116px] h-full p1 font-medium flex flex-col'>

            <nav class='w-full flex-auto overflow-y-scroll hide-scrollbar div-header2'>
                <ul class=' h3 relative z-[5] font-alter '>
                    <span class='block absolute top-px left-0 right-0 w-full opacity-25 div-span1'></span>

                    <li class='px-6 py-4 relative'>
                        <a href='{{ url('/'.app()->getLocale()) }}' class='js-mm-toggle font-alter'>Home</a>

                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>
                    
                    <li class='px-6 py-4 relative'>
                        <a href='#our-history' class='js-mm-toggle font-alter'>Our History</a>

                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>
                    <li class='px-6 py-4 relative'>
                        <a href='#about-us' class='js-mm-toggle font-alter'>About Us</a>

                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>
                    <li class='px-6 py-4 relative'>
                        <a href='#gallery' class='js-mm-toggle font-alter'>Gallery</a>

                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>
                    <li class='px-6 py-4 relative'>
                        <a href='#contact-us' class='js-mm-toggle font-alter'>Contact Us</a>

                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>

                    <li class='px-6 py-4 relative'>
                       {{ $homeLang = '' }}
                            {{ Session::put('homeLang', '') }}
                            @if (request()->route()->getName() == 'home')

                                @if (strpos(Request::fullUrl(), '/en') === false)
                                    <a href="{{ url('/ar') }}" class='js-mm-toggle'> عربي</a>
                                @else
                                    {{ $homeLang = 'ar' }}
                                    {{ Session::put('homeLang', 'ar') }}

                                    <a href="{{ url('/') }}"
                                    class='js-mm-toggle'>English</a>
                                @endif
                            @else
                                @if (strpos(Request::fullUrl(), '/ar') === false)
                                    <a href="{{ str_replace('/en', '/ar', Request::fullUrl()) }}"
                                    class='js-mm-toggle'> عربي</a>
                                @else
                                    <!-- {{ $homeLang = 'en' }} -->

                                    <a href="{{ str_replace('/ar', '/en', Request::fullUrl()) }}"
                                    class='js-mm-toggle'>English</a>
                                @endif
                            @endif 

                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>
                    <li class='px-6 py-4 relative'>

                        <a href='#' class='js-mm-toggle mg-h' target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href='#' class='js-mm-toggle mg-h' target="_blank"><i class="fab fa-instagram"></i></a>


                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>
                    <li class='px-6 py-4 relative'>


                        <a href='#' class='js-mm-toggle mg-h' target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href='#' class='js-mm-toggle mg-h' target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href='#' class='js-mm-toggle mg-h' target="_blank"><i class="fab fa-tiktok"></i></a>

                        <span class='block absolute bottom-0 left-0 right-0 w-full opacity-25 div-span1'></span>
                    </li>
                </ul>
            </nav>


        </div>

        <div class='absolute bottom-0 left-0 right-0'>


            <img src='' class=' ' alt='' loading='lazy' width='' height='' data-index='' />
        </div>

    </div>

    <div class='fixed top-0 left-0 right-0 z-30 w-full h-screen bg-overlay megamenu-overlay js-megamenu-overlay'></div>
    <div class='fixed top-0 left-0 right-0 z-40 w-full h-screen bg-overlay gate-overlay js-gate-overlay'></div>