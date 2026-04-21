@extends('layouts.app')
@section('content')

    <article class="home" data-page="home">

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

@endsection
