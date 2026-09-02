

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<!-- =========================================================
     HEADER / NAVIGATION
========================================================= -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <span class="brand-icon">
                    <i class="bi bi-intersect"></i>
                </span>
                BROOKLYN
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavigation"
                aria-controls="mainNavigation"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#case-studies">Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">About Us</a>
                    </li>
                </ul>

                <a href="#contact" class="btn btn-primary-custom">
                    Book a Free Consultation
                </a>
            </div>

        </div>
    </nav>
</header>