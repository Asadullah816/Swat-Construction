@extends('layout.layout')
@section('title', 'Services')
@section('style')
    <link rel="stylesheet" href="{{ asset('main/css/services.css') }}">

@endsection
@section('content')
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1>Our Services</h1>
            <div class="breadcrumbs">
                <a href="{{ route('/') }}">Home</a> / <span>Services</span>
            </div>
        </div>
    </section>

    <!-- Services Intro -->
    <section class="services-intro">
        <div class="container">
            <div class="section-header center">
                <h2>Comprehensive Construction Solutions</h2>
                <p>From concept to completion, we handle all your building needs</p>
            </div>
            <div class="services-overview">
                <p>At BuildMaster Construction, we provide a full range of construction and renovation services for both
                    residential and commercial clients. Our expert team brings years of experience and a commitment to
                    quality to
                    every project, no matter the size or complexity.</p>
                <p>Each service is tailored to meet your specific requirements, ensuring that the final result exceeds your
                    expectations and stands the test of time.</p>
            </div>
            <div class="services-grid">
                <a href="#construction" class="service-tab">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Building Construction</h3>
                </a>
                <a href="#renovation" class="service-tab">
                    <div class="service-icon">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3>Renovation</h3>
                </a>
                <a href="#painting" class="service-tab">
                    <div class="service-icon">
                        <i class="fas fa-paint-roller"></i>
                    </div>
                    <h3>Painting</h3>
                </a>
                <a href="#interior" class="service-tab">
                    <div class="service-icon">
                        <i class="fas fa-couch"></i>
                    </div>
                    <h3>Interior Design</h3>
                </a>
                <a href="#plumbing" class="service-tab">
                    <div class="service-icon">
                        <i class="fas fa-faucet"></i>
                    </div>
                    <h3>Plumbing</h3>
                </a>
                <a href="#electrical" class="service-tab">
                    <div class="service-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>Electrical</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Building Construction -->
    <section id="construction" class="service-section">
        <div class="container">
            <div class="service-content">
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Building Construction">
                </div>
                <div class="service-details">
                    <div class="section-header">
                        <h2>Building Construction</h2>
                        <p>Creating structures that stand the test of time</p>
                    </div>
                    <p>Our building construction services cover everything from site preparation to final inspection. We
                        specialize in both residential and commercial construction, using high-quality materials and proven
                        techniques to ensure durability, functionality, and aesthetic appeal.</p>
                    <h3>What We Offer:</h3>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Residential home construction</li>
                        <li><i class="fas fa-check"></i> Commercial building development</li>
                        <li><i class="fas fa-check"></i> Industrial facility construction</li>
                        <li><i class="fas fa-check"></i> Multi-family housing projects</li>
                        <li><i class="fas fa-check"></i> Custom design-build solutions</li>
                        <li><i class="fas fa-check"></i> Sustainable and green building options</li>
                    </ul>
                    <p>From foundation to finishing touches, our expert team ensures that every aspect of your construction
                        project meets the highest standards of quality and craftsmanship.</p>
                    <div class="service-cta">
                        <a href="{{ route('setservice', ['service' => 'Construction']) }}" class="btn btn-outline">View
                            Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Renovation -->
    <section id="renovation" class="service-section alt-bg">
        <div class="container">
            <div class="service-content reverse">
                <div class="service-details">
                    <div class="section-header">
                        <h2>Renovation</h2>
                        <p>Transforming existing spaces with modern updates</p>
                    </div>
                    <p>Our renovation services breathe new life into existing structures, enhancing functionality, energy
                        efficiency, and aesthetic appeal. Whether you're looking to update a single room or completely
                        transform
                        your property, our team delivers exceptional results that balance your vision with practical
                        considerations.
                    </p>
                    <h3>What We Offer:</h3>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Complete home renovations</li>
                        <li><i class="fas fa-check"></i> Kitchen and bathroom remodeling</li>
                        <li><i class="fas fa-check"></i> Commercial space renovations</li>
                        <li><i class="fas fa-check"></i> Historic building restoration</li>
                        <li><i class="fas fa-check"></i> Structural repairs and upgrades</li>
                        <li><i class="fas fa-check"></i> Energy efficiency improvements</li>
                    </ul>
                    <p>We work closely with you throughout the renovation process, maintaining clear communication and
                        ensuring
                        minimal disruption to your daily routine while transforming your space.</p>
                    <div class="service-cta">
                        <a href="{{ route('setservice', ['service' => 'Renovation']) }}" class="btn btn-outline">View
                            Teams</a>
                    </div>
                </div>
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/5824901/pexels-photo-5824901.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Renovation Services">
                </div>
            </div>
        </div>
    </section>

    <!-- Painting -->
    <section id="painting" class="service-section">
        <div class="container">
            <div class="service-content">
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/6474077/pexels-photo-6474077.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Painting Services">
                </div>
                <div class="service-details">
                    <div class="section-header">
                        <h2>Painting</h2>
                        <p>Adding color and protection to your property</p>
                    </div>
                    <p>Our professional painting services enhance the appearance and longevity of your property's interior
                        and
                        exterior surfaces. Using premium paints and expert techniques, our skilled painters deliver flawless
                        results
                        that transform your space and protect your investment.</p>
                    <h3>What We Offer:</h3>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Interior painting for residential and commercial spaces</li>
                        <li><i class="fas fa-check"></i> Exterior painting with weather-resistant materials</li>
                        <li><i class="fas fa-check"></i> Cabinet refinishing and painting</li>
                        <li><i class="fas fa-check"></i> Decorative and faux finishes</li>
                        <li><i class="fas fa-check"></i> Color consultation and matching</li>
                        <li><i class="fas fa-check"></i> Surface preparation and repair</li>
                    </ul>
                    <p>We take pride in our attention to detail, proper preparation, and clean work practices, ensuring a
                        smooth,
                        durable finish and a hassle-free experience for our clients.</p>
                    <div class="service-cta">
                        <a href="{{ route('setservice', ['service' => 'Painting']) }}" class="btn btn-outline">View
                            Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interior Design -->
    <section id="interior" class="service-section alt-bg">
        <div class="container">
            <div class="service-content reverse">
                <div class="service-details">
                    <div class="section-header">
                        <h2>Interior Design</h2>
                        <p>Creating beautiful, functional spaces</p>
                    </div>
                    <p>Our interior design services blend aesthetics with functionality to create spaces that reflect your
                        personal style and meet your practical needs. Whether for residential or commercial properties, our
                        designers work closely with you to develop customized solutions that optimize space, enhance
                        comfort, and
                        add value to your property.</p>
                    <h3>What We Offer:</h3>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Comprehensive interior design plans</li>
                        <li><i class="fas fa-check"></i> Space planning and optimization</li>
                        <li><i class="fas fa-check"></i> Material and finish selection</li>
                        <li><i class="fas fa-check"></i> Furniture and fixture recommendations</li>
                        <li><i class="fas fa-check"></i> Lighting design and solutions</li>
                        <li><i class="fas fa-check"></i> Custom cabinetry and built-ins</li>
                    </ul>
                    <p>Our designs balance current trends with timeless elements, ensuring your space remains stylish and
                        relevant
                        for years to come while reflecting your unique personality and preferences.</p>
                    <div class="service-cta">
                        <a href="{{ route('setservice', ['service' => 'Interior']) }}" class="btn btn-outline">View
                            Teams</a>
                    </div>
                </div>
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Interior Design Services">
                </div>
            </div>
        </div>
    </section>

    <!-- Plumbing -->
    <section id="plumbing" class="service-section">
        <div class="container">
            <div class="service-content">
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/5025521/pexels-photo-5025521.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Plumbing Services">
                </div>
                <div class="service-details">
                    <div class="section-header">
                        <h2>Plumbing</h2>
                        <p>Expert plumbing solutions for every project</p>
                    </div>
                    <p>Our plumbing services ensure reliable, efficient water systems for your property. From new
                        installations to
                        repairs and upgrades, our licensed plumbers deliver quality workmanship that meets all applicable
                        codes and
                        standards while addressing your specific needs.</p>
                    <h3>What We Offer:</h3>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> New plumbing system installation</li>
                        <li><i class="fas fa-check"></i> Pipe repair and replacement</li>
                        <li><i class="fas fa-check"></i> Fixture installation and upgrades</li>
                        <li><i class="fas fa-check"></i> Water heater services</li>
                        <li><i class="fas fa-check"></i> Drain cleaning and maintenance</li>
                        <li><i class="fas fa-check"></i> Water-efficient solutions</li>
                    </ul>
                    <p>We prioritize durability and efficiency in all our plumbing work, helping you avoid future problems
                        while
                        potentially reducing water usage and associated costs.</p>
                    <div class="service-cta">
                        <a href="{{ route('setservice', ['service' => 'Plumbing']) }}" class="btn btn-outline">View
                            Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Electrical -->
    <section id="electrical" class="service-section alt-bg">
        <div class="container">
            <div class="service-content reverse">
                <div class="service-details">
                    <div class="section-header">
                        <h2>Electrical</h2>
                        <p>Safe, reliable electrical services</p>
                    </div>
                    <p>Our electrical services cover all aspects of electrical systems for residential and commercial
                        properties.
                        Our certified electricians prioritize safety, efficiency, and code compliance while delivering
                        solutions
                        that meet your power needs and enhance your property's functionality.</p>
                    <h3>What We Offer:</h3>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Complete electrical system installation</li>
                        <li><i class="fas fa-check"></i> Electrical repairs and troubleshooting</li>
                        <li><i class="fas fa-check"></i> Panel upgrades and replacements</li>
                        <li><i class="fas fa-check"></i> Lighting design and installation</li>
                        <li><i class="fas fa-check"></i> Generator installation and servicing</li>
                        <li><i class="fas fa-check"></i> Energy-efficient electrical solutions</li>
                    </ul>
                    <p>From simple repairs to complex system installations, we combine technical expertise with attention to
                        detail to ensure your electrical systems are safe, reliable, and suited to your needs.</p>
                    <div class="service-cta">
                        <a href="{{ route('setservice', ['service' => 'Electrical']) }}" class="btn btn-outline">View
                            Teams</a>
                    </div>
                </div>
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/8961695/pexels-photo-8961695.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Electrical Services">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="service-process">
        <div class="container">
            <div class="section-header center">
                <h2>Our Service Process</h2>
                <p>How we ensure quality and satisfaction in every project</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Consultation</h3>
                    <p>We begin with a detailed discussion of your project goals, requirements, and budget to ensure we
                        understand
                        your vision.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Planning</h3>
                    <p>Our team develops a comprehensive project plan, including timeline, materials, and cost estimates for
                        your
                        approval.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h3>Design</h3>
                    <p>We create detailed designs and specifications to guide the execution of your project and reflect your
                        preferences.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Construction</h3>
                    <p>Our skilled team implements the project according to plan, with regular progress updates and quality
                        checks.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Inspection</h3>
                    <p>We conduct thorough inspections to ensure all work meets our high standards and complies with
                        relevant
                        codes.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Completion</h3>
                    <p>We finalize all details, conduct a walkthrough with you, and ensure your complete satisfaction before
                        project closeout.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Your Project?</h2>
                <p>Contact us today for a free consultation and project estimate</p>
                <div class="cta-buttons">
                    <a href="contact.html" class="btn btn-primary">Get in Touch</a>
                    <a href="tel:+92317-7727616" class="btn btn-outline"><i class="fas fa-phone"></i> (+92)
                        317-7727616</a>
                </div>
            </div>
        </div>
    </section>
@endsection
