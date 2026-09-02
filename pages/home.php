<?php
/**
 * Template Name: Home
 *
 * Custom landing page template.
 */

get_header();
?>



<!-- =========================================================
     HERO SECTION
========================================================= -->
<section id="hero" class="hero-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Hero Content -->
            <div class="col-lg-6">

                <span class="eyebrow">
                    DIGITAL MARKETING THAT GROWS BUSINESSES
                </span>

                <h1>
                    We Help Brands
                    <span>Grow Smarter & Faster</span>
                </h1>

                <p class="hero-description">
                    Data-driven strategies. Creative campaigns.
                    Measurable results. Let's scale your business
                    to the next level.
                </p>

                <div class="hero-buttons">

                    <a href="#contact" class="btn btn-primary-custom btn-lg">
                        Get a Free Proposal
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                    <a href="#services" class="watch-link">
                        <span class="play-button">
                            <i class="bi bi-play-fill"></i>
                        </span>
                        Watch How It Works
                    </a>

                </div>

            </div>


            <!-- Dashboard -->
            <div class="col-lg-6">

                <div class="dashboard-card">

                    <div class="dashboard-header">
                        <span>Performance Overview</span>

                        <div class="growth-badge">
                            <span>↗ +48%</span>
                            <small>Growth</small>
                        </div>
                    </div>

                    <!-- Fake Chart -->
                    <div class="chart-container">

                        <div class="chart-grid"></div>

                        <svg
                            viewBox="0 0 600 200"
                            class="chart-svg"
                            role="img"
                            aria-label="Performance growth chart"
                        >
                            <defs>
                                <linearGradient
                                    id="chartGradient"
                                    x1="0"
                                    y1="0"
                                    x2="0"
                                    y2="1"
                                >
                                    <stop
                                        offset="0%"
                                        stop-color="#4f46e5"
                                        stop-opacity=".35"
                                    />
                                    <stop
                                        offset="100%"
                                        stop-color="#4f46e5"
                                        stop-opacity="0"
                                    />
                                </linearGradient>
                            </defs>

                            <path
                                d="M0,145
                                   C70,120 90,125 150,85
                                   C210,45 240,130 300,120
                                   C360,110 390,65 450,80
                                   C510,95 550,55 600,45
                                   L600,200
                                   L0,200 Z"
                                fill="url(#chartGradient)"
                            />

                            <path
                                d="M0,145
                                   C70,120 90,125 150,85
                                   C210,45 240,130 300,120
                                   C360,110 390,65 450,80
                                   C510,95 550,55 600,45"
                                fill="none"
                                stroke="#6366f1"
                                stroke-width="4"
                            />
                        </svg>

                    </div>

                    <!-- Stats -->
                    <div class="row g-3">

                        <div class="col-4">
                            <div class="stat-card">
                                <small>Website Traffic</small>
                                <strong>25.6K</strong>
                                <span>+28%</span>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="stat-card">
                                <small>Leads Generated</small>
                                <strong>1.2K</strong>
                                <span>+35%</span>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="stat-card">
                                <small>Conversion Rate</small>
                                <strong>4.8%</strong>
                                <span>+12%</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Trusted Brands -->
        <div class="trusted-brands">

            <p>Trusted by growing brands</p>

            <div class="row align-items-center justify-content-center g-4">

                <div class="col-4 col-md">
                    <span>NEXORA</span>
                </div>

                <div class="col-4 col-md">
                    <span>
                        <i class="bi bi-cloud"></i> Cloudly
                    </span>
                </div>

                <div class="col-4 col-md">
                    <span>PULSE</span>
                </div>

                <div class="col-4 col-md">
                    <span>
                        <i class="bi bi-record-circle"></i> taskly
                    </span>
                </div>

                <div class="col-4 col-md">
                    <span>Vertica</span>
                </div>

                <div class="col-4 col-md">
                    <span>waves</span>
                </div>

            </div>

        </div>

    </div>
</section>


<!-- =========================================================
     SERVICES SECTION
========================================================= -->
<section id="services" class="section-padding services-section">

    <div class="container">

        <div class="section-heading text-center">

            <span class="eyebrow purple">
                OUR SERVICES
            </span>

            <h2>
                Solutions That Drive Real Results
            </h2>

            <p>
                From strategy to execution, we deliver digital
                marketing solutions that help you grow.
            </p>

        </div>


        <div class="row g-4">

            <!-- Service -->
            <div class="col-md-6 col-lg-4">

                <article class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-bar-chart"></i>
                    </div>

                    <h3>Search Engine Optimization</h3>

                    <p>
                        Improve rankings, drive organic traffic,
                        and grow your visibility on Google.
                    </p>

                    <a href="#" class="service-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>

            </div>


            <!-- Service -->
            <div class="col-md-6 col-lg-4">

                <article class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-megaphone"></i>
                    </div>

                    <h3>Paid Advertising</h3>

                    <p>
                        ROI-focused ad campaigns across Google,
                        Meta, LinkedIn, and more.
                    </p>

                    <a href="#" class="service-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>

            </div>


            <!-- Service -->
            <div class="col-md-6 col-lg-4">

                <article class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-pencil"></i>
                    </div>

                    <h3>Content Marketing</h3>

                    <p>
                        Engaging content that educates your audience
                        and builds brand authority.
                    </p>

                    <a href="#" class="service-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>

            </div>


            <!-- Service -->
            <div class="col-md-6 col-lg-4">

                <article class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <h3>Email Marketing</h3>

                    <p>
                        Automated email flows that nurture leads
                        and increase customer retention.
                    </p>

                    <a href="#" class="service-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>

            </div>


            <!-- Service -->
            <div class="col-md-6 col-lg-4">

                <article class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-pie-chart"></i>
                    </div>

                    <h3>Conversion Optimization</h3>

                    <p>
                        Turn more visitors into customers with
                        data-backed CRO strategies.
                    </p>

                    <a href="#" class="service-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>

            </div>


            <!-- Service -->
            <div class="col-md-6 col-lg-4">

                <article class="service-card">

                    <div class="service-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>

                    <h3>Analytics & Reporting</h3>

                    <p>
                        Track performance, measure results, and make
                        smarter marketing decisions.
                    </p>

                    <a href="#" class="service-link">
                        Learn more
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     TESTIMONIAL SECTION
========================================================= -->
<section id="case-studies" class="section-padding testimonials-section">

    <div class="container">

        <div class="section-heading text-center">

            <span class="eyebrow purple">
                WHAT OUR CLIENTS SAY
            </span>

            <h2>
                Trusted by Businesses Worldwide
            </h2>

        </div>


        <div class="row g-4">

            <div class="col-md-4">

                <article class="testimonial-card">

                    <div class="quote-icon">
                        "
                    </div>

                    <p>
                        "Brandly transformed our online presence.
                        Our traffic increased by 200% in just
                        3 months!"
                    </p>

                    <div class="testimonial-author">

                        <div class="avatar">
                            SJ
                        </div>

                        <div>
                            <strong>Sarah Johnson</strong>
                            <small>CEO, Nexora</small>
                        </div>

                    </div>

                </article>

            </div>


            <div class="col-md-4">

                <article class="testimonial-card">

                    <div class="quote-icon">
                        "
                    </div>

                    <p>
                        "Their team is responsive, data-driven,
                        and delivers real results. Best marketing
                        partner we've worked with."
                    </p>

                    <div class="testimonial-author">

                        <div class="avatar">
                            MC
                        </div>

                        <div>
                            <strong>Michael Chen</strong>
                            <small>Marketing Director, Cloudly</small>
                        </div>

                    </div>

                </article>

            </div>


            <div class="col-md-4">

                <article class="testimonial-card">

                    <div class="quote-icon">
                        "
                    </div>

                    <p>
                        "The campaigns they ran for us generated
                        high-quality leads and significantly
                        increased our ROI."
                    </p>

                    <div class="testimonial-author">

                        <div class="avatar">
                            ER
                        </div>

                        <div>
                            <strong>Emma Rodriguez</strong>
                            <small>Founder, Waves</small>
                        </div>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     PRICING SECTION
========================================================= -->
<section id="pricing" class="section-padding pricing-section">

    <div class="container">

        <div class="section-heading text-center">

            <span class="eyebrow purple">
                PRICING
            </span>

            <h2>
                Simple Plans. Powerful Results.
            </h2>

            <p>
                Choose a plan that fits your business needs.
            </p>

        </div>


        <div class="row g-4 align-items-center">

            <!-- Starter -->
            <div class="col-lg-4">

                <div class="pricing-card">

                    <h3>Starter</h3>

                    <div class="price">
                        <span>$499</span>
                        <small>/month</small>
                    </div>

                    <ul>
                        <li>SEO Audit</li>
                        <li>Keyword Research</li>
                        <li>On-Page Optimization</li>
                        <li>Monthly Report</li>
                    </ul>

                    <a href="#contact" class="btn btn-outline-primary w-100">
                        Get Started
                    </a>

                </div>

            </div>


            <!-- Growth -->
            <div class="col-lg-4">

                <div class="pricing-card pricing-featured">

                    <div class="popular-badge">
                        POPULAR
                    </div>

                    <h3>Growth</h3>

                    <div class="price">
                        <span>$999</span>
                        <small>/month</small>
                    </div>

                    <ul>
                        <li>Everything in Starter</li>
                        <li>Paid Advertising</li>
                        <li>Content Strategy</li>
                        <li>Conversion Optimization</li>
                        <li>Weekly Reporting</li>
                    </ul>

                    <a href="#contact" class="btn btn-primary-custom w-100">
                        Get Started
                    </a>

                </div>

            </div>


            <!-- Scale -->
            <div class="col-lg-4">

                <div class="pricing-card">

                    <h3>Scale</h3>

                    <div class="price">
                        <span>$1,999</span>
                        <small>/month</small>
                    </div>

                    <ul>
                        <li>Everything in Growth</li>
                        <li>Advanced Analytics</li>
                        <li>Dedicated Account Manager</li>
                        <li>Custom Strategy</li>
                        <li>Priority Support</li>
                    </ul>

                    <a href="#contact" class="btn btn-outline-primary w-100">
                        Get Started
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT / LEAD GENERATION
========================================================= -->
<section id="contact" class="section-padding contact-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Contact Content -->
            <div class="col-lg-4">

                <span class="eyebrow purple">
                    GET STARTED
                </span>

                <h2>
                    Let's Grow Your Business Together
                </h2>

                <p>
                    Fill out the form and our team will get back
                    to you within 24 hours.
                </p>

                <ul class="benefits-list">

                    <li>
                        <i class="bi bi-check-circle"></i>
                        Free consultation
                    </li>

                    <li>
                        <i class="bi bi-check-circle"></i>
                        Custom strategy
                    </li>

                    <li>
                        <i class="bi bi-check-circle"></i>
                        No obligation
                    </li>

                </ul>

            </div>


            <!-- Lead Form -->
            <div class="col-lg-8">

                <div class="contact-form-card">

                    <form
                        id="leadForm"
                        novalidate
                        action="/api/leads"
                        method="POST"
                    >

                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-md-6">

                                <label for="name" class="form-label">
                                    Name *
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Your full name"
                                    required
                                    autocomplete="name"
                                >

                                <div class="invalid-feedback">
                                    Please enter your name.
                                </div>

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <label for="email" class="form-label">
                                    Email *
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="you@company.com"
                                    required
                                    autocomplete="email"
                                >

                                <div class="invalid-feedback">
                                    Please enter a valid email.
                                </div>

                            </div>


                            <!-- Company -->
                            <div class="col-md-6">

                                <label for="company" class="form-label">
                                    Company
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="company"
                                    name="company"
                                    placeholder="Your company"
                                    autocomplete="organization"
                                >

                            </div>


                            <!-- Phone -->
                            <div class="col-md-6">

                                <label for="phone" class="form-label">
                                    Phone
                                </label>

                                <input
                                    type="tel"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    placeholder="+1 (123) 456-7890"
                                    autocomplete="tel"
                                >

                            </div>


                            <!-- Message -->
                            <div class="col-12">

                                <label for="message" class="form-label">
                                    Message
                                </label>

                                <textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Tell us about your business and goals..."
                                ></textarea>

                            </div>


                            <!-- Form Status -->
                            <div class="col-12">

                                <div
                                    id="formStatus"
                                    class="form-status"
                                    role="alert"
                                    aria-live="polite"
                                ></div>

                            </div>


                            <!-- Submit -->
                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn btn-primary-custom w-100"
                                    id="submitButton"
                                >

                                    <span class="button-text">
                                        Send Message
                                    </span>

                                    <span
                                        class="spinner-border spinner-border-sm d-none"
                                        id="submitSpinner"
                                        aria-hidden="true"
                                    ></span>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>


        <!-- =================================================
             FORM STATES
        ================================================== -->
        <div class="row g-4 mt-5">

            <div class="col-md-4">

                <div class="state-card loading-state">
                    <span class="state-icon">
                        <span class="spinner-border spinner-border-sm"></span>
                    </span>

                    <div>
                        <small>LOADING STATE</small>
                        <p>Submitting your message...</p>
                    </div>
                </div>

            </div>


            <div class="col-md-4">

                <div class="state-card success-state">
                    <span class="state-icon">
                        <i class="bi bi-check-circle"></i>
                    </span>

                    <div>
                        <small>SUCCESS STATE</small>
                        <p>Thank you! Your message has been sent successfully.</p>
                    </div>
                </div>

            </div>


            <div class="col-md-4">

                <div class="state-card error-state">
                    <span class="state-icon">
                        <i class="bi bi-exclamation-circle"></i>
                    </span>

                    <div>
                        <small>ERROR STATE</small>
                        <p>Something went wrong. Please try again later.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


<?php get_footer(); ?>