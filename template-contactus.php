<?php
/*
Template Name: Contact Us
*/
get_header();
?>

<section class="contact-us">
    <div class="container">
        <h1>Contact Us</h1>
        
        <!-- Contact Information -->
        <div class="contact-info">
            <div class="contact-details">
                <h2>Contact Details</h2>
                <p>Email: contact@example.com</p>
                <p>Phone: +1 (123) 456-7890</p>
                <p>Address: 123 Main St, City, Country</p>
            </div>
            
            <!-- Social Media Links -->
            <div class="social-media">
                <h2>Connect with Us</h2>
                <ul>
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Twitter</a></li>
                    <li><a href="#" target="_blank">Instagram</a></li>
                    <!-- Add more social media links as needed -->
                </ul>
            </div>
        </div>
        
        <!-- Contact Form (You can use a contact form plugin like Contact Form 7 or WPForms) -->
        <div class="contact-form">
            <!-- Insert your contact form shortcode here -->
            <!-- Example: [contact-form-7 id="123" title="Contact form"] -->
        </div>
    </div>
</section>

<?php get_footer(); ?>
