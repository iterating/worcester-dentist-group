<?php
/**
 * The template for displaying the front page
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Worcester Dentist Group</h1>
            <p>Providing Quality Dental Care in Worcester, MA</p>
            <a href="<?php echo esc_url(home_url('/book-appointment')); ?>" class="cta-button">Book an Appointment</a>
        </div>
    </section>

    <section class="services-overview">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <?php
                $services = array(
                    'General Dentistry',
                    'Cosmetic Dentistry',
                    'Dental Implants',
                    'Emergency Care',
                    'Dentures',
                    'Preventive Care'
                );

                foreach ($services as $service) :
                ?>
                    <div class="service-card">
                        <h3><?php echo esc_html($service); ?></h3>
                        <a href="<?php echo esc_url(home_url('/services/' . sanitize_title($service))); ?>" class="learn-more">Learn More</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="about-preview">
        <div class="container">
            <h2>About Our Practice</h2>
            <p>At Worcester Dentist Group, we are committed to providing exceptional dental care in a comfortable and welcoming environment.</p>
            <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="read-more">Read More About Us</a>
        </div>
    </section>

    <section class="contact-info">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-grid">
                <div class="contact-details">
                    <h3>Location</h3>
                    <p>130 Gold Star Blvd<br>Worcester, MA 01606</p>
                    <h3>Phone</h3>
                    <p>(508) 757-3466</p>
                </div>
                <div class="office-hours">
                    <h3>Office Hours</h3>
                    <ul>
                        <li><span>Monday:</span> 8:00 AM - 5:00 PM</li>
                        <li><span>Tuesday:</span> 8:00 AM - 5:00 PM</li>
                        <li><span>Wednesday:</span> 8:00 AM - 5:00 PM</li>
                        <li><span>Thursday:</span> 8:00 AM - 5:00 PM</li>
                        <li><span>Friday:</span> 8:00 AM - 5:00 PM</li>
                        <li><span>Saturday:</span> By Appointment</li>
                        <li><span>Sunday:</span> Closed</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
