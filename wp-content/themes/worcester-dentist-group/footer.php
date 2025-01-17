<?php
/**
 * The template for displaying the footer
 */
?>
    <footer id="colophon" class="site-footer">
        <div class="footer-content">
            <div class="footer-info">
                <div class="contact-info">
                    <h3>Contact Us</h3>
                    <p>130 Gold Star Blvd, Worcester, MA 01606</p>
                    <p>Phone: (508) 757-3466</p>
                </div>
                <div class="office-hours">
                    <h3>Office Hours</h3>
                    <ul>
                        <li>Monday: 8:00 AM - 5:00 PM</li>
                        <li>Tuesday: 8:00 AM - 5:00 PM</li>
                        <li>Wednesday: 8:00 AM - 5:00 PM</li>
                        <li>Thursday: 8:00 AM - 5:00 PM</li>
                        <li>Friday: 8:00 AM - 5:00 PM</li>
                        <li>Saturday: By Appointment</li>
                        <li>Sunday: Closed</li>
                    </ul>
                </div>
            </div>
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                ));
                ?>
            </nav>
            <div class="site-info">
                <p>&copy; <?php echo date('Y'); ?> Worcester Dentist Group. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
