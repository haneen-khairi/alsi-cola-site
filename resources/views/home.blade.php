@extends('layouts.default')
@section('content')
    {{-- /*-------------------------------------------------------------*/
//////////////////////        Content       //////////////////////
/*-------------------------------------------------------------*/ --}}


    <main role="main" class="site-main min-h-screen">
        <div class="wrapper ">

            <div class='lg:min-h-screen flex flex-wrap items-center relative div-1' data-section='hero' id="headers">
                <div class='container mx-auto px-4 lg:text-left text-center pb-0 pt-8 lg:py-32 block relative z-10 lg:z-0'>
                    <div class='lg:w-1/2 w-full lg:pr-20'>
                        <h1 class='h1 uppercase mb-4 lg:mb-10 font-alter'>Better DIFFERENT ALSI COLA TASTE SO COLD </h1>
                        <div class='h6 uppercase mb-8 lg:mb-10'>
                        </div>
                        <div>
                            <a href='#'
                                class='
        
        rounded-full
        overflow-hidden
        inline-block
        tracking-0_04em
        text-32px
        font-gotham-condensed
        uppercase
        leading-none
        font-bold
        whitespace-nowrap
        button
        border-2
       
      '
                                data-id='' data-is-bundle=''>
                                <span class='flex items-center w-full'>
                                    <span class='flex-auto pl-[24px] pr-[16px] font-alter'>Call US</span>
                                    <span
                                        class='flex items-center justify-center h-full p-6 icon-arrow-container rounded-full  bg-w'>
                                        <span class='wpx-30 inline-block color-b'>
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class='w-full lg:w-5/12 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:mt-0 -mt-8 overflow-hidden'>
                    <div class='pt-125p lg:pt-0 relative h-0 lg:h-full'>
                        <img src='{{ asset('img/alsi/5.png') }}' class='image-fill ' alt='' loading='lazy'
                            width='646' height='896' data-index='' />
                    </div>
                    <div class='absolute bottom-250px -right-10px w-64 z-10 hidden lg:block'>
                    </div>
                </div>
            </div>

            <div class='relative flex flex-col div-2'>
                <div class='absolute top-px left-0 right-0 transform -translate-y-full w-full'>
                    <svg class='w-full svg-trans' viewBox="0 0 1440 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M721 28.3988C527.5 70.958 207 123.411 0 9.34447V92H1440V53.9669C1266.5 -14.911 902 -11.4111 721 28.3988Z"
                            fill="#f6f6f6" />
                    </svg>
                </div>

                <div class='overflow-hidden block flex-auto relative'>
                    <div class='container mx-auto px-4 pt-80 lg:pt-40 pb-8'>
                        <h2
                            class=' 
              w-full
              lg:w-2/3
              mx-auto
              max-w-[838px]
              text-center
              h2
              color-blues
              uppercase font-alter
            '>
                            GIVE UP THE lorem,<br />NOT THE lorem
                        </h2>
                    </div>

                    <div class='absolute inset-0 w-full h-full z-10 mx-auto max-w-screen-2xl'>
                        <div
                            class='absolute -right-10px top-80px lg:top-auto design:top-[350px] lg:bottom-90px design:bottom-auto lg:-left-20px z-10'>
                            <div class='w-48 lg:w-87_5 text-center relative flex items-center justify-center opacity-png'>
                                <img src="{{ asset('img/alsi/cup.png') }}" alt="" srcset="">
                                <div class='w-full pt-100p'>
                                </div>
                            </div>
                        </div>

                        <div
                            class='absolute -left-10px top-10px lg:left-auto lg:top-auto lg:bottom-90px lg:-right-20px z-10 '>
                            <div class='w-48 lg:w-87_5 text-center relative flex items-center justify-center opacity-png'>
                                <img src="{{ asset('img/alsi/cola.png') }}" alt="" srcset="">
                            </div>
                        </div>
                    </div>

                    <div class='relative'>
                        <div class='relative lg:w-225 w-142 left-1/2 transform -translate-x-1/2'>
                            <div class='relative z-10'>
                                <img src='{{ asset('img/alsi/alsecola.png') }}' class=' ' alt=''
                                    loading='lazy' width='900' height='450' data-index='' />
                            </div>
                            <div class='absolute inset-0 w-full h-full'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='py-16 pb-24 lg:py-24 relative div-3 text-center'>
                <div class='overflow-hidden text-center'>
                    <div class='container mx-auto px-4 text-center d-flexes'>
                        <iframe class="video-div" width="1250" height="615"
                            src="https://www.youtube.com/embed/I_eRX3ogPTg" title="Alsi Cola" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; loop;"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class='py-16 pb-24 lg:py-24 relative div-3' data-section='product-carousel' id="our-history">
                <div class='overflow-hidden'>
                    <div class='container mx-auto px-4'>
                        <carousel-component data-id=''>
                            <div class='flex justify-center lg:justify-between w-full lg:mb-16 mb-10'>
                                <div class='lg:w-3/4'>
                                    <h2 class='h2 uppercase lg:text-left text-center font-alter div-4'>
                                        Our History Collection</h2>
                                </div>
                                <div class='lg:flex gap-3 hidden lg:items-end lg:w-1/4 justify-end'>
                                    <div>
                                        <button class='w-16 js-previous arrow rounded-full border-2'
                                            aria-label='Navigate to previous card icon-arrow'>
                                            <i class="fas fa-arrow-left icon-arrow"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <button class='w-16 js-next arrow rounded-full border-2'
                                            aria-label='Navigate to next card'>
                                            <i class="fas fa-arrow-right icon-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider main container -->
                            <div class="swiper pb-20">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide relative div-swipper">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="0"
                                            data-js-grassdoor-product>
                                            <div
                                                class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-5'>
                                                2022
                                            </div>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsi/5.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                                <img src='{{ asset('img/alsi/5.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                            </a>
                                            <div class='text-center mb-6'>
                                                <div class='h4 uppercase mb-2 font-alter color-bluesss'>lorem lorem lorem
                                                </div>
                                                <div class='h6 uppercase font-alter'>
                                                    <span class="font-alter color-bluesss"
                                                        data-js-grassdoor-product-price>250
                                                        ml</span>
                                                </div>
                                            </div>
                                            <div class='flex justify-center' data-js-grassdoor-product-form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-swipper">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="0"
                                            data-js-grassdoor-product>
                                            <div
                                                class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-6'>
                                                2022
                                            </div>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsi/6.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                                <img src='{{ asset('img/alsi/6.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                            </a>
                                            <div class='text-center mb-6'>
                                                <div class='h4 uppercase mb-2 font-alter color-blacks'>lorem lorem lorem
                                                </div>
                                                <div class='h6 uppercase'>
                                                    <span class="font-alter color-blacks"
                                                        data-js-grassdoor-product-price>250
                                                        ml</span>
                                                </div>
                                            </div>
                                            <div class='flex justify-center' data-js-grassdoor-product-form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-swipper">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="0"
                                            data-js-grassdoor-product>
                                            <div
                                                class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-7'>
                                                1999
                                            </div>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsi/4.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                                <img src='{{ asset('img/alsi/4.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                            </a>
                                            <div class='text-center mb-6'>
                                                <div class='h4 uppercase mb-2 font-alter color-reds'>lorem lorem lorem
                                                </div>
                                                <div class='h6 uppercase'>
                                                    <span class="font-alter color-reds" data-js-grassdoor-product-price>250
                                                        ml</span>
                                                </div>
                                            </div>
                                            <div class='flex justify-center' data-js-grassdoor-product-form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-swipper">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="0"
                                            data-js-grassdoor-product>
                                            <div
                                                class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-8'>
                                                1950
                                            </div>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsi/3.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                                <img src='{{ asset('img/alsi/3.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                            </a>
                                            <div class='text-center mb-6'>
                                                <div class='h4 uppercase mb-2 font-alter color-beige'>lorem lorem lorem
                                                </div>
                                                <div class='h6 uppercase'>
                                                    <span class="font-alter color-beige"
                                                        data-js-grassdoor-product-price>250
                                                        ml</span>
                                                </div>
                                            </div>
                                            <div class='flex justify-center' data-js-grassdoor-product-form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-swipper">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="1"
                                            data-js-grassdoor-product>
                                            <div
                                                class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-9'>
                                                1940
                                            </div>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsi/2.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                                <img src='{{ asset('img/alsi/2.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                            </a>
                                            <div class='text-center mb-6'>
                                                <div class='h4 uppercase mb-2 font-alter color-greys'>lorem lorem lorem
                                                </div>
                                                <div class='h6 uppercase'>
                                                    <span class="font-alter color-greys"
                                                        data-js-grassdoor-product-price>250
                                                        ml</span>
                                                </div>
                                            </div>
                                            <div class='flex justify-center' data-js-grassdoor-product-form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-swipper">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle=""
                                            data-js-grassdoor-product>
                                            <div
                                                class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-10'>
                                                1943
                                            </div>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsi/1.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='734' height='1068'
                                                    data-index='' />
                                                <img src='{{ asset('img/alsi/1.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='704' height='1024'
                                                    data-index='' />
                                            </a>
                                            <div class='text-center mb-6'>
                                                <div class='h4 uppercase mb-2 font-alter color-bluess'>lorem lorem lorem
                                                </div>
                                                <div class='h6 uppercase'>
                                                    <span class="font-alter color-bluess"
                                                        data-js-grassdoor-product-price>250
                                                        ml</span>
                                                </div>
                                            </div>
                                            <div class='flex justify-center' data-js-grassdoor-product-form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination lg:hidden"></div>
                            </div>
                        </carousel-component>
                    </div>
                </div>
            </div>

            <div class='
        relative
        pt-16
        pb-24
        lg:pt-24
        lg:pb-8
        z-[5]
        div-11'
                data-section='quotes'>
                <div class='absolute top-px left-0 right-0 transform -translate-y-full'>
                    <div class='absolute top-px left-0 right-0 transform -translate-y-full w-full'>
                        <svg class='w-full svg-trans' viewBox="0 0 1440 92" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M721 28.3988C527.5 70.958 207 123.411 0 9.34447V92H1440V53.9669C1266.5 -14.911 902 -11.4111 721 28.3988Z"
                                fill="#5496c8" />
                        </svg>
                    </div>

                    {{-- <i class="fas fa-arrow-left icon-arrow"></i> --}}
                </div>
                <div
                    class='
                absolute
                top-1/2
                transform
                -translate-y-1/2
                -left-150px
                hidden
                lg:block
                w-[441px]
                h-[565px]
            ' id="about-us">
                    <img src='{{ asset('img/alsi/ice1.png') }}' class=' object-center object-cover block w-full h-full'
                        alt='' loading='lazy' width='441' height='565' data-index='' />
                </div>
            </div>
            <div class='pt-16 lg:pt-40  relative div-12' data-section='split'>
                <div class='absolute -left-40px top-1/2 lg:w-28'>
                    <div class='w-full pt-100p'>
                        <img src="{{ asset('img/alsi/music.png') }}" alt="">
                    </div>
                </div>
                <div class='container mx-auto px-4 relative z-20' >
                    <div class='lg:w-7/12 w-full lg:text-left text-center relative'>
                        <div class='absolute right-30px bottom-0 w-12 lg:w-16'>
                            <div class='w-full pt-100p'>
                                <img src="{{ asset('img/alsi/music.png') }}" alt="">
                            </div>
                        </div>
                        <div class='absolute right-80px bottom-80px w-6'>
                            <div class='w-full pt-100p'>
                                <img src="{{ asset('img/alsi/music.png') }}" alt="">
                            </div>
                        </div>
                        <div
                            class='
                    uppercase
                    pb-[38px]
                    lg:pb-16
                  ' >
                            {{-- <h3 class='h1 mb-6 lg:mb-10 font-alter'>IT’S ALSI COLA<br />WITHOUT<br /> Suger</h3> --}}
                            <h3 class='h1 font-alter'>ABOUT ALSI COLA<br /> <br /> </h3>
                            <div
                                class='
                        h6
                        mx-auto
                        lg:ml-0
                        w-full
                        max-w-[260px]
                        lg:max-w-[288px]
                    '>
                            </div>
                            <p class="font-alter lg:mb-10  font-about">
                                ALSI COLA is about life's celebrations,creating bonds and uniting generations.ALSI COLA
                                connects us to something deeper,to the history,art and culture of our great civilizations.
                                Our people have instilled philosophies,changed science, created art,made history and put
                                forth noble humanitarian efforts that have influenced the greater good of the world.ALS COLA
                                represents the honor of our legacies and the recognition of the positive impact our
                                heritage.
                            </p>
                            <div
                                class='
                        relative
                        bottom-[-68px]
                        lg:bottom-0
                        lg:mt-[64px]
                        h-[62px]
                      '>
                                <a href='tel:'
                                    class='
        
        rounded-full
        overflow-hidden
        inline-block
        tracking-0_04em
        text-32px
        font-gotham-condensed
        uppercase
        leading-none
        font-bold
        whitespace-nowrap
        button
        border-2
      '
                                    data-id='' data-is-bundle=''>

                                    <span class='flex items-center w-full hover-call'>
                                        <span
                                            class='flex items-center justify-center h-full p-6 icon-arrow-container rounded-full font-alter'>
                                            call us
                                        </span>
                                    </span>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class='lg:w-5/12 lg:absolute lg:right-0 lg:top-0 lg:bottom-0 w-full pt-100p lg:pt-0 relative'>
                    <img src='{{ asset('img/a2.png') }}' class='image-fill ' alt='' loading='lazy'
                        width='120' height='160' data-index='' />
                </div>
            </div>
            <div class='mtt-mbb relative div-div1' data-section='product-carousel' id="gallery">
                <div class='overflow-hidden'>
                    <div class='container mx-auto px-4'>
                        <carousel-component data-id=''>
                            <div class='flex justify-center lg:justify-between w-full lg:mb-16 mb-10'>
                                <div class='lg:w-3/4'>
                                    <h2 class='h2 uppercase lg:text-left text-center font-alter div-div2'>
                                        ALSI
                                        COLA FANS
                                        FAVES</h2>
                                </div>
                                <div class='lg:flex gap-3 hidden lg:items-end lg:w-1/4 justify-end'>
                                    <div>
                                        <button class='w-16 js-previous arrow rounded-full border-2 '
                                            aria-label='Navigate to previous card' data-id=''>
                                            <i class="fas fa-arrow-left icon-arrow"></i>
                                        </button>
                                    </div>
                                    <div>

                                        <button class='w-16 js-next arrow rounded-full border-2 '
                                            aria-label='Navigate to next card' data-id=''>
                                            <i class="fas fa-arrow-right icon-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider main container -->
                            <div class="swiper ">

                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->

                                    <div class="swiper-slide relative div-div2">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="1"
                                            data-js-grassdoor-product>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsipost1.jpg') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='735' height='1068'
                                                    data-index='' />

                                                <img src='{{ asset('img/alsipost9.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='734' height='1068'
                                                    data-index='' />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-div2">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle=""
                                            data-js-grassdoor-product>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>

                                                <img src='{{ asset('img/alsipost7.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='734' height='1067'
                                                    data-index='' />

                                                <img src='{{ asset('img/alsipost8.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='734' height='1067'
                                                    data-index='' />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-div2">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle=""
                                            data-js-grassdoor-product>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsipost3.jpg') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='734' height='1067'
                                                    data-index='' />

                                                <img src='{{ asset('img/alsipost2.jpg') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='734' height='1068'
                                                    data-index='' />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-div2">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="0"
                                            data-js-grassdoor-product>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>

                                                <img src='{{ asset('img/alsipost4.jpg') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='735' height='1067'
                                                    data-index='' />

                                                <img src='{{ asset('img/alsi.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='735' height='1068'
                                                    data-index='' />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-div2">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="1"
                                            data-js-grassdoor-product>
                                            <a href='#' class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsipost5.jpg') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='735' height='1068'
                                                    data-index='' />

                                                <img src='{{ asset('img/l1.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='734' height='1068'
                                                    data-index='' />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide relative div-div2">
                                        <div class='relative mr-2 ' data-id="" data-is-bundle="1"
                                            data-js-grassdoor-product>
                                            <a class='w-full relative mb-6 pt-150p block card'>
                                                <img src='{{ asset('img/alsipost6.jpg') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                                                    alt='' loading='lazy' width='735' height='1068'
                                                    data-index='' />

                                                <img src='{{ asset('img/s3.png') }}'
                                                    class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                                                    alt='' loading='lazy' width='734' height='1068'
                                                    data-index='' />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination lg:hidden"></div>
                            </div>
                        </carousel-component>
                    </div>
                </div>
            </div>
<div id="contact-us"></div>
            <div class='pb-24 relative div-3 text-center pdpd' >
                <div class='overflow-hidden text-center'>
                    <div class='container mx-auto px-4 text-center d-flexes'>

                        <h2
                            class=' 
                  w-full
                  lg:w-2/3
                  mx-auto
                  max-w-[838px]
                  text-center
                  h2
                  color-blues
                  uppercase font-alter
                '>
                            Contact Us
                        </h2>
                    </div>
                    <div class='container mx-auto px-4 mtt-4 pb-8'>

                        <div>
                            <div class="text-center text-flex-alert">
                                @if (session()->has('success'))
                                    <div class="alert alert-success font-alter" role="alert">
                                        {{ session('success') }}
                                    </div>
                            </div>
                            @endif

                            <form action="{{ route('ContactRequest') }}" method="post">
                                @csrf

                                <div class="d-flexess">
                                    <div class="mb-3 center-flex">
                                        <!-- <label for="" class=" label-input font-alter">Full Name</label> -->
                                        <input type="text" class="ml-2 input-groups font-alter" name="name"
                                            id="name" placeholder="Your Name">
                                        @error('name')
                                            <div class="text-danger alert-input">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 center-flex">
                                        <!-- <label for="" class=" label-input font-alter">Email Address</label> -->
                                        <input type="email" class="ml-2 input-groups font-alter" name="email"
                                            id="email" placeholder="Your Email">
                                        @error('email')
                                            <div class="text-danger alert-input">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                       
                                    </div>
                                </div>
                                <div class="d-flexess">
                                    <div class="mb-3 center-flex">
                                        <!-- <label for="" class=" label-input font-alter">Phone Number</label> -->
                                        <input type="text" class="ml-2 input-groups font-alter" name="phone"
                                            id="phone" placeholder="Your Phone Number">
                                   
                                        @error('phone')
                                            <div class="text-danger alert-input">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    
                                    </div>
                                    <div class="mb-3 center-flex">
                                        <!-- <label for="" class=" label-input font-alter">Your Subject</label> -->
                                        <input type="text" class="ml-2 input-groups font-alter" name="subject"
                                            id="subject" placeholder="Your Subject"> 
                                        @error('subject')
                                            <div class="text-danger alert-input">
                                                ( {{ $message }} )
                                            </div>
                                        @enderror
                                     
                                    </div>
                                </div>
                                <div class="mb-3 center-flex">
                                    <!-- <label for="" class="label-input font-alter">Your Message</label> -->
                                    <textarea class="input-groupss font-alter" name="message" id="message" rows="3"
                                        placeholder="Your Message here"></textarea> 
                                    @error('message')
                                        <div class="text-danger alert-input">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                   
                                </div>
                                <div class="mb-3 center-flex">
                                    <div class="g-recaptcha" data-sitekey="6LfzfawgAAAAAN1zYzuQC5zFeUWwslR9KaoksoGW">
                                    </div> 
                                    @error('g-recaptcha-response')
                                        <div class="text-danger alert-input">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                                <div class="mb-3 d-flexess">
                                    <button class="font-alter btn-sub" id="success" type="submit">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main>



@stop
