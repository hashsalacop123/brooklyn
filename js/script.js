jQuery(document).ready(function ($) {

    // Get the mobile menu button.
    var menuButton = $('.navbar-toggler');

    // Get the navigation menu.
    var menu = $('#mainNavigation');

    // Check if the elements exist.
    console.log('Navbar button:', menuButton);
    console.log('Navbar menu:', menu);

    // Check if Bootstrap JavaScript is loaded.
    console.log('Bootstrap:', typeof bootstrap);

// Tracking code for contactform 7

    // Track when the user starts interacting with a Contact Form 7 form.
    $(document).on('focusin', '.wpcf7 input, .wpcf7 textarea, .wpcf7 select', function () {
        window.dataLayer = window.dataLayer || [];

        // Only fire once per page.
        if (!window.cf7FormStarted) {
            window.cf7FormStarted = true;

            window.dataLayer.push({
                event: 'form_started'
            });
        }
    });

    // Track successful Contact Form 7 submissions.
    document.addEventListener('wpcf7mailsent', function () {
        window.dataLayer = window.dataLayer || [];

        window.dataLayer.push({
            event: 'form_submitted'
        });
    });

    // Track failed/invalid Contact Form 7 submissions.
    document.addEventListener('wpcf7invalid', function () {
        window.dataLayer = window.dataLayer || [];

        window.dataLayer.push({
            event: 'form_submission_failure'
        });
    });

    document.addEventListener('wpcf7mailfailed', function () {
        window.dataLayer = window.dataLayer || [];

        window.dataLayer.push({
            event: 'form_submission_failure'
        });
    });


});



