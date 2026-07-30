<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zia Dev</title>

    <link rel="icon" href="{{ asset('images/logos/logo-y.png') }}" type="image/png">
    <!--
      - Custom css and js from vite
    -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"/>

</head>

<body>

{{-- HEADER NAV--}}
<div style="z-index: 9999;" class="header w-full top-0 fixed">
    <div class="header-box mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 w-full">
        <div class="top-nav relative flex h-16 justify-between gap-5 items-center">
            <div class="nav-left absolute inset-y-0 left-0 flex items-center">
                <div class="reorder-box absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button
                        class="reorder-btn inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none dark:hover:bg-gray-600 dark:hover:text-gray-400 dark:focus:bg-gray-600 dark:focus:text-gray-400">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

            </div>
            <div class="nav-center flex flex-1 items-center justify-center sm:items-center sm:justify-start">
                <div class="logo-box flex flex-shrink-0 items-center">
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
                <div class="nav-page hidden sm:ml-6 sm:flex">
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
                class="nav-right absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="relative ml-3 flex items-center"><a
                        class="nav-login hidden sm mr-8 items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:text-gray-700 focus:outline-none sm:block dark:text-gray-400 dark:hover:text-gray-200"
                        href="/login">Login</a>
                    <div class="flex-shrink-0"><a
                            class="join-btn relative inline-flex items-center rounded-md border border-transparent px-8 py-1.5 text-sm font-medium "
                            href="/join"><span>Join</span></a></div>
                </div>
            </div>
        </div>
    </div>

</div>

<main>

    {{--BIO--}}
    <div
        class="bio w-full max-w-7xl   flex mx-auto
        h-80 sm:h-100 md:h-120 lg:h-140
        pt-10
        sm:px-10 lg:px-25 xl:px-30
        ">
        <div class="flex h-full w-full  overflow-hidden justify-center sm:justify-end sm:items-end relative">
            <div
                class="flex ml-2 w-full lg:w-3/5 flex-col gap-5 items-center justify-center sm:items-start sm:justify-start">
                <div
                    class="h-4/5 text-3xl flex gap-1.5 flex-col items-center sm:items-start md:text-4xl lg:text-5xl font-bold justify-center">
                    {{--                    <p class="text-sm mb-2 font-normal text-white/50">place holder</p>--}}
                    <div class="flex pb-10">
                        <h2 class="bio-text">
                            Hello World
 🤚                       </h2>

{{--                        <div class="w-11/12 flex justify-center items-center">--}}
{{--                        --}}
{{--                        </div>--}}
{{--                        <div class="aspect-square">--}}
{{--                            @include('components.globe')--}}
{{--                        </div>--}}
                    </div>

                    <h2 class=" bio-text pb-2">I am ZiA,</h2>
                    <div class="flex items-center">
                        <div class="text-primary"><span class="bio-type">Full stack</span></div>
                        <div class="w-[1px] h-7 md:h-8 ml-1 mb-[-4px] mr-2 bg-white animate-typewriter-cursor"></div>
                        <h2 class="bio-text">Developer</h2></div>
                </div>

                <script>



                </script>
                <div class="flex w-full justify-center items-end sm:items-start sm:justify-start gap-2 mt-10">
                    <div class="w-1/5  sidebar-info">
                        <button class="info_more-btn" data-sidebar-btn>
                            <ion-icon name="chevron-down"></ion-icon>
                            <span class="text-xs xl:text-base">Show More</span>
                        </button>
                    </div>
                    <div class="w-1/7 sidebar-info">
                        <button class="download-btn" data-sidebar-btn>
                            <span class="text-xs xl:text-base">CV</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class=" lg:w-2/5 flex justify-center items-center h-full sm:block hidden overflow-hidden">
                <img alt="me" loading="lazy" width="1000" height="1000" decoding="async" data-nimg="1"
                     class=" w-80 md:w-95 lg:w-120 xl:w-130 aspect-square absolute
                     top-[-0.5rem] right-[-2.5rem] "
                     src="{{asset('images/my-avatar.png')}}">
            </div>
        </div>


    </div>


    <!--
      - #SIDEBAR
    -->

{{--    <article class="m-1 sm:m-3 lg:m-4">--}}
        <article >

        <aside class="sidebar" data-sidebar>
            <div class="sidebar-info_more">
                <section class="about-text">
                    <p>
                        I'm Creative Director and UI/UX Designer from South Korea, working in web development and
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
    </article>


    {{--SKILL    --}}

{{--    <section class="bg-neutral-950" style="clip-path:polygon(0 0, 100% 0, 100% 90%, 0 100%)">--}}
{{--        @include('components.globe-gl')--}}
{{--    </section>--}}

    <section class="bg-neutral-950" style="clip-path:polygon(0 0, 100% 0, 100% 90%, 0 100%)">
        <div class="max-w-[1100px] mx-auto p-10 pb-16">
            <h3 class="text-3xl font-bold">Main Skills</h3><p class="text-sm text-white/50 mt-2">제가 가장 잘 다루는 기술들을 소개해드릴게요!</p><div class="flex gap-3 flex-col my-5"><div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">React</p><div class="w-full h-[5px] bg-neutral-800 rounded-full"><div class="h-[5px] bg-primary rounded-full" style="width:90%"></div></div></div><div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">Next.js</p><div class="w-full h-[5px] bg-neutral-800 rounded-full"><div class="h-[5px] bg-primary rounded-full" style="width:87%"></div></div></div><div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">Typescript</p><div class="w-full h-[5px] bg-neutral-800 rounded-full"><div class="h-[5px] bg-primary rounded-full" style="width:80%"></div></div></div><div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">Rust</p><div class="w-full h-[5px] bg-neutral-800 rounded-full"><div class="h-[5px] bg-primary rounded-full" style="width:71%"></div></div></div><div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">Springboot</p><div class="w-full h-[5px] bg-neutral-800 rounded-full"><div class="h-[5px] bg-primary rounded-full" style="width:52%"></div></div></div><div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">C#</p><div class="w-full h-[5px] bg-neutral-800 rounded-full"><div class="h-[5px] bg-primary rounded-full" style="width:48%"></div></div></div></div>
        </div>
    </section>

        <section class="bg-neutral-950" style="clip-path:polygon(0 0, 100% 0, 100% 90%, 0 100%)">
            <div class="max-w-[1100px] mx-auto p-10 pb-16">
                <h3 class="text-3xl font-bold">Main Skills</h3>
            </div>

            <article class="portfolio" data-page="portfolio">

                <header>
                    <h2 class="h2 article-title">Portfolio</h2>
                </header>

                <section class="projects">

                    <ul class="filter-list">

                        <li class="filter-item">
                            <button class="active" data-filter-btn>All</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Web design</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Applications</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Web development</button>
                        </li>

                    </ul>

                    <div class="filter-select-box">

                        <button class="filter-select" data-select>

                            <div class="select-value" data-selecct-value>Select category</div>

                            <div class="select-icon">
                                <ion-icon name="chevron-down"></ion-icon>
                            </div>

                        </button>

                        <ul class="select-list">

                            <li class="select-item">
                                <button data-select-item>All</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Web design</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Applications</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Web development</button>
                            </li>

                        </ul>

                    </div>

                    <ul class="project-list">

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                                </figure>

                                <h3 class="project-title">Finance</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                                </figure>

                                <h3 class="project-title">Orizon</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                                </figure>

                                <h3 class="project-title">Fundo</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                                </figure>

                                <h3 class="project-title">Brawlhalla</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                                </figure>

                                <h3 class="project-title">DSM.</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                                </figure>

                                <h3 class="project-title">MetaSpark</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                                </figure>

                                <h3 class="project-title">Summary</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                                </figure>

                                <h3 class="project-title">Task Manager</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                                </figure>

                                <h3 class="project-title">Arrival</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                    </ul>

                </section>

            </article>
            <!--
              - portfolios
            -->

            @if(isset($projects) && count($projects))

                <section class="recent-works">
                    <h3 class="h3 service-title">Recent works</h3>

                    <div class="recent-scroll-wrap">

                        <ul class="recent-list has-scrollbar" id="recent-list">
                            @foreach ($projects as $p)
                                <li class="recent-item">
                                    <a href="{{ route('page.portfoliofull', ['key' => $p['slug'] ?: $p['id']]) }}"
                                       class="recent-card">
                                        <figure class="recent-thumb">
                                            <img
                                                src="{{ asset($p['cover'] ?? 'images/default-icon.svg') }}"
                                                alt="{{  $p['name']}}"
                                                loading="lazy"
                                            >
                                        </figure>

                                        <div class="recent-body">
                                            <h4 class="h5 recent-title">{{ $p['name'] }}</h4>
                                            <p class="recent-desc">
                                                {{ \Illuminate\Support\Str::limit(strip_tags($p['summary']), 80) }}
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>


                    </div>
                </section>
            @endif


        </section>


    <section class="bg-neutral-950" style="clip-path:polygon(0 0, 100% 0, 100% 90%, 0 100%)">


        <div class="max-w-7xl mx-auto px-20 pt-10 pb-16"><h3 class="text-3xl font-bold h2">Projects</h3>
            <p class="text-sm text-white/50 mt-2">Recent projects I've worked on</p>
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

            <div class="filter-select-box">
                <button class="filter-select" data-select>
                    <div class="select-value" data-selecct-value>Select category</div>
                    <div class="select-icon">
                        <ion-icon name="chevron-down"></ion-icon>
                    </div>
                </button>

                <ul class="select-list">
                    <li class="select-item">
                        <button data-select-item>All</button>
                    </li>
                    <li class="select-item">
                        <button data-select-item>Web design</button>
                    </li>
                    <li class="select-item">
                        <button data-select-item>Applications</button>
                    </li>
                    <li class="select-item">
                        <button data-select-item>Web development</button>
                    </li>
                </ul>
            </div>


            <div class="c-primary tx-3 flex justify-center items-center gap-3">
                <i class="devicon-html5-plain"></i>
                <i class="devicon-tailwindcss-original"></i>
                <i class="devicon-css3-plain-wordmark"></i>

                <i class="devicon-spring-original c-primary"></i>
            </div>

            <div class="flex gap-3 flex-col my-5 text-white">
                <div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">Backend</p>
                    <div class="w-full h-[5px] bg-neutral-800 rounded-full">
                        <div class="h-[5px] bg-primary rounded-full" style="width:90%"></div>
                    </div>
                </div>
                <div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">Frontend</p>
                    <div class="w-full h-[5px] bg-neutral-800 rounded-full">
                        <div class="h-[5px] bg-primary rounded-full" style="width:87%"></div>
                    </div>
                </div>
                <div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">
                        Typescript</p>
                    <div class="w-full h-[5px] bg-neutral-800 rounded-full">
                        <div class="h-[5px] bg-primary rounded-full" style="width:80%"></div>
                    </div>
                </div>
                <div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">Data</p>
                    <div class="w-full h-[5px] bg-neutral-800 rounded-full">
                        <div class="h-[5px] bg-primary rounded-full" style="width:71%"></div>
                    </div>
                </div>
                <div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">
                        Springboot</p>
                    <div class="w-full h-[5px] bg-neutral-800 rounded-full">
                        <div class="h-[5px] bg-primary rounded-full" style="width:52%"></div>
                    </div>
                </div>
                <div class="flex gap-2 w-full flex-col sm:flex-row sm:items-center"><p class="text-sm w-32">C#</p>
                    <div class="w-full h-[5px] bg-neutral-800 rounded-full">
                        <div class="h-[5px] bg-primary rounded-full" style="width:48%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div data-v-e67324b2="" class="max-w-screen-xl px-2 py-10 mx-auto">
            <div data-v-e67324b2=""
                 class="text-sm text-black dark:text-gray-500 mb-5">
                <ul data-v-e67324b2=""
                    class="flex flex-row -mb-px justify-center overflow-hidden overflow-x-auto">
                    <li data-v-e67324b2="" class="sm:mx-2"><a data-v-e67324b2="" href="#"
                                                              class="c-primary border-b-2 border-primary inline-block p-4 border-b-2 rounded-t-lg capitalize font-semibold">all</a>
                    </li>
                    <li data-v-e67324b2="" class="sm:mx-2"><a data-v-e67324b2="" href="#"
                                                              class="border-transparent hover:text-[var(--line-color)] hover:border-[var(--line-color)] inline-block p-4 border-b-2 rounded-t-lg capitalize font-semibold">framework</a>
                    </li>
                    <li data-v-e67324b2="" class="sm:mx-2"><a data-v-e67324b2="" href="#"
                                                              class="border-transparent hover:text-[var(--line-color)] hover:border-[var(--line-color)] inline-block p-4 border-b-2 rounded-t-lg capitalize font-semibold">language</a>
                    </li>
                    <li data-v-e67324b2="" class="sm:mx-2"><a data-v-e67324b2="" href="#"
                                                              class="border-transparent hover:text-[var(--line-color)] hover:border-[var(--line-color)] inline-block p-4 border-b-2 rounded-t-lg capitalize font-semibold">tool</a>
                    </li>
                    <li data-v-e67324b2="" class="sm:mx-2"><a data-v-e67324b2="" href="#"
                                                              class="border-transparent hover:text-[var(--line-color)] hover:border-[var(--line-color)] inline-block p-4 border-b-2 rounded-t-lg capitalize font-semibold">others</a>
                    </li>
                </ul>
            </div>
        </div>
        <div data-v-e67324b2=""
             class="flex flex-wrap mx-auto max-w-7xl justify-center transition-all relative gap-0">
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/laravel.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Laravel" width="auto"
                         height="auto"> Laravel
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2="" src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/vue.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Vue" width="auto"
                         height="auto"> Vue
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/inertia.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Inertia" width="auto"
                         height="auto"> Inertia
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/tailwind.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Tailwind" width="auto"
                         height="auto"> Tailwind
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/bootstrap.png"
                         class="size-6 sm:size-8 object-contain object-center" alt="Bootstrap" width="auto"
                         height="auto"> Bootstrap
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2="" src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/css.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="CSS" width="auto"
                         height="auto"> CSS
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/javascript.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Javascript" width="auto"
                         height="auto"> Javascript
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/new-php.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="PHP" width="auto"
                         height="auto"> PHP
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/java.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Java" width="auto"
                         height="auto"> Java
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/html.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="HTML" width="auto"
                         height="auto"> HTML
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2="" src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/git.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Git" width="auto"
                         height="auto"> Git
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/mysql.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="MySQL" width="auto"
                         height="auto"> MySQL
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/vscode.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="VS Code" width="auto"
                         height="auto"> VS Code
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/wordpress-white.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Wordpress" width="auto"
                         height="auto"> Wordpress
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/clickfunnels.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Clickfunnels" width="auto"
                         height="auto"> Clickfunnels
                </div>
            </div>
            <div data-v-e67324b2=""
                 class="p-1 hover:scale-110 hover:px-3 transition-all duration-[250ms] will-change-auto ease-in-out cursor-default">
                <div data-v-e67324b2=""
                     class="bg-card-secondary p-2 sm:p-3 sm:px-4 font-semibold rounded-xl flex flex-row items-center gap-3 text-xs sm:text-base justify-center text-black dark:text-white">
                    <img data-v-e67324b2=""
                         src="https://cdn.jsdelivr.net/gh/rondeo-balos/cdn/optimized/shopify.svg"
                         class="size-6 sm:size-8 object-contain object-center" alt="Shopify" width="auto"
                         height="auto"> Shopify
                </div>
            </div>
        </div>
    </section>
    <!--
      - #main-content
    -->
    <article class="about  active" data-page="about">

        <!--
          - service
        -->
        <div class="relative z-index-999">

            <div
                class="absolute left-5 top-5 right-5 rounded-2xl border border-white/10 bg-black/30 backdrop-blur-md overflow-hidden">
                <div class="flex items-center gap-2 px-4 py-3 border-b border-white/10"><span
                        class="h-2.5 w-2.5 rounded-full bg-[#ff5f57]"></span><span
                        class="h-2.5 w-2.5 rounded-full bg-[#febc2e]"></span><span
                        class="h-2.5 w-2.5 rounded-full bg-[#28c840]"></span><span
                        class="ml-2 text-xs text-white/60 font-mono">aivora.pro</span></div>
                <div class="p-4 font-mono text-[12px] leading-relaxed text-white/70">
                    <div><span class="text-white/45">const</span> <span class="text-white">product</span> = <span
                            class="text-white/45">{</span></div>
                    <div class="pl-4"><span class="text-white/45">type:</span> <span
                            class="text-white/90">"AI Platform"</span>,
                    </div>
                    <div class="pl-4"><span class="text-white/45">focus:</span> <span class="text-white/90">"A product foundation for AI‑assisted creator workflows."</span>,
                    </div>
                    <div class="pl-4"><span class="text-white/45">stack:</span> <span class="text-white/90">[Next.js, React, Tailwind, Stripe]</span>
                    </div>
                    <div class="text-white/45">}</div>
                </div>
            </div>
        </div>
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
