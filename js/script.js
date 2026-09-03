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

});