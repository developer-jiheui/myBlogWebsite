<><!DOCTYPE html>
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

    <section
        class="max-w-[1200px] w-full sm:px-20 relative flex mx-auto h-[350px] py-10 overflow-hidden justify-center sm:justify-start sm:items-end">
        <div class="flex ml-2 w-3/5 flex-col gap-5 items-center sm:items-start ">
            <div class="text-3xl  flex flex-col items-center sm:items-start sm:text-4xl font-bold"><p
                    class="text-sm mb-2 font-normal text-white/50">place holder</p>
                <h2>Hello World,</h2>
                <div class="flex items-center">
                    <div class="text-primary"><span class="">Full stack</span></div>
                    <div class="w-[1px] h-7 md:h-8 ml-1 mb-[-4px] mr-2 bg-white animate-typewriter-cursor"></div>
                    <h2>Developer</h2></div>
                <h2>ZiA</h2></div>
            <div class="flex gap-1"><a
                    class="bg-primary text-primary-foreground px-3 py-1 rounded-md text-sm hover:opacity-80 transition-opacity"
                    href="/about">show more</a>
                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>
                    <ion-icon name="chevron-down"></ion-icon>
                </button>
            </div>
        </div>
        <div class="w-2/5 flex justify-center items-center h-full">
            <img alt="me" loading="lazy" width="1000" height="1000" decoding="async" data-nimg="1"
                 class=" w-[400px] h-[400px]  absolute bottom-[-35px] hidden sm:block"
                 src="{{asset('images/my-avatar.png')}}">
        </div>

    </section>

    <section
        class="max-w-[1200px] sm:px-20 relative flex mx-auto h-[300px] py-10 overflow-hidden justify-center sm:justify-start sm:items-end">
        <div class="flex flex-col gap-5 items-center sm:items-start">
            <div class="text-3xl flex flex-col items-center sm:items-start sm:text-4xl font-bold"><p
                    class="text-sm mb-2 font-normal text-white/50">gyuyeon.dev</p>
                <h2>안녕하세요,</h2>
                <div class="flex items-center">
                    <div class="text-primary"><span class="">리액트</span></div>
                    <div class="w-[1px] h-7 md:h-8 ml-1 mb-[-4px] mr-2 bg-white animate-typewriter-cursor"></div>
                    <h2>개발자</h2></div>
                <h2>이규연입니다.</h2></div>
            <div class="flex gap-1"><a
                    class="bg-primary text-primary-foreground px-3 py-1 rounded-md text-sm hover:opacity-80 transition-opacity"
                    href="/about">About</a><a
                    class="border-border border px-3 py-1 rounded-md text-sm hover:bg-border transition-colors"
                    href="/profile">Contact</a></div>
        </div>
        <img alt="minimo" loading="lazy" width="1000" height="1000" decoding="async" data-nimg="1"
             class="w-[400px] h-[400px] absolute bottom-[-150px] right-[0px] hidden sm:block"
             srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fminimo.639c0e30.png&amp;w=1080&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fminimo.639c0e30.png&amp;w=2048&amp;q=75 2x"
             style="color: transparent;"
             src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fminimo.639c0e30.png&amp;w=2048&amp;q=75"></section>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

        <div class="sidebar-info">

            <figure class="avatar-box">
                <img src="{{asset('images/my-avatar.png')}}" alt="Jiheui Lee" width="80">
            </figure>

            <div class="info-content">
                <h1 class="name" title="my-name">Zia Lee</h1>

                <p class="title">Web developer</p>
            </div>

            <button class="info_more-btn" data-sidebar-btn>
                <span>Show Contacts</span>

                <ion-icon name="chevron-down"></ion-icon>
            </button>

        </div>

        <div class="sidebar-info_more">

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

    <div class="main-content">

        <!--
          - #NAVBAR
        -->

        <nav class="navbar">

            <ul class="navbar-list">

                <li class="navbar-item">
                    <button class="navbar-link  active" data-nav-link>About</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Portfolio</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Blog</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Contact</button>
                </li>

            </ul>

        </nav>


        <!--
          - #ABOUT
        -->

        <article class="about  active" data-page="about">

            <header>
                <h2 class="h2 article-title">About me</h2>
            </header>

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


        <!--
          - #PORTFOLIO
        -->

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
          - #BLOG
        -->

        <article class="blog" data-page="blog">

            <header>
                <h2 class="h2 article-title">Blog</h2>
            </header>

            <section class="blog-posts">

                <ul class="blog-posts-list">

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022"
                                     loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                                <p class="blog-text">
                                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer"
                                     loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                                <p class="blog-text">
                                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design digest #80</h3>

                                <p class="blog-text">
                                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam
                                    corporis suscipit.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week"
                                     loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                                <p class="blog-text">
                                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation
                                    ullamco
                                    laboris nisi.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing"
                                     loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                                <p class="blog-text">
                                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design digest #79</h3>

                                <p class="blog-text">
                                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                                </p>

                            </div>

                        </a>
                    </li>

                </ul>

            </section>

        </article>


        <!--
          - #CONTACT
        -->

        <article class="contact" data-page="contact">

            <header>
                <h2 class="h2 article-title">Contact</h2>
            </header>

            <section class="mapbox" data-mapbox>
                <figure>
                    <iframe
                        width="100%"
                        height="50%"
                        style="border:0"
                        referrerpolicy="no-referrer-when-downgrade"
                        loading="lazy"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAJBgLFtPeoudAH2Wkaqn6lkQbY8TwZqxU&q=Vancouver,+BC,+Canada">
                    </iframe>
                </figure>
            </section>

            <section class="contact-form">

                <h3 class="h3 form-title">Contact Form</h3>

                <form action="#" class="form" data-form>

                    <div class="input-wrapper">
                        <input type="text" name="fullname" class="form-input" placeholder="Full name" required
                               data-form-input>

                        <input type="email" name="email" class="form-input" placeholder="Email address" required
                               data-form-input>
                    </div>

                    <textarea name="message" class="form-input" placeholder="Your Message" required
                              data-form-input></textarea>

                    <button class="form-btn" type="submit" disabled data-form-btn>
                        <ion-icon name="paper-plane"></ion-icon>
                        <span>Send Message</span>
                    </button>

                </form>

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
