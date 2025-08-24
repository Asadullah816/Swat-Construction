@extends('layout.layout')
<!-- Hero Section -->
@section('content')
<section class="hero">
    <div class="hero-slider">
        <div class="hero-slide active">
            <div class="hero-content">
                <h1>Building Your Dreams Into Reality</h1>
                <p>Expert construction solutions for residential and commercial projects</p>
                <div class="hero-buttons">
                    <a href="services.html" class="btn btn-primary">Our Services</a>
                    <a href="contact.html" class="btn btn-secondary">Get a Quote</a>
                </div>
            </div>
        </div>
        <div class="hero-slide">
            <div class="hero-content">
                <h1>Quality Craftsmanship</h1>
                <p>Bringing excellence to every project, big or small</p>
                <div class="hero-buttons">
                    <a href="projects.html" class="btn btn-primary">View Projects</a>
                    <a href="contact.html" class="btn btn-secondary">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="hero-slide">
            <div class="hero-content">
                <h1>Professional Painting Services</h1>
                <p>Transform your space with our expert painting solutions</p>
                <div class="hero-buttons">
                    <a href="services.html#painting" class="btn btn-primary">Learn More</a>
                    <a href="contact.html" class="btn btn-secondary">Request Service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-controls">
        <button class="prev-slide"><i class="fas fa-chevron-left"></i></button>
        <div class="slider-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
        <button class="next-slide"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>

<!-- Services Overview -->
<section class="services-overview">
    <div class="container">
        <div class="section-header">
            <h2>Our Services</h2>
            <p>Comprehensive construction solutions for all your needs</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Building Construction</h3>
                <p>From foundation to finishing touches, we handle every aspect of construction with precision.</p>
                <a href="services.html#construction" class="btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-hammer"></i>
                </div>
                <h3>Renovation</h3>
                <p>Transform existing structures into modern, functional spaces that meet your specifications.</p>
                <a href="services.html#renovation" class="btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-paint-roller"></i>
                </div>
                <h3>Painting</h3>
                <p>Professional painting services for interior and exterior walls with premium materials.</p>
                <a href="services.html#painting" class="btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-couch"></i>
                </div>
                <h3>Interior Design</h3>
                <p>Create aesthetically pleasing and functional interior spaces tailored to your preferences.</p>
                <a href="services.html#interior" class="btn-text">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="about-preview">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Swat Construction Company</h2>
                <h3>5+ Years of Construction Excellence</h3>
                <p>Since our founding in 2020, Swat Construction Company has been delivering exceptional construction
                    services
                    and building lasting relationships with our clients. Our team of experienced professionals is
                    committed to
                    quality, safety, and client satisfaction.</p>
                <div class="about-stats">
                    <div class="stat">
                        <h4>50+</h4>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat">
                        <h4>100+</h4>
                        <p>Expert Team Members</p>
                    </div>
                    <div class="stat">
                        <h4>98%</h4>
                        <p>Client Satisfaction</p>
                    </div>
                </div>
                <a href="about.html" class="btn btn-secondary">About Our Company</a>
            </div>
            <div class="about-image">
                <img src="https://images.pexels.com/photos/2760241/pexels-photo-2760241.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="BuildMaster Construction Team">
            </div>
        </div>
    </div>
</section>

<!-- Featured Projsects -->
<section class="featured-projects">
    <div class="container">
        <div class="section-header">
            <h2>Featured Projects</h2>
            <p>Explore our recent construction and renovation success stories</p>
        </div>
        <div class="project-grid">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/1547833/pexels-photo-1547833.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Modern Office Complex">
                    <div class="project-overlay">
                        <a href="projects.html" class="view-project">View Project</a>
                    </div>
                </div>
                <div class="project-details">
                    <h3>Modern Office Complex</h3>
                    <p class="project-category">Commercial Construction</p>
                    <p class="project-location"><i class="fas fa-map-marker-alt"></i> Kabal ,SWAT</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Luxury Residential Estate">
                    <div class="project-overlay">
                        <a href="projects.html" class="view-project">View Project</a>
                    </div>
                </div>
                <div class="project-details">
                    <h3>Luxury Residential Estate</h3>
                    <p class="project-category">Residential Construction</p>
                    <p class="project-location"><i class="fas fa-map-marker-alt"></i> Kanju ,SWAT</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.pexels.com/photos/2883049/pexels-photo-2883049.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Historic Building Renovation">
                    <div class="project-overlay">
                        <a href="projects.html" class="view-project">View Project</a>
                    </div>
                </div>
                <div class="project-details">
                    <h3>Historic Building Renovation</h3>
                    <p class="project-category">Renovation</p>
                    <p class="project-location"><i class="fas fa-map-marker-alt"></i> Mingora ,SWAT</p>
                </div>
            </div>
        </div>
        <div class="center-button">
            <a href="projects.html" class="btn btn-primary">View All Projects</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <h2>What Our Clients Say</h2>
            <p>Read testimonials from our satisfied clients</p>
        </div>
        <div class="testimonial-slider">
            <div class="testimonial-slide active">
                <div class="testimonial-content">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"Swat Construction Company exceeded all our expectations. Their
                        attention to
                        detail and commitment to quality was evident throughout the project. Our new office building is
                        exactly
                        what we envisioned."</p>
                    <div class="testimonial-author">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="John Williams">
                        <div class="author-info">
                            <h4>Pacha</h4>
                            <p>CEO, pacha Enterprises</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slide">
                <div class="testimonial-content">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"The renovation of our historical property was handled with such care
                        and
                        professionalism. The team respected the integrity of the original architecture while modernizing
                        the
                        necessary elements."</p>
                    <div class="testimonial-author">
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Sarah Johnson">
                        <div class="author-info">
                            <h4>Sarah</h4>
                            <p>Historical Society Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slide">
                <div class="testimonial-content">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="testimonial-text">"From the initial consultation to the final walkthrough, Swat
                        Construction
                        Company was a pleasure to work with. Their painting team transformed our entire home with
                        precision and
                        care. We couldn't be happier."</p>
                    <div class="testimonial-author">
                        <img src="https://images.pexels.com/photos/3785104/pexels-photo-3785104.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Robert Chen">
                        <div class="author-info">
                            <h4>Muhammad</h4>
                            <p>Homeowner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-controls">
            <button class="prev-testimonial"><i class="fas fa-chevron-left"></i></button>
            <div class="testimonial-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
            </div>
            <button class="next-testimonial"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="center-button">
            <a href="testimonials.html" class="btn btn-secondary">Read More Testimonials</a>
        </div>
    </div>
</section>

<!-- Team Preview -->
<section class="team-preview">
    <div class="container">
        <div class="section-header">
            <h2>Meet Our Team</h2>
            <p>The experienced professionals behind Swat Construction Company</p>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-image">
                    <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Michael Anderson">
                </div>
                <div class="team-details">
                    <h3>Northwest Architect</h3>
                    <p class="team-position">Chief Architect</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="https://images.pexels.com/photos/3778603/pexels-photo-3778603.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Jennifer Martinez">
                </div>
                <div class="team-details">
                    <h3>Salman Pacha</h3>
                    <p class="team-position">Project Manager</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="David Wilson">
                </div>
                <div class="team-details">
                    <h3>Hayat Ali</h3>
                    <p class="team-position">Lead Engineer</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="https://images.pexels.com/photos/3760809/pexels-photo-3760809.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Sophia Lee">
                </div>
                <div class="team-details">
                    <h3>Swat Interior Designer</h3>
                    <p class="team-position">Interior Designer</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-button">
            <a href="team.html" class="btn btn-primary">View Full Team</a>
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
