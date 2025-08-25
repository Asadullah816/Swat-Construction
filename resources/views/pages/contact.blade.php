@extends('layout.layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('main/css/contact.css') }}">
@endsection
@section('content')
    <section class="contact-info-section">
        <div class="container">
            <div class="section-header center">
                <h2>Get In Touch</h2>
                <p>We're here to answer any questions about your construction needs</p>
            </div>
            <div class="contact-info-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p class="contact-detail">Kanju Towinship Swat</p>
                    <p class="contact-detail">Mingora City, Swat</p>
                    <p class="contact-detail">Pakistan</p>
                    <a href="https://maps.google.com" target="_blank">Get Directions</a>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p class="contact-detail">Main Office: (+92) 317-7727616</p>
                    <p class="contact-detail">Customer Service: (+92) 317-7727616</p>
                    <p class="contact-detail">Emergency: (+92) 317-7727616</p>
                    <p class="contact-detail">Hours: Mon-Fri, 8am-6pm</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p class="contact-detail">General Inquiries:</p>
                    <p class="contact-detail"><a href="mailto:swatconstruction@gmail.com">swatconstruction@gmail.com</a></p>
                    <p class="contact-detail">Customer Support:</p>
                    <p class="contact-detail"><a href="mailto:swatconstruction@gmail.com">swatconstruction@gmail.com</a></p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Connect</h3>
                    <p class="contact-detail">Follow us on social media</p>
                    <div class="social-links-contact">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="main-contact-section">
        <div class="container">
            <div>
                <div class="contact-form-wrapper">
                    <div class="form-header">
                        <h2>Send Us a Message</h2>
                        <p>Fill out the form below and we'll get back to you as soon as possible</p>
                    </div>
                    <div class="form-success-message" id="form-success">
                        Your message has been sent successfully. We'll be in touch shortly!
                    </div>
                    <div class="form-error-message" id="form-error">
                        There was an error sending your message. Please try again.
                    </div>
                    <form id="contact-form" method="POST" action="{{ route('contact') }}" class="contact-form">
                        @csrf
                        <div class="form-row">

                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" id="name" name="name" required>
                                <input type="hidden" id="name" name="{{ $team->id }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="service">Service of Interest</label>
                            <select id="service" name="service">
                                <option value="" selected disabled>{{ $team->service }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>
                        <div class="form-footer">
                            <div class="privacy-consent">
                                <input type="checkbox" id="privacy-consent" name="privacy-consent" required>
                                <label for="privacy-consent">I agree to the <a href="#">Privacy Policy</a> and
                                    consent
                                    to BuildMaster
                                    Construction storing and processing my data.</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
