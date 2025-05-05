<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We’d love to hear from you! Whether you have a question, feedback, or a collaboration idea, just drop us a message below.</p>
            </div>
        </section>

        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">
                    <p>
                        <label for="name">Your Name</label><br>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Your Email</label><br>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="subject">Subject</label><br>
                        <input type="text" id="subject" name="subject">
                    </p>
                    <p>
                        <label for="message">Message</label><br>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </p>
                    <p>
                        <input type="submit" name="submit_contact" value="Send Message">
                    </p>
                </form>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>