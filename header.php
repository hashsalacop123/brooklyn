

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-588RG8CD');</script>
<!-- End Google Tag Manager -->    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-588RG8CD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<!-- =========================================================
     HEADER / NAVIGATION
========================================================= -->
<header class="site-header">
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <!-- Logo / Brand -->
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#hero">
            <span class="brand-icon">
                <i class="bi bi-intersect"></i>
            </span>
            <span>BROOKLYN</span>
        </a>

        <!-- Mobile Hamburger Button -->
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

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="mainNavigation">

            <!-- Menu Items -->
            <ul class="navbar-nav mx-auto mb-3 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" href="#hero">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#pricing">
                        Pricing
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#case-studies">
                        Case Studies
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        About Us
                    </a>
                </li>

            </ul>

            <!-- CTA Button -->
            <a href="#contact" class="btn btn-primary-custom">
                Book a Free Consultation
            </a>

        </div>

    </div>
</nav>
</header>