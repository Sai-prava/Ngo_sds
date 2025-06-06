@extends('web.template.master')
<style>
    .card {
        padding: 1px !important;
        background-color: #c9ccd3 !important;
    }

    .obj-btn {
        margin-left: 692px !important;
    }

    .blog-section {
        padding: 60px 0 !important;
        background-color: #f9f9f9 !important;
    }

    .section-title__blog {
        font-size: 45px !important;
        font-weight: 700 !important;
        margin-bottom: 10px !important;
    }

    .blog-card {
        background: #fff !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05) !important;
        overflow: hidden !important;
        margin-bottom: 30px !important;
        transition: transform 0.3s ease !important;
    }

    .blog-card:hover {
        transform: translateY(-5px) !important;
    }

    .blog-card img {
        width: 100% !important;
        height: 220px !important;
        object-fit: cover !important;
    }

    .blog-content {
        padding: 20px !important;
    }

    .blog-content h3 {
        font-size: 20px !important;
        margin-bottom: 10px !important;
        font-weight: 600 !important;
    }

    .blog-content p {
        font-size: 14px !important;
        color: #666 !important;
        margin-bottom: 15px !important;
    }

    .read-more {
        font-size: 14px !important;
        color: #e6007e !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        transition: color 0.3s ease !important;
    }

    .read-more:hover {
        color: #c1006c !important;
    }

    /* WHAT WE DO Section */
    .what-we-do-section {
        background-color: #fafafa !important;
        padding: 50px 0 !important;
    }

    .section-title {
        text-align: center !important;
        font-size: 32px !important;
        font-weight: bold !important;
        margin-bottom: 30px !important;
        color: #222 !important;
    }

    .what-we-do-grid {
        display: grid !important;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
        gap: 20px !important;
        max-width: 1200px !important;
        margin: 0 auto !important;
        padding: 0 20px !important;
    }

    .card {
        position: relative !important;
        overflow: hidden !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
        cursor: pointer !important;
        transition: transform 0.3s ease !important;
    }

    .card:hover {
        transform: scale(1.03) !important;
    }

    .card img {
        width: 100% !important;
        height: 220px !important;
        object-fit: cover !important;
        display: block !important;
    }

    .card-title {
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        right: 0 !important;
        background: rgba(0, 0, 0, 0.5) !important;
        color: #fff !important;
        padding: 15px !important;
        font-size: 18px !important;
        font-weight: 500 !important;
        text-align: center !important;
        transition: background 0.3s ease !important;
    }

    .card:hover .card-title {
        background: rgba(0, 0, 0, 0.7) !important;
    }

    /* Trustee Section Styles */
    .trustee-card {
        position: relative;
        background: #ebd3d3;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        margin-bottom: 30px;
    }

    .trustee-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .trustee-image {
        position: relative;
        overflow: hidden;
        padding-top: 20px;
    }

    .trustee-image img {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .trustee-card:hover .trustee-image img {
        transform: scale(1.05);
    }

    .trustee-info {
        padding: 20px;
        text-align: center;
    }

    .trustee-info h4 {
        color: #333;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .trustee-info p {
        color: #666;
        font-size: 16px;
        margin-bottom: 15px;
    }

    .trustee-social {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 15px;
    }

    .trustee-social a {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        transition: all 0.3s ease;
    }

    .trustee-social a:hover {
        background: #e6007e;
        color: #fff;
        transform: translateY(-3px);
    }

    .trustee-description {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
        margin: 15px 0;
        padding: 0 15px;
    }

    /* Objective Section Styles */
    .objective-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
        overflow: hidden;
    }

    .objective-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="2" cy="2" r="1" fill="%23e6007e" opacity="0.1"/></svg>') repeat;
        opacity: 0.5;
    }

    .objective-container {
        position: relative;
        z-index: 1;
    }

    .objective-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .objective-header h2 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .objective-header h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: #e6007e;
    }

    .objective-header p {
        color: #666;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 20px auto 0;
    }

    .objective-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        padding: 20px;
    }

    .objective-card {
        background: #fff;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .objective-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .objective-icon {
        width: 80px;
        height: 80px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        transition: all 0.3s ease;
    }

    .objective-card:hover .objective-icon {
        background: #e6007e;
        transform: rotateY(180deg);
    }

    .objective-card:hover .objective-icon i {
        color: #fff;
        transform: rotateY(180deg);
    }

    .objective-icon i {
        font-size: 32px;
        color: #e6007e;
        transition: all 0.3s ease;
    }

    .objective-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .objective-description {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .objective-features {
        text-align: left;
        margin-top: 20px;
    }

    .objective-feature-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: #555;
        font-size: 0.9rem;
    }

    .objective-feature-item i {
        color: #e6007e;
        margin-right: 10px;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .objective-grid {
            grid-template-columns: 1fr;
        }

        .objective-header h2 {
            font-size: 2rem;
        }
    }

    /* Global Responsive Styles */
    * {
        box-sizing: border-box;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    /* Base Mobile-First Styles */
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        width: 100%;
    }

    /* Responsive Typography */
    @media (max-width: 768px) {

        h1,
        .h1 {
            font-size: 2rem !important;
        }

        h2,
        .h2 {
            font-size: 1.75rem !important;
        }

        h3,
        .h3 {
            font-size: 1.5rem !important;
        }

        p {
            font-size: 1rem !important;
        }
    }

    /* Main Slider Responsive */
    @media (max-width: 768px) {
        .main-slider-one__content {
            padding: 30px 15px !important;
        }

        .main-slider-one__content .title h2 {
            font-size: 1.8rem !important;
            line-height: 1.3 !important;
        }

        .main-slider-one__content .tagline span {
            font-size: 1rem !important;
        }

        .main-slider-one__content .text p {
            font-size: 0.9rem !important;
        }
    }

    /* About Section Responsive */
    @media (max-width: 768px) {
        .about-section {
            padding: 40px 0 !important;
        }

        .about-section .img-fluid {
            margin-bottom: 30px !important;
        }
    }

    /* Objective Section Responsive */
    @media (max-width: 992px) {
        .objective-section {
            padding: 40px 0 !important;
        }

        .objective-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
            gap: 20px !important;
        }

        .objective-card {
            padding: 20px !important;
        }

        .objective-header h2 {
            font-size: 1.8rem !important;
        }

        .objective-title {
            font-size: 1.3rem !important;
        }
    }

    /* Trustee Section Responsive */
    @media (max-width: 992px) {
        .members-section {
            padding: 40px 0 !important;
        }

        .trustee-card {
            margin-bottom: 30px !important;
        }

        .trustee-image img {
            width: 150px !important;
            height: 150px !important;
        }

        .trustee-info h4 {
            font-size: 1.3rem !important;
        }
    }

    /* Blog Section Responsive */
    @media (max-width: 768px) {
        .blog-section {
            padding: 40px 0 !important;
        }

        .section-title__blog {
            font-size: 1.8rem !important;
        }

        .blog-card {
            margin-bottom: 30px !important;
        }

        .blog-card img {
            height: 180px !important;
        }
    }

    /* Contact Form Responsive */
    @media (max-width: 992px) {
        .enquiry-section {
            flex-direction: column-reverse !important;
        }

        .enquiry-form {
            margin-top: 30px !important;
        }

        .enquiry-form form {
            padding: 20px !important;
        }
    }

    /* Navigation Responsive */
    @media (max-width: 768px) {
        .navbar-brand img {
            max-width: 150px !important;
        }

        .navbar-toggler {
            padding: 5px 10px !important;
        }
    }

    /* Button Responsive */
    @media (max-width: 768px) {
        .btn {
            padding: 8px 20px !important;
            font-size: 0.9rem !important;
        }

        .obj-btn {
            margin-left: 0 !important;
            text-align: center !important;
            display: block !important;
            margin-top: 20px !important;
        }
    }

    /* Grid System Improvements */
    @media (max-width: 576px) {
        .col-sm-6 {
            width: 100% !important;
        }
    }

    /* Spacing Adjustments */
    @media (max-width: 768px) {
        .py-5 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }

        .my-5 {
            margin-top: 2rem !important;
            margin-bottom: 2rem !important;
        }

        .section-title {
            margin-bottom: 1.5rem !important;
        }
    }

    /* Card Responsiveness */
    @media (max-width: 768px) {
        .card {
            margin-bottom: 20px !important;
        }
    }

    /* Image Optimization */
    @media (max-width: 768px) {
        .img-fluid {
            max-height: 300px !important;
            object-fit: cover !important;
        }
    }

    /* Container Breakpoints */
    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    /* Touch Device Optimizations */
    @media (hover: none) {

        .objective-card:hover,
        .trustee-card:hover,
        .blog-card:hover {
            transform: none !important;
        }

        .objective-card:active,
        .trustee-card:active,
        .blog-card:active {
            transform: scale(0.98) !important;
        }
    }

    /* .image-layer {
    background-size: cover !important;
    background-position: center !important;
    height: 100vh !important; or a fixed height */
</style>
@section('content')
    <!--Start Main Slider -->
    <section class="main-slider main-slider-one">
        @php
            use App\Models\Banner;
            $banners = Banner::all();
        @endphp

        <div class="main-slider-one__inner">
            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel nav-style1 dot-style1"
                data-owl-options='{
                "loop": true,
                "autoplay": true,
                "animateOut": "slideOutDown",
                "animateIn": "fadeIn",
                "margin": 0,
                "nav": true,
                "dots": true,
                "smartSpeed": 500,
                "autoplayTimeout": 10000,
                "navText": ["<span class=\"icon-arrow-right1\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "responsive": {
                    "0": { "items": 1 },
                    "768": { "items": 1 },
                    "992": { "items": 1 },
                    "1200": { "items": 1 }
                }
            }'>

                @foreach ($banners as $banner)
                    <div class="main-slider-one__single">
                        <img class="image-layer" src="{{ asset($banner->image) }}" alt="Banner Image">


                        <div class="container">
                            <div class="main-slider-one__content">
                                @if ($banner->heading)
                                    <div class="tagline">
                                        <span>{{ $banner->heading }}</span>
                                    </div>
                                @endif

                                @if ($banner->title)
                                    <div class="title">
                                        <h2>{{ $banner->title }}</h2>
                                    </div>
                                @endif

                                @if ($banner->description)
                                    <div class="text">
                                        <p>{!! $banner->description !!}</p>
                                    </div>
                                @endif

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('web.contact') }}">
                                        <span class="txt">Contact Us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!--End Main Slider-->



    <!--Start About One -->
    <section class="py-5 bg-light about-section">
        <div class="container">
            <div class="row align-items-center">
                @php
                    use App\Models\AboutUs;
                    $about = AboutUs::first();
                @endphp

                <!-- Image Column -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="position-relative rounded overflow-hidden shadow">
                        <img src="{{ asset($about->image) }}" alt="About Us Image" class="img-fluid w-100"
                            style="object-fit: cover; height: 100%;">
                    </div>
                </div>

                <!-- Text Content Column -->
                <div class="col-md-6">

                    <div class="section-header mb-4">
                        <h2 class="fw-bold text-dark">About Us</h2>
                        <hr class="w-25 border-primary opacity-100 mb-3">
                    </div>

                    <p class="text-muted mb-3">
                    <p>{!! nl2br(e($about?->description ?? 'No about us content found.')) !!}</p>
                    </p>


                    <!-- Optional Button -->
                    <a href="{{ route('web.index') }}" class="btn btn-primary mt-3">Learn More</a>
                </div>

            </div>
        </div>
    </section>


    <!--
                                                                <div class="about-one__bottom">
                                                                    <div class="about-one__bottom-inner">
                                                                        <div class="about-one__bottom-content">
                                                                            <div class="icon-box">
                                                                                <span class="icon-donation-2"></span>
                                                                            </div>

                                                                            <div class="text-box">
                                                                                <h2>Since 1980, we've granted more than <br> 120,000 wishes all over the world.</h2>
                                                                            </div>
                                                                        </div>

                                                                        <div class="about-one__bottom-btn">
                                                                            <a class="thm-btn" href="about.html">
                                                                                <span class="txt">Learn About us</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section> -->
    <!--End About One -->

    <!-- Objective section -->
    <section class="objective-section">
        <div class="container objective-container">
            <div class="objective-header">
                <h2 class="text-uppercase fw-bold">Our Objectives</h2>
                <p>Driving positive change through focused initiatives and sustainable development</p>
            </div>

            <div class="objective-grid">
                <!-- Forest and Environment -->
                <div class="objective-card">
                    <div class="objective-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3 class="objective-title">Forest and Environment</h3>
                    <p class="objective-description">
                        Preserving and protecting our natural environment through sustainable practices and conservation
                        efforts.
                    </p>
                    <div class="objective-features">
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Environmental Conservation</span>
                        </div>
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Tree Plantation Drives</span>
                        </div>
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Wildlife Protection</span>
                        </div>
                    </div>
                </div>

                <!-- Art & Culture -->
                <div class="objective-card">
                    <div class="objective-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="objective-title">Art & Culture</h3>
                    <p class="objective-description">
                        Preserving and promoting cultural heritage while fostering artistic expression in communities.
                    </p>
                    <div class="objective-features">
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Cultural Preservation</span>
                        </div>
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Art Education</span>
                        </div>
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Heritage Conservation</span>
                        </div>
                    </div>
                </div>

                <!-- Rural Development -->
                <div class="objective-card">
                    <div class="objective-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="objective-title">Rural Development</h3>
                    <p class="objective-description">
                        Empowering rural communities through sustainable development and capacity building initiatives.
                    </p>
                    <div class="objective-features">
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Community Empowerment</span>
                        </div>
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Skill Development</span>
                        </div>
                        <div class="objective-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Infrastructure Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--WHAT WE DO  Start-->

    @php
        use App\Models\WhatWeDo;
        $whatWeDoItems = WhatWeDo::all();
    @endphp

    <section class="what-we-do-section">
        <div class="container">
            <h2 class="section-title">WHAT WE DO</h2>
            <div class="what-we-do-grid">
                @forelse ($whatWeDoItems as $item)
                    <div class="card">
                        <a href="{{ route('frontend.whatwedo', $item->id) }}">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                            <div class="card-title">{{ $item->title }}</div>
                        </a>
                    </div>
                @empty
                    <p class="text-muted">No items available.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!--WHAT WE DO End-->

    <section class="blog-section">
        <div class="container mb-3">
            <div class="section-title text-center">
                <h3 class="section-title__blog">Our Blog</h3>
            </div>
            @php
                use App\Models\Blog;
                $blogs = Blog::latest()->get();
            @endphp

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <img src="{{ asset($blog->image) }}" alt="Blog Image">
                            <div class="blog-content">
                                <h3><a href="#">{{ $blog->title }}</a></h3>
                                <p>{{ $blog->description }}</p>
                                {{-- <a href="#" class="read-more">Read More →</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Member section -->
    <section class="py-5 bg-light members-section">
        @php
            use App\Models\Team;
            $teamMembers = Team::all();
        @endphp
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h2 class="text-uppercase fw-bold text-dark">Our Trustee</h2>
                <p class="text-muted mt-2">Meet the dedicated team behind our mission</p>
            </div>

            <!-- Trustees Grid -->
            <div class="row g-4 justify-content-center">
                <!-- Trustee 1 -->
                @foreach ($teamMembers as $member)
                    <div class="col-lg-4 col-md-6">

                        <div class="trustee-card">

                            <div class="trustee-image text-center">
                                <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                            </div>
                            <div class="trustee-info">
                                <h4>{{ $member->name }}</h4>
                                {{-- <p class="mb-2">Chairman</p> --}}
                                <div class="trustee-description">
                                    <p>{{ $member->description }}</p>
                                </div>
                                <div class="trustee-social">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
                <!-- Trustee 2 -->

            </div>
        </div>
    </section>

    <section class="enquiry py-5 bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="text-uppercase fw-bold text-dark">Contact Us</h2>
            </div>

            <!-- Enquiry Content -->
            <div class="row align-items-center enquiry-section">

                <!-- Form Column -->
                <div class="col-lg-6 mb-4 enquiry-form">
                    <form action="{{ route('frontend.contact') }}" method="POST" class="bg-white p-4 shadow rounded">
                        @csrf
                        <h3 class="mb-4 text-primary fw-semibold">Send us an enquiry</h3>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name <i class="fa fa-user"></i></label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone <i class="fa fa-phone"></i></label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <i class="fa fa-envelope"></i></label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message <i class="fa fa-comments"></i></label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Send a Message <i class="fa fa-paper-plane ms-2"></i>
                        </button>
                    </form>
                </div>

                <!-- Image Column -->
                <div class="col-lg-6 enquiry-image text-center">
                    <img src="{{ asset('web/assets/img/contact2.png') }}" alt="Enquiry Image"
                        class="img-fluid rounded shadow">
                </div>

            </div>
        </div>
    </section>

    {{-- <script>
        const form = document.querySelector('.enquiry-form form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (!name) {
                document.getElementById('name').setCustomValidity('Please enter your name');
                return false;
            }

            if (!phone) {
                document.getElementById('phone').setCustomValidity('Please enter your phone number');
                return false;
            }

            if (!email || !RegExp('^\\S+@\\S+\\.\\S+$').test(email)) {
                document.getElementById('email').setCustomValidity('Please enter a valid email address');
                return false;
            }

            if (!message) {
                document.getElementById('message').setCustomValidity('Please enter a message');
                return false;
            }

            // All fields are valid, allow form submission
            return true;
        });
    </script> --}}
@endsection
