<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Swat Construction Company - Expert Building Solutions')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('main/img/favicon.svg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Open+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('main/css/home.css') }}" />
    @yield('style')
</head>

<body>

    <header id="header" class="header">
        <div class="container">
            <div class="header-content">

                {{-- Define setActive function --}}
                @php
                    function setActive($path)
                    {
                        return request()->is($path) ? 'active' : '';
                    }
                @endphp

                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('main/public/logo.png') }}" alt="Swat Construction Company" id="logo-img">
                        <!-- <h1>Swat Construction Company</h1> -->
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item {{ setActive('/') }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item {{ setActive('about') }}">
                            <a href="{{ about('about') }}">About</a>
                        </li>
                        <li class="nav-item dropdown {{ setActive('services*') }}">
                            <a href="{{ url('/services') }}">Services <i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/services#construction') }}">Construction</a></li>
                                <li><a href="{{ url('/services#renovation') }}">Renovation</a></li>
                                <li><a href="{{ url('/services#painting') }}">Painting</a></li>
                                <li><a href="{{ url('/services#interior') }}">Interior Design</a></li>
                            </ul>
                        </li>
                        <li class="nav-item {{ setActive('team') }}">
                            <a href="{{ route('team') }}">Our Teams</a>
                        </li>
                        <li class="nav-item {{ setActive('faq') }}">
                            <a href="{{ route('faq') }}">FAQ</a>
                        </li>
                        {{-- <li class="nav-item {{ setActive('contact') }}">
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li> --}}
                    </ul>
                </nav>

                <!-- Call to Action -->
                <div class="header-cta">
                    @auth
                        {{-- If Admin --}}
                        @if (auth()->user()->role === 'admin')
                            <a href="{{ url('/teams') }}" class="btn btn-primary">Teams</a>
                        @endif

                        {{-- Logout for both admin and user --}}
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-outline">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-outline">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
                    @endguest

                </div>

                <!-- Mobile Menu Toggle -->
                <div class="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="public/logo.png" alt="Swat Construction Company">
                    <p>Building Your Dreams Into Reality</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-services">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="services.html#construction">Building Construction</a></li>
                        <li><a href="services.html#renovation">Renovation</a></li>
                        <li><a href="services.html#painting">Painting</a></li>
                        <li><a href="services.html#interior">Interior Design</a></li>
                        <li><a href="services.html#plumbing">Plumbing</a></li>
                        <li><a href="services.html#electrical">Electrical</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contact Information</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Kanju township, MINGORA City, SWAT</li>
                        <li><i class="fas fa-phone"></i> (+92) 317-7727616</li>
                        <li><i class="fas fa-envelope"></i>swatconstruction@gmail.com</li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Swat Construction Company. All Rights Reserved.</p>
                <ul class="footer-legal">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" title="Back to Top"><i class="fas fa-arrow-up"></i></button>

    <!-- Scripts -->
    <script src="{{ asset('main/js/main.js') }}"></script>
    <script src="{{ asset('main/js/slider.js') }}"></script>
</body>

</html>
