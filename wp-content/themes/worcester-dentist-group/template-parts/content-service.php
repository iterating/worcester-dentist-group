<?php
/**
 * Template part for displaying services
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header>

    <div class="entry-content">
        <?php
        if (has_post_thumbnail()) :
            the_post_thumbnail('full');
        endif;

        the_content();

        // Display service details if they exist
        $service_details = get_post_meta(get_the_ID(), 'service_details', true);
        if ($service_details) :
        ?>
            <div class="service-details">
                <?php echo wp_kses_post($service_details); ?>
            </div>
        <?php endif; ?>

        <div class="service-cta">
            <h3>Schedule Your Appointment Today</h3>
            <p>Call us at (508) 757-3466 or use our online booking system.</p>
            <a href="<?php echo esc_url(home_url('/book-appointment')); ?>" class="button">Book Now</a>
        </div>
    </div>
</article>
