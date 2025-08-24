@extends('layout.layout')
@section('title', 'FAQs')
@section('style')
    <link rel="stylesheet" href="{{ asset('main/css/faq.css') }}">
@endsection
@section('content')

    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <div class="breadcrumbs">
                <a href="index.html">Home</a> / <span>FAQ</span>
            </div>
        </div>
    </section>

    <!-- FAQ Header -->
    <section class="faq-header">
        <div class="container">
            <div class="section-header center">
                <h2>How Can We Help You?</h2>
                <p>Find answers to commonly asked questions about our services</p>
            </div>
            <div class="faq-search">
                <i class="fas fa-search"></i>
                <input type="text" id="faq-search" placeholder="Search for questions...">
            </div>
            <div class="faq-categories">
                <button class="category-tab active" data-category="all">All Questions</button>
                <button class="category-tab" data-category="general">General</button>
                <button class="category-tab" data-category="services">Services</button>
                <button class="category-tab" data-category="projects">Projects</button>
                <button class="category-tab" data-category="pricing">Pricing & Payment</button>
                <button class="category-tab" data-category="process">Process</button>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="faq-content">
        <div class="container">
            <!-- General Questions -->
            <div class="faq-section" data-category="general">
                <h3 class="faq-section-title"><i class="fas fa-info-circle"></i> General Questions</h3>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>What services does Swat Construction offer?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Swat Construction offers a comprehensive range of construction and renovation services,
                                    including:
                                </p>
                                <ul>
                                    <li>Residential and commercial building construction</li>
                                    <li>Home and business renovations</li>
                                    <li>Interior and exterior painting</li>
                                    <li>Interior design services</li>
                                    <li>Plumbing and electrical work</li>
                                    <li>Project management and consultation</li>
                                </ul>
                                <p>Our team of professionals can handle projects of various sizes, from small home
                                    renovations to large
                                    commercial constructions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>Where does Swat Construction operate?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Swat Construction primarily operates in Swat, with our main office in Mingora. We serve
                                    clients
                                    throughout all Swat, including Mingora, Matta, Kabal, and surrounding areas.</p>
                                <p>For larger projects, we also work in neighboring states. Please contact us to discuss
                                    your specific
                                    location and project needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>Is Swat Construction licensed and insured?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Yes, Swat Construction is fully licensed, bonded, and insured. We hold all necessary
                                    state and local
                                    licenses required for construction work.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Questions -->
            <div class="faq-section" data-category="services">
                <h3 class="faq-section-title"><i class="fas fa-hammer"></i> Services Questions</h3>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>Do you handle both residential and commercial projects?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Yes, Swat Construction handles both residential and commercial construction projects. Our
                                    team has
                                    extensive experience in:</p>
                                <ul>
                                    <li>Custom home building and renovations</li>
                                    <li>Multi-family housing developments</li>
                                    <li>Office buildings and retail spaces</li>
                                    <li>Restaurants and hospitality venues</li>
                                    <li>Industrial facilities</li>
                                </ul>
                                <p>Each type of project receives the same level of attention to detail and quality
                                    craftsmanship.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>Do you offer sustainable or green building options?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Yes, Swat Construction is committed to sustainable building practices. We offer numerous
                                    green
                                    building options, including:</p>
                                <ul>
                                    <li>Energy-efficient designs and materials</li>
                                    <li>Solar panel installation and integration</li>
                                    <li>Water conservation systems</li>
                                    <li>Sustainable and recycled building materials</li>
                                    <li>LEED certification guidance</li>
                                </ul>
                                <p>Our team stays current with the latest sustainable building technologies and can help
                                    clients achieve
                                    their environmental goals while maintaining quality and budget considerations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>Can you handle both the design and construction phases of a project?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Yes, we offer comprehensive design-build services where we handle both the architectural
                                    design and
                                    construction phases of your project. This approach offers several advantages:</p>
                                <ul>
                                    <li>Streamlined communication with a single point of contact</li>
                                    <li>Better cost control and budget management</li>
                                    <li>Faster project completion timeline</li>
                                    <li>Seamless transition between design and construction</li>
                                    <li>Integrated team collaboration from start to finish</li>
                                </ul>
                                <p>Our in-house architects and designers work closely with our construction team to ensure
                                    your vision
                                    is executed precisely as planned.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Questions -->
            <div class="faq-section" data-category="projects">
                <h3 class="faq-section-title"><i class="fas fa-project-diagram"></i> Project Questions</h3>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>How long does a typical construction project take?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Project timelines vary significantly based on size, complexity, and scope. Here are some
                                    general
                                    timeframes:</p>
                                <ul>
                                    <li>Small renovations (bathroom, kitchen): 2-4 weeks</li>
                                    <li>Home additions: 4-10 months</li>
                                    <li>Custom home construction: 12-24 months</li>
                                    <li>Small commercial buildings: 8-12 months</li>
                                    <li>Larger commercial projects: 15-24 months</li>
                                </ul>
                                <p>We provide detailed timelines during the planning phase and keep you updated throughout
                                    the project.
                                    Factors that can affect timelines include permit approvals, weather conditions, material
                                    availability,
                                    and change orders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>Do I need to move out during a home renovation?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Whether you need to move out during a renovation depends on several factors:</p>
                                <ul>
                                    <li>The extent of the renovation (whole house vs. single room)</li>
                                    <li>Whether essential facilities like bathrooms and kitchens will be usable</li>
                                    <li>Your tolerance for construction noise, dust, and disruption</li>
                                    <li>The presence of young children, elderly family members, or those with health
                                        concerns</li>
                                </ul>
                                <p>For major renovations that affect multiple rooms or essential living areas, temporary
                                    relocation is
                                    often recommended. For smaller projects, we implement dust control measures and create
                                    contained work
                                    zones to minimize disruption if you choose to stay in your home.</p>
                                <p>We'll discuss these considerations during the planning phase to help you make the best
                                    decision for
                                    your situation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>What types of permits will my project require?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Most construction projects require some form of permitting. Common permits include:</p>
                                <ul>
                                    <li>Building permits for new construction and major renovations</li>
                                    <li>Electrical, plumbing, and mechanical permits</li>
                                    <li>Demolition permits</li>
                                    <li>Grading and excavation permits</li>
                                    <li>Zoning approvals or variances</li>
                                </ul>
                                <p>As part of our service, Swat Construction handles the entire permitting process,
                                    including preparing
                                    and submitting applications, addressing any feedback from inspectors, and scheduling
                                    required
                                    inspections. This allows you to focus on the exciting aspects of your project while we
                                    manage the
                                    regulatory requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing Questions -->
            <div class="faq-section" data-category="pricing">
                <h3 class="faq-section-title"><i class="fas fa-dollar-sign"></i> Pricing & Payment Questions</h3>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>How much will my construction project cost?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Construction costs vary widely based on numerous factors including:</p>
                                <ul>
                                    <li>Project size and scope</li>
                                    <li>Quality of materials selected</li>
                                    <li>Complexity of design</li>
                                    <li>Site conditions and accessibility</li>
                                    <li>Current market conditions and material prices</li>
                                </ul>
                                <p>We provide detailed, transparent estimates after an initial consultation and site
                                    assessment. For
                                    very general reference, residential remodels might range from Rs150-Rs300+ per square
                                    foot, while new
                                    construction typically ranges from Rs200-Rs500+ per square foot, depending on finishes
                                    and complexity.
                                </p>
                                <p>We're committed to working within your budget and will provide options that align with
                                    your financial
                                    parameters while meeting your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>What payment schedule do you typically follow?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Our typical payment schedule is structured as follows:</p>
                                <ul>
                                    <li>Initial deposit: 10-15% (due upon contract signing)</li>
                                    <li>Progress payments: Tied to completed project milestones (typically 5-7 payments)
                                    </li>
                                    <li>Final payment: 5-10% (due upon project completion and final walkthrough)</li>
                                </ul>
                                <p>Each payment is linked to specific completed work, ensuring you only pay for work that
                                    has been
                                    performed. We provide detailed invoices that outline exactly what has been completed for
                                    each progress
                                    payment.</p>
                                <p>Payment methods include checks, electronic transfers, and major credit cards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>Do you offer any warranties on your work?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Yes, Swat Construction stands behind our work with comprehensive warranties:</p>
                                <ul>
                                    <li>1-year warranty on all workmanship</li>
                                    <li>2-year warranty on all systems (electrical, plumbing, HVAC)</li>
                                    <li>10-year structural warranty on new construction</li>
                                </ul>
                                <p>Additionally, we pass along all manufacturer warranties for products and materials used
                                    in your
                                    project, which often extend beyond our workmanship warranty.</p>
                                <p>If any issues arise during the warranty period, we respond promptly to address and
                                    resolve them at no
                                    additional cost to you. Complete warranty documentation is provided at project
                                    completion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Questions -->
            <div class="faq-section" data-category="process">
                <h3 class="faq-section-title"><i class="fas fa-tasks"></i> Process Questions</h3>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>What is your typical construction process?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Our construction process typically follows these steps:</p>
                                <ol>
                                    <li><strong>Initial Consultation:</strong> We discuss your project goals, requirements,
                                        and budget.
                                    </li>
                                    <li><strong>Design & Planning:</strong> We develop detailed plans, material selections,
                                        and
                                        specifications.</li>
                                    <li><strong>Proposal & Contract:</strong> We provide a comprehensive proposal and, once
                                        accepted,
                                        prepare a detailed contract.</li>
                                    <li><strong>Permitting:</strong> We obtain all necessary permits and approvals.</li>
                                    <li><strong>Pre-Construction:</strong> We finalize schedules, order materials, and
                                        prepare the site.
                                    </li>
                                    <li><strong>Construction:</strong> We execute the project according to plans, with
                                        regular progress
                                        updates.</li>
                                    <li><strong>Quality Assurance:</strong> We conduct ongoing inspections to ensure quality
                                        standards are
                                        met.</li>
                                    <li><strong>Completion:</strong> We perform final inspections, clean-up, and walkthrough
                                        with you.
                                    </li>
                                    <li><strong>Warranty:</strong> We provide warranty documentation and remain available
                                        for any
                                        follow-up needs.</li>
                                </ol>
                                <p>Throughout this process, you'll have a dedicated project manager as your main point of
                                    contact who
                                    will keep you informed and address any questions or concerns.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>How do you handle change orders during construction?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>We understand that changes sometimes become necessary during construction. Our change
                                    order process
                                    is as follows:</p>
                                <ol>
                                    <li>Change request: You request a modification to the original plans.</li>
                                    <li>Evaluation: We assess the feasibility, cost implications, and schedule impact.</li>
                                    <li>Written proposal: We provide a detailed change order with associated costs and
                                        timeline
                                        adjustments.</li>
                                    <li>Approval: Once you approve and sign the change order, we proceed with the
                                        modifications.</li>
                                    <li>Implementation: We integrate the changes into the construction schedule.</li>
                                    <li>Documentation: The change becomes part of the project record and is reflected in
                                        as-built
                                        documentation.</li>
                                </ol>
                                <p>We strive to be flexible while ensuring that all changes are properly documented to avoid
                                    misunderstandings and maintain clear expectations for both timeline and budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <div class="question-icon">Q</div>
                            <span>How will you communicate with me during my project?</span>
                            <div class="toggle-icon"></div>
                        </div>
                        <div class="faq-answer">
                            <div class="answer-content">
                                <p>Clear communication is essential to a successful project. Our communication process
                                    includes:</p>
                                <ul>
                                    <li><strong>Dedicated Project Manager:</strong> Your single point of contact throughout
                                        the project.
                                    </li>
                                    <li><strong>Weekly Progress Updates:</strong> Regular reports detailing completed work,
                                        upcoming
                                        tasks, and any issues.</li>
                                    <li><strong>Project Management Software:</strong> Access to our online portal where you
                                        can view
                                        schedules, photos, documents, and communicate with the team.</li>
                                    <li><strong>Scheduled Meetings:</strong> Regular in-person or virtual meetings at key
                                        project
                                        milestones.</li>
                                    <li><strong>Daily Accessibility:</strong> Your project manager is available via phone,
                                        email, or text
                                        during business hours.</li>
                                    <li><strong>Emergency Contact:</strong> After-hours contact information for urgent
                                        situations.</li>
                                </ul>
                                <p>We tailor our communication frequency and methods to your preferences, ensuring you're as
                                    involved as
                                    you want to be without feeling overwhelmed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Not Finding Answer Section -->
    <section class="not-finding">
        <div class="container">
            <h2>Not Finding What You're Looking For?</h2>
            <p>If you haven't found the answer to your question, please reach out to us directly. Our team is ready to
                assist
                you with any inquiries you may have about our services or your specific project needs.</p>
            <div class="contact-options">
                <div class="contact-option">
                    <div class="option-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>Speak directly with our customer service team</p>
                    <a href="tel:+92317-7727616" class="contact-link text-wrap">(+92) 317-7727616<i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="contact-option">
                    <div class="option-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>Send us your questions anytime</p>
                    <a href="mailto:info@Swatconstruction.com" class="contact-link text-wrap">swatconstruction@gmail.com<i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="contact-option">
                    <div class="option-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Contact Form</h3>
                    <p>Fill out our detailed contact form</p>
                    <a href="contact.html" class="contact-link">Get in Touch <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
