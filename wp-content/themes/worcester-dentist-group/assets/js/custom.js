// Custom JavaScript for Worcester Dentist Group

jQuery(document).ready(function($) {
    // Mobile Menu Toggle
    $('.menu-toggle').on('click', function() {
        $('.main-navigation').toggleClass('toggled');
    });

    // Smooth Scroll for Anchor Links
    $('a[href*="#"]').not('[href="#"]').click(function(event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        }
    });

    // Form Validation
    $('#contact-form').on('submit', function(e) {
        var valid = true;
        $(this).find('input[required], textarea[required]').each(function() {
            if (!$(this).val()) {
                valid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        if (!valid) {
            e.preventDefault();
        }
    });
});
