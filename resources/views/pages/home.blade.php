@extends('layouts.app')

@section('title', 'Zia Dev')

@section('content')

    <article class="home active" data-page="home">

        <header>
            <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
            <p>
                I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print
                media.
                I enjoy turning complex problems into simple, beautiful and intuitive designs.
            </p>

            <p>
                My job is to build your website so that it is functional and user-friendly but at the same time
                attractive.
                Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use.
                My aim is to bring across your message and identity in the most creative way. I created web design
                for many famous brand companies.
            </p>
        </section>

        <section class="service">
            <h3 class="h3 service-title">What i'm doing</h3>

            <ul class="service-list">
                <li class="service-item">
                    <div class="service-icon-box">
                        <img src="{{ asset('images/icon-design.svg') }}" alt="design icon" width="40">
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
                        <img src="{{ asset('images/icon-dev.svg') }}" alt="development icon" width="40">
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
                        <img src="{{ asset('images/icon-app.svg') }}" alt="app icon" width="40">
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
                        <img src="{{ asset('images/icon-photo.svg') }}" alt="photo icon" width="40">
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

        <section class="testimonials">
            <h3 class="h3 testimonials-title">Testimonials</h3>

            <ul class="testimonials-list has-scrollbar">

                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{ asset('images/avatars/1.png') }}" width="60" data-testimonials-avatar>
                        </figure>

                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel Lewis</h4>

                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done.
                                She has a lot of experience and is very concerned about the needs of client.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{ asset('images/avatars/2.png') }}" width="60" data-testimonials-avatar>
                        </figure>

                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica Miller</h4>

                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done.
                                She has a lot of experience and is very concerned about the needs of client.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{ asset('images/avatars/3.png') }}" width="60" data-testimonials-avatar>
                        </figure>

                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily Evans</h4>

                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done.
                                She has a lot of experience and is very concerned about the needs of client.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="testimonials-item">
                    <div class="content-card" data-testimonials-item>
                        <figure class="testimonials-avatar-box">
                            <img src="{{ asset('images/avatars/4.png') }}" width="60" data-testimonials-avatar>
                        </figure>

                        <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry William</h4>

                        <div class="testimonials-text" data-testimonials-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work
                                done.
                                She has a lot of experience and is very concerned about the needs of client.
                            </p>
                        </div>
                    </div>
                </li>

            </ul>
        </section>

        @include('components.modal.testimonial')

        <section class="clients">
            <h3 class="h3 clients-title">Clients</h3>

            <ul class="clients-list has-scrollbar">
                <li class="clients-item">
                    <a href="#"><img src="{{ asset('images/logos/logo-1-color.png') }}" alt="client logo"></a>
                </li>
                <li class="clients-item">
                    <a href="#"><img src="{{ asset('images/logos/logo-2-color.png') }}" alt="client logo"></a>
                </li>
                <li class="clients-item">
                    <a href="#"><img src="{{ asset('images/logos/logo-3-color.png') }}" alt="client logo"></a>
                </li>
                <li class="clients-item">
                    <a href="#"><img src="{{ asset('images/logos/logo-4-color.png') }}" alt="client logo"></a>
                </li>
                <li class="clients-item">
                    <a href="#"><img src="{{ asset('images/logos/logo-5-color.png') }}" alt="client logo"></a>
                </li>
                <li class="clients-item">
                    <a href="#"><img src="{{ asset('images/logos/logo-6-color.png') }}" alt="client logo"></a>
                </li>
            </ul>
        </section>

    </article>

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
                <li class="project-item active" data-filter-item data-category="web development">
                    <a href="#">
                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                            <img src="{{ asset('images/project-1.jpg') }}" alt="finance" loading="lazy">
                        </figure>
                        <h3 class="project-title">Finance</h3>
                        <p class="project-category">Web development</p>
                    </a>
                </li>

                <li class="project-item active" data-filter-item data-category="web development">
                    <a href="#">
                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                            <img src="{{ asset('images/project-2.png') }}" alt="orizon" loading="lazy">
                        </figure>
                        <h3 class="project-title">Orizon</h3>
                        <p class="project-category">Web development</p>
                    </a>
                </li>

                <li class="project-item active" data-filter-item data-category="web design">
                    <a href="#">
                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                            <img src="{{ asset('images/project-3.jpg') }}" alt="fundo" loading="lazy">
                        </figure>
                        <h3 class="project-title">Fundo</h3>
                        <p class="project-category">Web design</p>
                    </a>
                </li>
            </ul>
        </section>
    </article>

    <article class="blog" data-page="blog">
        <header>
            <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">
            <ul class="blog-posts-list">
                <li class="blog-post-item">
                    <a href="#">
                        <figure class="blog-banner-box">
                            <img src="{{ asset('images/blog-1.jpg') }}" alt="Design conferences in 2022" loading="lazy">
                        </figure>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <p class="blog-category">Design</p>
                                <span class="dot"></span>
                                <time datetime="2022-02-23">Feb 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                            <p class="blog-text">
                                Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
    </article>

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

@endsection
