<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zia Dev</title>

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <!--
      - Custom css and js from vite
    -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
          rel="stylesheet">
</head>

<body>

<div style="z-index: 9999;" class="header w-full top-0 fixed">
    <div class="header-box mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 w-full">
        <div class="top-nav relative flex h-16 justify-between gap-5 items-center">
            <div class="nav-left flex flex-none items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex h-full flex-shrink-0 items-center">
                    <svg class="zia-logo block h-12 w-auto m-2" viewBox="0 0 1000 1200"
                         xmlns="http://www.w3.org/2000/svg" aria-label="Logo">
                        <path d="M490.471 0L608.173 131.827L490.471 263.653L372.769 131.827L490.471 0Z"
                              fill="#f9c537"/>
                        <path d="M240.942 453H740" stroke="#f9c537" stroke-width="90" stroke-linecap="square"/>
                        <path d="M490.47 453V914.925" stroke="#f9c537" stroke-width="90" stroke-linecap="square"/>
                        <path d="M720.226 495.373L259.774 888.97" stroke="#f9c537" stroke-width="90"
                              stroke-linecap="square"/>
                        <path d="M240 931.343H739.058" stroke="#f9c537" stroke-width="90" stroke-linecap="square"/>
                    </svg>
                    <a href="/">

                    </a>
                </div>
            </div>
            <div class="nav-center flex-1">
                <div class="flex gap-3 text-xs sm:text-sm">
                    <a
                        class="nav-item
                                ml-8 inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
                        href="{{ route('portfolio.index') }}">Portfolio</a>

                    <a
                        class="nav-item
                                ml-8 inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 "
                        href="{{ route('blog.index') }}">
                        Blog</a>
                    <a class="nav-item
                            ml-8 inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 "
                       href="{{ route('contact') }}">Contact</a>

                </div>
            </div>

            <div
                class="nav-right flex-none absolute inset-y-0 right-5 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="relative ml-3 flex items-center"><a
                        class="mr-8 hidden items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:text-gray-700 focus:outline-none sm:block dark:text-gray-400 dark:hover:text-gray-200"
                        href="/login">Login</a>
                    <div class="flex-shrink-0"><a
                            class="join-btn relative inline-flex items-center rounded-md border border-transparent  px-8 py-1.5 text-sm font-medium "
                            href="/join"><span>Join</span></a></div>
                </div>
            </div>
        </div>
    </div>


</div>


<main>

    <article
        class="max-w-[1200px] w-full sm:px-20 relative flex mx-auto h-[320px] py-10 overflow-hidden justify-center sm:justify-start sm:items-end">
        <div class="flex ml-2 w-3/5 flex-col gap-5 items-center sm:items-start ">
            <div class="text-3xl  flex flex-col items-center sm:items-start sm:text-4xl font-bold"><p
                    class="text-sm mb-2 font-normal text-white/50">place holder</p>
                <h2 class="h2 bio-text">Hello world,</h2>
                <div class="flex items-center">
                    <div class="text-primary"><span class="h2 bio-type">Full stack</span></div>
                    <div class="w-[1px] h-7 md:h-8 ml-1 mb-[-4px] mr-2 bg-white animate-typewriter-cursor"></div>
                    <h2 class="h2 bio-text">Developer</h2></div>
                <h2 class="h2 bio-text">ZiA</h2></div>
            <div class="flex w-full gap-1 ">
                <div class="w-1/5 sidebar-info">
                    <button class="info_more-btn" data-sidebar-btn>
                        <ion-icon name="chevron-down"></ion-icon>
                        <span>Show More</span>
                    </button>
                </div>


                </div>
            </div>
        </div>
        <div class="w-2/5 flex justify-center items-center h-full">
            <img alt="me" loading="lazy" width="1000" height="1000" decoding="async" data-nimg="1"
                 class=" w-[380px] h-[380px]  absolute bottom-[-50px] hidden sm:block"
                 src="{{asset('images/my-avatar.png')}}">
        </div>

    </article>


    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>


        <div class="sidebar-info_more">
{{--            <header>--}}
{{--                <h2 class="h2 article-title">About me</h2>--}}
{{--            </header>--}}

            <section class="about-text">
                <p>
                    I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and
                    print media.
                    I enjoy
                    turning complex problems into simple, beautiful and intuitive designs.
                </p>

                <p>
                    My job is to build your website so that it is functional and user-friendly but at the same time
                    attractive.
                    Moreover, I
                    add personal touch to your product and make sure that is eye-catching and easy to use. My aim is
                    to
                    bring
                    across your
                    message and identity in the most creative way. I created web design for many famous brand
                    companies.
                </p>
            </section>

            <div class="separator"></div>

            <ul class="contacts-list">

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Email</p>

                        <a href="mailto:developer.jiheuilee@gmail.com" class="contact-link">developer.jiheuilee@gmail.com</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Location</p>

                        <address>Vancouver, BC, Canada</address>
                    </div>

                </li>

            </ul>

            <div class="separator"></div>

            <ul class="social-list">

                <li class="social-item">
                    <a href="https://www.linkedin.com/in/jiheuilee/" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="https://github.com/developer-jiheui" class="social-link">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
            </ul>

        </div>

    </aside>


    <!--
      - #main-content
    -->
        <article class="about  active" data-page="about">

            <!--
              - service
            -->

            <section class="service">

                <h3 class="h3 service-title">What i'm doing</h3>

                <ul class="service-list">

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('images/icon-design.svg')}}" alt="design icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Web design</h4>

                            <p class="service-item-text">
                                The most modern and high-quality design made at a professional level.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('images/icon-dev.svg')}}" alt="design icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Web development</h4>

                            <p class="service-item-text">
                                High-quality development of sites at the professional level.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('images/icon-app.svg')}}" alt="design icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Mobile apps</h4>

                            <p class="service-item-text">
                                Professional development of applications for iOS and Android.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('images/icon-photo.svg')}}" alt="design icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Photography</h4>

                            <p class="service-item-text">
                                I make high-quality photos of any category at a professional level.
                            </p>
                        </div>

                    </li>

                </ul>

            </section>


            <!--
              - testimonials
            -->

            <section class="testimonials">

                <h3 class="h3 testimonials-title">Testimonials</h3>

                <ul class="testimonials-list has-scrollbar">

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">

                                <img src="{{asset('images/avatars/1.png')}}" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the
                                    work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="{{asset('images/avatars/2.png')}}" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the
                                    work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="{{asset('images/avatars/3.png')}}" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the
                                    work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="{{asset('images/avatars/4.png')}}" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the
                                    work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                </ul>

            </section>


            <!--
              - testimonials modal
            -->

            <div class="modal-container" data-modal-container>

                <div class="overlay" data-overlay></div>

                <section class="testimonials-modal">

                    <button class="modal-close-btn" data-modal-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                    <div class="modal-img-wrapper">
                        <figure class="modal-avatar-box">
                            <img src="{{asset('images/avatars/1.png')}}" width="80" data-modal-img>
                        </figure>

                        <img src="{{asset('images/icon-quote.svg')}}" alt="quote icon">
                    </div>

                    <div class="modal-content">

                        <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                        <time datetime="2021-06-14">14 June, 2021</time>

                        <div data-modal-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done. She has a
                                lot of experience
                                and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                ullamcous
                                cididt
                                consectetur adipiscing
                                elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                            </p>
                        </div>

                    </div>

                </section>

            </div>


            <!--
              - clients
            -->

            <section class="clients">

                <h3 class="h3 clients-title">Clients</h3>

                <ul class="clients-list has-scrollbar">

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('images/logos/logo-1-color.png')}}" alt="client logo">
                        </a>
                    </li>

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('images/logos/logo-2-color.png')}}" alt="client logo">
                        </a>
                    </li>

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('images/logos/logo-3-color.png')}}" alt="client logo">
                        </a>
                    </li>

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('images/logos/logo-4-color.png')}}" alt="client logo">
                        </a>
                    </li>
                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('images/logos/logo-5-color.png')}}" alt="client logo">
                        </a>
                    </li>
                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('images/logos/logo-6-color.png')}}" alt="client logo">
                        </a>
                    </li>

                </ul>

            </section>

        </article>



    </div>

</main>


<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>


{{--@extends('layouts.app')--}}
{{--@section('content')--}}

{{--    <article class="home" data-page="home">--}}

{{--        <header>--}}
{{--            <h2 class="h2 article-title">About me</h2>--}}
{{--        </header>--}}

{{--        <section class="about-text">--}}
{{--            <p>--}}
{{--                I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print--}}
{{--                media.--}}
{{--                I enjoy turning complex problems into simple, beautiful and intuitive designs.--}}
{{--            </p>--}}

{{--            <p>--}}
{{--                My job is to build your website so that it is functional and user-friendly but at the same time--}}
{{--                attractive.--}}
{{--                Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use.--}}
{{--                My aim is to bring across your message and identity in the most creative way. I created web design--}}
{{--                for many famous brand companies.--}}
{{--            </p>--}}
{{--        </section>--}}

{{--        <section class="service">--}}
{{--            <h3 class="h3 service-title">What i'm doing</h3>--}}

{{--            <ul class="service-list">--}}
{{--                <li class="service-item">--}}
{{--                    <div class="service-icon-box">--}}
{{--                        <img src="{{ asset('images/icon-design.svg') }}" alt="design icon" width="40">--}}
{{--                    </div>--}}

{{--                    <div class="service-content-box">--}}
{{--                        <h4 class="h4 service-item-title">Web design</h4>--}}
{{--                        <p class="service-item-text">--}}
{{--                            The most modern and high-quality design made at a professional level.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="service-item">--}}
{{--                    <div class="service-icon-box">--}}
{{--                        <img src="{{ asset('images/icon-dev.svg') }}" alt="development icon" width="40">--}}
{{--                    </div>--}}

{{--                    <div class="service-content-box">--}}
{{--                        <h4 class="h4 service-item-title">Web development</h4>--}}
{{--                        <p class="service-item-text">--}}
{{--                            High-quality development of sites at the professional level.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="service-item">--}}
{{--                    <div class="service-icon-box">--}}
{{--                        <img src="{{ asset('images/icon-app.svg') }}" alt="app icon" width="40">--}}
{{--                    </div>--}}

{{--                    <div class="service-content-box">--}}
{{--                        <h4 class="h4 service-item-title">Mobile apps</h4>--}}
{{--                        <p class="service-item-text">--}}
{{--                            Professional development of applications for iOS and Android.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="service-item">--}}
{{--                    <div class="service-icon-box">--}}
{{--                        <img src="{{ asset('images/icon-photo.svg') }}" alt="photo icon" width="40">--}}
{{--                    </div>--}}

{{--                    <div class="service-content-box">--}}
{{--                        <h4 class="h4 service-item-title">Photography</h4>--}}
{{--                        <p class="service-item-text">--}}
{{--                            I make high-quality photos of any category at a professional level.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </section>--}}

{{--        <section class="testimonials">--}}
{{--            <h3 class="h3 testimonials-title">Testimonials</h3>--}}

{{--            <ul class="testimonials-list has-scrollbar">--}}

{{--                <li class="testimonials-item">--}}
{{--                    <div class="content-card" data-testimonials-item>--}}
{{--                        <figure class="testimonials-avatar-box">--}}
{{--                            <img src="{{ asset('images/avatars/1.png') }}" width="60" data-testimonials-avatar>--}}
{{--                        </figure>--}}

{{--                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel Lewis</h4>--}}

{{--                        <div class="testimonials-text" data-testimonials-text>--}}
{{--                            <p>--}}
{{--                                Richard was hired to create a corporate identity. We were very pleased with the work--}}
{{--                                done.--}}
{{--                                She has a lot of experience and is very concerned about the needs of client.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="testimonials-item">--}}
{{--                    <div class="content-card" data-testimonials-item>--}}
{{--                        <figure class="testimonials-avatar-box">--}}
{{--                            <img src="{{ asset('images/avatars/2.png') }}" width="60" data-testimonials-avatar>--}}
{{--                        </figure>--}}

{{--                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica Miller</h4>--}}

{{--                        <div class="testimonials-text" data-testimonials-text>--}}
{{--                            <p>--}}
{{--                                Richard was hired to create a corporate identity. We were very pleased with the work--}}
{{--                                done.--}}
{{--                                She has a lot of experience and is very concerned about the needs of client.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="testimonials-item">--}}
{{--                    <div class="content-card" data-testimonials-item>--}}
{{--                        <figure class="testimonials-avatar-box">--}}
{{--                            <img src="{{ asset('images/avatars/3.png') }}" width="60" data-testimonials-avatar>--}}
{{--                        </figure>--}}

{{--                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily Evans</h4>--}}

{{--                        <div class="testimonials-text" data-testimonials-text>--}}
{{--                            <p>--}}
{{--                                Richard was hired to create a corporate identity. We were very pleased with the work--}}
{{--                                done.--}}
{{--                                She has a lot of experience and is very concerned about the needs of client.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="testimonials-item">--}}
{{--                    <div class="content-card" data-testimonials-item>--}}
{{--                        <figure class="testimonials-avatar-box">--}}
{{--                            <img src="{{ asset('images/avatars/4.png') }}" width="60" data-testimonials-avatar>--}}
{{--                        </figure>--}}

{{--                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry William</h4>--}}

{{--                        <div class="testimonials-text" data-testimonials-text>--}}
{{--                            <p>--}}
{{--                                Richard was hired to create a corporate identity. We were very pleased with the work--}}
{{--                                done.--}}
{{--                                She has a lot of experience and is very concerned about the needs of client.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--        </section>--}}

{{--        @include('components.modal.testimonial')--}}

{{--        <section class="clients">--}}
{{--            <h3 class="h3 clients-title">Clients</h3>--}}

{{--            <ul class="clients-list has-scrollbar">--}}
{{--                <li class="clients-item">--}}
{{--                    <a href="#"><img src="{{ asset('images/logos/logo-1-color.png') }}" alt="client logo"></a>--}}
{{--                </li>--}}
{{--                <li class="clients-item">--}}
{{--                    <a href="#"><img src="{{ asset('images/logos/logo-2-color.png') }}" alt="client logo"></a>--}}
{{--                </li>--}}
{{--                <li class="clients-item">--}}
{{--                    <a href="#"><img src="{{ asset('images/logos/logo-3-color.png') }}" alt="client logo"></a>--}}
{{--                </li>--}}
{{--                <li class="clients-item">--}}
{{--                    <a href="#"><img src="{{ asset('images/logos/logo-4-color.png') }}" alt="client logo"></a>--}}
{{--                </li>--}}
{{--                <li class="clients-item">--}}
{{--                    <a href="#"><img src="{{ asset('images/logos/logo-5-color.png') }}" alt="client logo"></a>--}}
{{--                </li>--}}
{{--                <li class="clients-item">--}}
{{--                    <a href="#"><img src="{{ asset('images/logos/logo-6-color.png') }}" alt="client logo"></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </section>--}}

{{--    </article>--}}

{{--@</>
0
