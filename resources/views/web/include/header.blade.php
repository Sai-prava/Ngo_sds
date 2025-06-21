<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aayurdha || NGO</title>
    <!-- Favicons Icons -->


    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('web/assets/img/logo2.png') }}" />
    <meta name="description" content="AAYURDHA HTML 5 TEMPLATE" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&amp;family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/nice-select/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/thm-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/slick-slider/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/language-switcher/polyglot-language-switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/vendors/reey-font/stylesheet.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('web/assets/css/gifall.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/assets/css/gifall-responsive.css') }}" />

    <style>
        /* Global Styles */
        :root {
            --primary-color: #e6007e;
            --secondary-color: #d3bfbf;
            --text-dark: #333;
            --text-light: #666;
            --white: #fff;
            --transition: all 0.3s ease;
        }

        /* Top Bar Styles */
        .top-bar {
            background-color: var(--secondary-color) !important;
            padding: 10px 0 !important;
            font-size: 14px !important;
        }

        .top-bar-inner {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            flex-wrap: wrap !important;
            gap: 15px !important;
        }

        .top-left,
        .top-right {
            display: flex !important;
            align-items: center !important;
            gap: 20px !important;
            flex-wrap: wrap !important;
        }

        .contact-item {
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
            color: var(--text-dark) !important;
        }

        .contact-item i {
            color: var(--primary-color) !important;
            font-size: 16px !important;
        }

        .contact-item a {
            color: var(--text-dark) !important;
            text-decoration: none !important;
            transition: var(--transition) !important;
        }

        .contact-item a:hover {
            color: var(--primary-color) !important;
        }

        .social-media {
            display: flex !important;
            gap: 15px !important;
            margin-left: 20px !important;
        }

        .social-media a {
            color: var(--text-dark) !important;
            font-size: 16px !important;
            transition: var(--transition) !important;
        }

        .social-media a:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px) !important;
        }

        /* Main Header Styles */
        .main-header {
            background: var(--white) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
            position: sticky !important;
            top: 0 !important;
            z-index: 1000 !important;
        }

        .header-container {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            padding: 15px 0 !important;
        }

        .logo img {
            max-height: 60px !important;
            width: auto !important;
        }

        /* Navigation Styles */
        .navbar {
            display: flex !important;
            align-items: center !important;
        }

        .nav-menu {
            display: flex !important;
            gap: 30px !important;
            margin: 0 !important;
            padding: 0 !important;
            list-style: none !important;
        }

        .nav-menu li {
            position: relative !important;
        }

        .nav-menu a {
            color: var(--text-dark) !important;
            text-decoration: none !important;
            font-weight: 500 !important;
            padding: 10px !important;
            display: block !important;
            transition: var(--transition) !important;
        }

        .nav-menu a:hover {
            color: var(--primary-color) !important;
        }

        .dropdown {
            position: absolute !important;
            top: 100% !important;
            left: 0 !important;
            background: var(--white) !important;
            min-width: 200px !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateY(10px) !important;
            transition: var(--transition) !important;
        }

        .has-dropdown:hover .dropdown {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }

        .dropdown li {
            width: 100% !important;
        }

        .dropdown a {
            padding: 10px 15px !important;
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none !important;
            background: none !important;
            border: none !important;
            font-size: 24px !important;
            color: var(--text-dark) !important;
            cursor: pointer !important;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .container {
                padding: 0 20px !important;
            }
        }

        @media (max-width: 992px) {
            .nav-menu {
                gap: 20px !important;
            }
        }

        @media (max-width: 768px) {
            .top-bar-inner {
                flex-direction: column !important;
                text-align: center !important;
            }

            .top-left,
            .top-right {
                flex-direction: column !important;
                gap: 10px !important;
                width: 100% !important;
            }

            .social-media {
                margin: 10px 0 0 0 !important;
                justify-content: center !important;
            }

            .mobile-menu-btn {
                display: block !important;
            }

            .navbar {
                position: fixed !important;
                top: 0 !important;
                right: -300px !important;
                width: 280px !important;
                height: 100vh !important;
                background: var(--white) !important;
                padding: 20px !important;
                transition: var(--transition) !important;
                z-index: 1001 !important;
            }

            .navbar.active {
                right: 0 !important;
            }

            .nav-menu {
                flex-direction: column !important;
                gap: 0 !important;
                padding-top: 50px !important;
            }

            .nav-menu a {
                padding: 15px !important;
                border-bottom: 1px solid #eee !important;
            }

            .dropdown {
                position: static !important;
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
                box-shadow: none !important;
                display: none !important;
                padding-left: 15px !important;
            }

            .has-dropdown.active .dropdown {
                display: block !important;
            }
        }

        /* Overlay */
        .menu-overlay {
            display: none !important;
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            background: rgba(0, 0, 0, 0.5) !important;
            z-index: 1000 !important;
        }

        .menu-overlay.active {
            display: block !important;
        }

        /* Close Button */
        .close-menu {
            display: none !important;
            position: absolute !important;
            top: 20px !important;
            right: 20px !important;
            font-size: 24px !important;
            cursor: pointer !important;
            color: var(--text-dark) !important;
        }

        @media (max-width: 768px) {
            .close-menu {
                display: block !important;
            }
        }

        .login-btn .btn {
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .login-btn .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    @php
        use App\Models\WhatWeDo;
        $whatWeDoTitles = WhatWeDo::select('id', 'title')->get();
    @endphp

    <!-- Start Preloader -->
    <!-- <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                  
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Preloader -->

    <!-- Header Start -->
    <header>
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-left">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Na-Kakati Gaon, Dighaldari Raha-782103, Nagaon, Assam</span>
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="contact-item">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:aayurdhafoundation@gmail.com">aayurdhafoundation@gmail.com</a>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-phone"></i>
                            <a href="tel:9435059030">9435059030</a>
                        </div>
                        <div class="social-media">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="main-header">
            <div class="container">
                <div class="header-container">
                    @php
                        use App\Models\Logo;
                        $logo = Logo::first();
                    @endphp
                    <div class="logo">
                        <a href="{{ route('web.index') }}">
                            <img src="{{ asset($logo->image) }}" alt="logo">
                        </a>
                    </div>

                    <button class="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>

                    <nav class="navbar">
                        <span class="close-menu">
                            <i class="fas fa-times"></i>
                        </span>
                        <ul class="nav-menu">
                            <li><a href="{{ route('web.index') }}">Home</a></li>
                            <li class="has-dropdown">
                                <a href="{{ route('web.about') }}">About</a>
                                <ul class="dropdown">
                                    <li><a href="#">Our History</a></li>
                                    <li><a href="#">Our Team</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">What We DO</a>
                                <ul class="dropdown">
                                    @forelse($whatWeDoTitles as $item)
                                        <li>
                                            <a href="{{ route('frontend.whatwedo', $item->id) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @empty
                                        <li><a href="#">No items</a></li>
                                    @endforelse
                                </ul>
                            </li>
                            <li><a href="{{ route('web.donation') }}">Donation</a></li>
                            <li><a href="{{ route('frontend.blog') }}">Blog</a></li>
                            <li><a href="{{ route('web.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="login-btn">
                        <a href="{{ route('admin.login') }}" class="btn btn-primary" style="margin-left: 15px;">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="menu-overlay"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const closeMenuBtn = document.querySelector('.close-menu');
            const navbar = document.querySelector('.navbar');
            const menuOverlay = document.querySelector('.menu-overlay');
            const dropdownItems = document.querySelectorAll('.has-dropdown');

            // Toggle mobile menu
            mobileMenuBtn.addEventListener('click', function() {
                navbar.classList.add('active');
                menuOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            // Close mobile menu
            function closeMenu() {
                navbar.classList.remove('active');
                menuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            closeMenuBtn.addEventListener('click', closeMenu);
            menuOverlay.addEventListener('click', closeMenu);

            // Handle dropdowns in mobile view
            dropdownItems.forEach(item => {
                const dropdownToggle = item.querySelector('a');
                const dropdown = item.querySelector('.dropdown');

                // Handle click on dropdown toggle
                dropdownToggle.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        const isActive = item.classList.contains('active');

                        // Close all other dropdowns
                        dropdownItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.classList.remove('active');
                            }
                        });

                        // Toggle current dropdown
                        item.classList.toggle('active');

                        // If it was not active before, prevent navigation
                        // If it was active, allow navigation
                        if (!isActive) {
                            e.preventDefault();
                        } else {
                            window.location.href = this.href;
                        }
                    }
                });

                // Handle clicks on dropdown items
                if (dropdown) {
                    dropdown.addEventListener('click', function(e) {
                        // Allow immediate navigation for dropdown items
                        const target = e.target.closest('a');
                        if (target) {
                            closeMenu();
                        }
                    });
                }
            });

            // Close menu on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    closeMenu();
                    // Remove active class from all dropdowns
                    dropdownItems.forEach(item => item.classList.remove('active'));
                }
            });
        });
    </script>

    <!--End Main Header One Bottom-->

    <!--End Main Header One-->

    {{-- <div class="stricky-header stricky-header--one stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header --> --}}
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.main-menu__list > li.dropdown > a').forEach(link => {
                link.addEventListener('click', function(e) {
                    const submenu = this.nextElementSibling;
                    if (submenu && submenu.classList.contains('submenu')) {
                        e.preventDefault();
                        submenu.classList.toggle('active');
                    }
                });
            });
        });
    </script> --}}
